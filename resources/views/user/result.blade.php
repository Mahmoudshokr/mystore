@extends('layouts.userside')


@section('content')

 @if($product->count() > 0)
     <div class="row">
    @foreach($product as $pro)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">{{$pro->name}}</h5>
                </div>
                <div>
                    <a href="{{route('home.show',$pro->id)}}"><img class="card-img-top" height="250" width="246" src="{{asset('images/'.$pro->photo->path)}}" class="rounded" data-toggle="tooltip" title="View details" alt="responsive image"></a>
                </div>

                <div class="card-body">

                    <p><span>Lorem ipsum dolor sit amet, quis rerum?</span></p>
                </div>

                <div class="card-footer">

                    <div>

                        {!! Form::open(['method'=>'GET','action'=>'UserHomeController@create']) !!}
                        {!! Form::token() !!}
                        {!! Form::submit('Buy',['class'=>'btn btn-outline-success btn-block']) !!}
                        {!! Form::close() !!}

                    </div>
                    <div >

                        {!! Form::open(['method'=>'POST','action'=>'UserHomeController@store']) !!}
                        {!! Form::token() !!}
                        <input type="hidden" name="pro_id" value={{$pro->id}}>
                        <input type="hidden" name="pro_name" value={{$pro->name}}>
                        <input type="hidden" name="cat_id" value={{$pro->category->id}}>
                        <input type="hidden" name="pro_salary" value={{$pro->salary}}>
                        {!! Form::submit('Add to cart',['class'=>'btn btn-outline-secondary btn-block']) !!}
                        {!! Form::close() !!}

                    </div>

                </div>

            </div><br>
        </div>
    @endforeach
     </div>


 @else

 @endif

@stop