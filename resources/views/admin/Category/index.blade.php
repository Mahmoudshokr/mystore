@extends('layouts.admin')

@section('content')
    <h1>All Categories</h1>
    <div class="container">
        <div class="row">
                <div class="col-sm-3">


                      {!! Form::open(['method'=>'POST','action'=>'AdminCategoryController@store']) !!}

                        {!! Form::token() !!}

                            {!! Form::label('Name','Name:'); !!}
                        {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'']) !!}<br>
                        {!! Form::submit('save',['class'=>'btn btn-primary']) !!}

                      {!! Form::close() !!}
                </div>


                <div class="col-md-7">
                    @if(count($categories)>0)

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">Edit</th>
                            </tr>
                            </thead>
                      @foreach($categories as $category)
                            <tbody>
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at ? $category->created_at : '0'}}</td>
                                <td>{{$category->updated_at ? $category->updated_at : '0'}}</td>
                                <td><a href="{{route('category.edit',$category->id)}}">Edit Category</a></td>
                            </tr>
                            </tbody>
                      @endforeach
                        </table>
                    @else
                        <div>
                            <div class="bg-info"><h1 align="center">There is no any category yet. </h1></div>
                        </div>
                    @endif

                </div>
        </div>
    </div>
@stop