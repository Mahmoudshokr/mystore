@extends('layouts.admin')
@section('content')
    <h1>All Products</h1>
    @if(count($products)>0)
        <table class="table table-striped">
          <thead>
            <tr>
              <th></th>
              <th scope="col">Name</th>
              <th scope="col">Salary</th>
              <th scope="col">Category</th>
              <th scope="col">Added by</th>
              <th scope="col">Created at</th>
              <th scope="col">Updated_at</th>
            </tr>
          </thead>
            @foreach($products as $product)
          <tbody>
            <tr>
              <td><img height="50" width="50" src="/mystore/public/images/{{$product->photo ? $product->photo->path : 'No photo sorry :('}}" alt=""></td>
              <td>{{$product->name}}</td>
              <td>{{$product->salary}}</td>
              <td>{{$product->category->name}}</td>
              <td>{{$product->user->name}}</td>
              <td>{{$product->created_at ? $product->created_at->diffForHumans() : '0' }}</td>
              <td>{{$product->updated_at ? $product->updated_at->diffForHumans() : '0' }}</td>
              <td><a href="{{route('product.edit',$product->id)}}">Edit product</a></td>
            </tr>
          </tbody>
            @endforeach
        </table>

    @else
        <h1 class="small bg-info" align="center">There is No such product yet.</h1>
    @endif
@stop