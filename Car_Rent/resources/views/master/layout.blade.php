<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>@yield('title')</title>

    <style>
    .btedit{
        height: 40px;
        width: 40px;
        margin-top: 10px;
    }
    .li{
        height: 100vh;
        background-color: ghostwhite;
        border-radius: 10px;
    }
    </style>

    @yield('style')
</head>
<body>
    <header>
        <div class="container-fluid" style="background-color: #d5d5e4; margin-bottom: 15px;">
            <div class="row">

                <div class="col-md-3 d-flex justify-content-center">
                    {{-- LOGO --}}
                    <img src="{{ asset('images/logo.png') }}" width="60px" height="60px">

                    <h4 class="my-3 mx-3"><a class="text-decoration-none text-dark" href="#">Rental Car</a></h4>
                </div>


                <div class="col-md-9 d-flex justify-content-end">

                    {{-- ----------------<!-- session here -->------------------------- --}}
                        
                    @if(session()->has('name'))
                        <span class="mx-3 my-3">Welcome, {{ session('name') }}</span>
                    @endif
                    {{-- --------------------------------------------------------------- --}}

                    <a href="{{ route('destroy') }}" class="btn btn-danger  btedit" role="button"><img src="{{asset('assets/box-arrow-right.svg')}}"></a>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 li">
                <div class="list-group my-2">
                    <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action "><img class="img-thumbnail" src="{{asset('assets/house-gear-fill.svg')}}"> <span class="mx-2">Dashboard</span></a>
                    <a href="{{ url('/cars') }}" class="list-group-item list-group-item-action"><img class="img-thumbnail" src="{{asset('assets/car-front-fill.svg')}}"><span class="mx-2">Cars</span></a>
                    <a href="{{ url('/clients') }}" class="list-group-item list-group-item-action"><img class="img-thumbnail" src="{{asset('assets/person-fill-gear.svg')}}"><span class="mx-2">Clients</span></a></a>
                    <a href="{{ url('/marks') }}" class="list-group-item list-group-item-action"><img class="img-thumbnail" src="{{asset('assets/patch-check-fill.svg')}}"><span class="mx-2">Mark</span></a></a>
                    <a href="{{ url('/models') }}" class="list-group-item list-group-item-action"><img class="img-thumbnail" src="{{asset('assets/cloud-fog-fill.svg')}}"><span class="mx-2">Model</span></a></a>
                    <a href="{{ url('/fuels') }}" class="list-group-item list-group-item-action"><img class="img-thumbnail" src="{{asset('assets/fuel-pump-fill.svg')}}"><span class="mx-2">Fuel</span></a></a>
                    <a href="{{ url('/reservations') }}" class="list-group-item list-group-item-action"><img class="img-thumbnail" src="{{asset('assets/calendar2-check-fill.svg')}}"><span class="mx-2">Reservation</span></a></a>
                </div>
                
                </div>
            
            <div class="col-md-10">
                <div class="container-fluid">
                    @yield('content')
                </div>
        </div>
    </div>
        </div>
    </body>
</body>
</html>
