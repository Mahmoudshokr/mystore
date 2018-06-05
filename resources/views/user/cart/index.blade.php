@extends('layouts.userside')
@section('content')
    <div class="bg-info">
        {{session('cartdel_id')}}
    </div>

    <br><br><br><br>

         <table class="table table-hover">
           <thead class="table-dark">
             <tr>
               <th scope="col">..</th>
               <th scope="col">User name</th>
               <th scope="col">Product</th>
               <th scope="col">Category</th>
               <th scope="col">Added</th>
               <th scope="col">Salary</th>
               <th scope="col"></th>

             </tr>
           </thead>

           @foreach($cart as $car)
             <tbody>
               <tr>
                 <th scope="row">..</th>
                 <td>{{$car->user_name}}</td>
                 <td>{{$car->product_name}}</td>
                 <td>{{$car->category->name}}</td>
                 <td>{{$car->created_at->diffForHumans()}}</td>
                 <td>{{$car->product->salary}}</td>
                 <td>
                   <div class="container">
                     <div class="row">
                       {!! Form::open(['method'=>'GET','action'=>'UserHomeController@create']) !!}
                         {!! Form::token() !!}
                         {!! Form::submit('Buy',['class'=>'btn btn-primary']) !!}
                       {!! Form::close() !!}

                       {!! Form::open(['method'=>'DELETE','action'=>['UserCartController@destroy',$car->id]]) !!}
                            {!! Form::token() !!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                       {!! Form::close() !!}

                       {!! Form::open(['method'=>'GET','action'=>['UserHomeController@show',$car->product->id]]) !!}
                         {!! Form::token() !!}
                         {!! Form::submit('View',['class'=>'btn btn-dark']) !!}
                       {!! Form::close() !!}
                     </div>
                   </div>
                 </td>
               </tr>
             </tbody>
           @endforeach
           <div class="container">
             <div class="row">
               <div class="col-sm-8">
                 <th scope="col">Total:</th>
               </div>
               <div class="col-sm-4">
                 <td scope="col"></td>
                 <td scope="col"></td>
                 <td scope="col"></td>
                 <td scope="col"></td>
                 <td scope="col">{{$balance}}</td>
               </div>
             </div>
           </div>
         </table>
    <br><br><br><br><br><br><br><br>

@stop