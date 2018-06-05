@extends('layouts.userside')
@section('content')
    <div class="bg-info">
        {{session('cartadd_id')}}
    </div>

    <h4>This is product number {{$product->id}}</h4>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <table>
                <p> <strong>Id <strong style="padding-left: 73px">:</strong> </strong> {{$product->id}}</p>
                <p> <strong>Category <strong style="padding-left: 20px">:</strong> </strong> {{$product->category->name}}</p>
                <p> <strong>Name <strong style="padding-left: 45px">:</strong> </strong> {{$product->name}}</p>
                <p> <strong>Salary <strong style="padding-left: 44px">:</strong> </strong> {{$product->salary}} L.E</p>
                <p> <strong>Uploaded at : </strong> {{$product->created_at->diffForHumans()}}</p>

                    {!! Form::open(['method'=>'GET','action'=>'UserHomeController@create']) !!}
                        {!! Form::token() !!}
                        {!! Form::submit('Buy',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}

                    {!! Form::open(['method'=>'POST','action'=>'UserHomeController@store']) !!}
                        {!! Form::token() !!}
                        <input type="hidden" name="pro_id" value={{$product->id}}>
                        <input type="hidden" name="pro_name" value={{$product->name}}>
                        <input type="hidden" name="cat_id" value={{$product->category->id}}>
                        <input type="hidden" name="pro_salary" value={{$product->salary}}>
                        {!! Form::submit('Add to cart',['class'=>'btn btn-info']) !!}
                    {!! Form::close() !!}

                </table>
            </div>


            <!-- Button trigger modal -->
            <div class="col-sm-6 mb-3">
            <a href="#exampleModalCenter" data-toggle="modal">
                <div>
                    <img height="400px" width="600px" src="{{asset('images/'.$product->photo->path)}}" alt="">
                </div>
            </a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div >
                        <div>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div>
                            <div >
                                <img height="400px" width="600px" src="{{asset('images/'.$product->photo->path)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop