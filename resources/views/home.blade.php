@extends('layouts.userside')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-50 m-auto" src="/mystore/public//IMG_0836.PNG" alt="First slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-50 m-auto" src="/mystore/public//IMG_0836.PNG" alt="First slide">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-50 m-auto" src="/mystore/public//IMG_0836.PNG" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <br><br>

    <div class="bg-info">
        {{session('cartdel_id')}}
        {{session('cartadd_id')}}
    </div>
<div class="container">
    {{--<div class="row justify-content-center">--}}
    <div class="row">
       @foreach($products as $product)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">{{$product->name}}</h5>
                </div>
                <div>
                    <a href="{{route('home.show',$product->id)}}"><img class="card-img-top" height="250" width="246" src="{{asset('images/'.$product->photo->path)}}" class="rounded" data-toggle="tooltip" title="View details" alt="responsive image"></a>
                </div>

                <div class="card-body">

                    <p><span>Lorem ipsum dolor sit amet, quis rerum?</span></p>
                    </div>

                <div class="card-footer">

                        <div>

                            {!! Form::open(['method'=>'GET','action'=>'UserHomeController@create']) !!}
                            {!! Form::token() !!}
                            {!! Form::submit('Buy',['class'=>'btn btn-outline-success btn-block']) !!}
                            {!! Form::close() !!}

                        </div>
                        <div >

                            {!! Form::open(['method'=>'POST','action'=>'UserHomeController@store']) !!}
                            {!! Form::token() !!}
                            <input type="hidden" name="pro_id" value={{$product->id}}>
                            <input type="hidden" name="pro_name" value={{$product->name}}>
                            <input type="hidden" name="cat_id" value={{$product->category->id}}>
                            <input type="hidden" name="pro_salary" value={{$product->salary}}>
                            {!! Form::submit('Add to cart',['class'=>'btn btn-outline-secondary btn-block']) !!}
                            {!! Form::close() !!}

                        </div>

                </div>

            </div><br>
        </div>
       @endforeach
        <div class="container">
               <div class="row">
                   <div class="col-sm-5"></div>
                   <div class="col-sm-6 col-sm-offset-5">
                       {{$products->render()}}
                   </div>
               </div>
           </div>
</div>
</div>


@endsection
