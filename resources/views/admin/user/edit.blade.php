@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="container">
        <div class="row">
                {!! Form::model($user,['method'=>'PUT','action'=>['AdminUserController@update',$user->id]]) !!}

                {!! Form::token() !!}

                <div class="form-group">
                      {!! Form::label('Name','Name:'); !!}
                    {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                      {!! Form::label('Email','Email:') !!}
                    {!! Form::text('email',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                      {!! Form::label('Pass','Password:') !!}<br>
                    {!! Form::password('password',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                      {!! Form::label('active','Status:'); !!}
                    {!! Form::select('active', array(1 =>'Active', 0 =>'not Active'),null,['class'=>'form-control','placeholder'=>'']) !!}<br>
                      {!! Form::label('admin','Role:') !!}
                    {!! Form::select('admin',array(0=>'visitor',1=>'admin'),null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                      {!! Form::submit('edit user',['class'=>'btn btn-primary col-sm-2']) !!}

                {!! Form::close() !!}

                {!! Form::model($user,['method'=>'DELETE','action'=>['AdminUserController@destroy',$user->id]]) !!}
                       {!! Form::token() !!}
                    {!! Form::submit('delete',['class'=>'btn btn-danger col-sm-2']) !!}
                {!! Form::close() !!}
                </div>
        </div>
    </div>
@stop