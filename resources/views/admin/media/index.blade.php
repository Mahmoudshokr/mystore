@extends('layouts.admin')

@section('content')
    <h1>All Media</h1>
    @if(count($photos)>0)
        <table class="table table-striped">
          <thead>
            <tr>
                <th></th>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Size</th>
              <th scope="col">Created_at</th>
              <th scope="col">Updated_at</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
       @foreach($photos as $photo)
          <tbody>
            <tr>
                <td><img height="80" width="80" src="/mystore/public/images/{{$photo->path}}" alt=""></td>
              <td scope="row">{{$photo->id}}</td>
              <td>{{$photo->path}}</td>
              <td>{{$photo->size}} KB</td>
              <td>{{$photo->created_at ? $photo->created_at : '0' }}</td>
              <td>{{$photo->updated_at ? $photo->updated_at : '0' }}</td>
              <td>
                  {!! Form::model($photo,['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!}
                    {!! Form::token() !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                  {!! Form::close() !!}</td>
  </tr>
</tbody>
@endforeach
</table>
@else
<div class="bg-info" align="center"><h1>There is no any media yet.</h1></div>
@endif

@stop