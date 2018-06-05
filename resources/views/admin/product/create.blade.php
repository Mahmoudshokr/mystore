@extends('layouts.admin')
@section('content')
    <h1>Create Product</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminProductController@store','files'=>true]) !!}

        {!! Form::token() !!}
        <div class="form-group">

            {{--<input type="hidden" name="product_id" value={{$this->id}}>--}}

            {!! Form::label('name','Name:'); !!}
        {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::label('salary','Salary:') !!}
        {!! Form::number('salary',null,['class'=>'form-control','required','placeholder'=>'Please enter salary by numbers']) !!}<br>
            {!! Form::label('photo','Photo:'); !!}
        {!! Form::file('photo_id',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::label('category','Category:'); !!}
        {!! Form::select('category_id', $categories,null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
        {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
@stop