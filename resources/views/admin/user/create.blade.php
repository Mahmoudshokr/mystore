@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store']) !!}

        {!! Form::token() !!}

        <div class="form-group">
            {!! Form::label('Name','Name:'); !!}
        {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::label('Email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::label('Pass','Password:') !!}<br>
        {!! Form::password('password',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::label('active','Status:') !!}
        {!! Form::select('active',array(1=>'Active',0=>'Not active'),0,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
            {!! Form::label('admin','Role:') !!}
        {!! Form::select('admin',array(0=>'visitor',1=>'admin'),0,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
        {!! Form::submit('Create user',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        <div>
            @if(count($errors)>0)

                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                    @endforeach
                </div>
            @endif
        </div>
@stop