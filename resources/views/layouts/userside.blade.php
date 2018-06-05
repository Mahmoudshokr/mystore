<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/c4.css')}}" rel="stylesheet">

    <link href="{{asset('css/cssb4.css')}}" rel="stylesheet">
@yield('style')

<!-- jQuery -->

    <script src="{{asset('js/jsb4.js')}}"></script>
@yield('scripts')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
{{--<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>--}}
    <div class="nav embed-responsive">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <a class="navbar-brand" href="{{url('/home')}}">My store</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="{{route('cart.index')}}"><img height="22px" width="25px" src="/mystore/public/28468-200.png" alt=""> My cart</a>
                    </li>
                        <li class="nav-item dropdown" style="left: 750px">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" style="height: 40px" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="padding-top: 0px;padding-left: 10px" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                </ul>

            </div>
        </nav>
    </div>


<form class="form-inline justify-content-center sticky-top" action={{asset('search')}} method="get">
    <input class="form-control fa-lg" type="search" name="query" placeholder="Search" aria-label="Search">
    <button class="form-control form-group-lg btn btn-outline-success" type="submit">Search</button>
</form>

<br>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                @yield('content')
            </div>
        </div>
    </div>

 <div class="footer bg-dark text-white">
     <div class="row">
         <div class="col-sm-2 m-auto text-center">
             <span>&copy;Created by Shokr  </span><br>
             <span>Today is : {{Date('D'.' '.'d'.'/'.'M'.'/'. 'Y')}}</span>
         </div>
     </div>

 </div>

</body>

</html>
