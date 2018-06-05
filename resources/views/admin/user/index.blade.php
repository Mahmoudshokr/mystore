@extends('layouts.admin')

@section('content')
    <h1>All Users</h1>
    <div class="bg-primary"> {{session('adduser')}}</div>
    <div class="bg-info"> {{session('edituser')}}</div>
    <div class="bg-danger"> {{session('deluser')}}</div>
    <table class="table table-striped">
           @if(count($users)>0)
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">name</th>
                      <th scope="col">email</th>
                      <th scope="col">active</th>
                      <th scope="col">admin</th>
                      <th scope="col">created_at</th>
                      <th scope="col">updated_at</th>
                      <th scope="col">Edit user</th>
                    </tr>
                  </thead>
               @foreach($users as $user)
                  <tbody>
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->active}}</td>
                      <td>{{$user->admin}}</td>
                      <td>{{$user->created_at?$user->created_at->diffForHumans():'0'}}</td>
                      <td>{{$user->updated_at?$user->updated_at->diffForHumans():'0'}}</td>
                      <td><a href="{{route('user.edit',$user->id)}}">Edit user</a></td>
                    </tr>
                  </tbody>
               @endforeach
           @else
                 <h1>No such a user</h1>
           @endif
    </table>
@stop