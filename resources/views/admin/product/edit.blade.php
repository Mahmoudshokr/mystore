@extends('layouts.admin')
@section('content')
    <h1>Edit Product</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img height="180" width="180" src="/mystore/public/images/{{$product->photo ? $product->photo->path : 'No photo yet'}}" alt="">
            </div>
            <div class="col-sm-10">
                {!! Form::model($product,['method'=>'PUT','action'=>['AdminProductController@update',$product->id],'files'=>true]) !!}
            
                {!! Form::token() !!}

            
                        {!! Form::label('name','Name:'); !!}
                    {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                        {!! Form::label('salary','Salary:') !!}
                    {!! Form::number('salary',null,['class'=>'form-control','required','placeholder'=>'Please enter salary by numbers']) !!}<br>
                        {!! Form::label('photo','Photo:'); !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                        {!! Form::label('category','Category:'); !!}
                    {!! Form::select('category_id',$categories,null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                    {!! Form::submit('Edit',['class'=>'btn btn-primary col-sm-2']) !!}

                {!! Form::close() !!}
                {!! Form::model($product,['method'=>'DELETE','action'=>['AdminProductController@destroy',$product->id]]) !!}

                    {!! Form::token() !!}

                    {!! Form::submit('delete',['class'=>'btn btn-danger col-sm-2']) !!}
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop