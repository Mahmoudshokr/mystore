@extends('layouts.admin')

@section('content')
    <h1>Edit Category</h1>

    {!! Form::model($category,['method'=>'PUT','action'=>['AdminCategoryController@update',$category->id]]) !!}
            {!! Form::token() !!}
                {!! Form::label('Name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::submit('Edit',['class'=>'btn btn-primary col-sm-1']) !!}
    {!! Form::close() !!}


    {!! Form::model($category,['method'=>'DELETE','action'=>['AdminCategoryController@destroy',$category->id]]) !!}
            {!! Form::token() !!}
            {!! Form::submit('Delete',['class'=>'btn btn-danger col-sm-1']) !!}
    {!! Form::close() !!}

@stop