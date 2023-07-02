<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Css/homepage-nav-color.css">
    <title>@yield('title')</title>

    @yield('style')
</head>

<body>

  <nav class="navbar bg-body-tertiary idk bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light mx-3" href="#">
            <div class="container">
                <img src="images/carlogo.png" alt="Logo" width="100" height="90" class="">
                <span>CarZilla</span>
            </div>
          </a>
            <div class="d-flex justify-content-center flex-grow-1 "  style="margin: 0px 0px 8px -148px;">
              <ul class="nav nav-tabs ul-mode mx-2">
    
                <li class="nav-item mx-1" role="presentation">
                  <a href="{{ url('/home') }}" class="nav-link text-" aria-selected="true">Home</a>
                </li>
      
                <li class="nav-item mx-1" role="presentation">
                  <a href="{{ url('') }}" class="nav-link text-" aria-selected="false" >Park</a>
                </li>
      
                <li class="nav-item mx-1" role="presentation">
                  <a href="{{ url('/specials') }}" class="nav-link text-" aria-selected="false" >Specials</a>
                </li>
      
                <li class="nav-item mx-1" role="presentation">
                  <a href="" class="nav-link text-" aria-selected="false" >Our Agencies</a>
                </li>
      
                <li class="nav-item mx-1" role="presentation">
                  <a href="" class="nav-link text-" aria-selected="false" >About</a>
                </li>
      
                <li class="nav-item mx-1" role="presentation">
                  <a href="" class="nav-link text-" aria-selected="false" >Contact</a>
                </li>
      
              </ul>
          </div>
          <div class="mx-2">
            <a class="btn btn-outline-info">
              <img src="/assets/person.svg" style="filter: invert(100%); width: 25px; height: 25px;">
              Login</a>
            {{-- <a class="btn btn-outline-warning">Login</a> --}}
          </div>
    </div>
</nav>

<div>
  @yield('content')
</div>

</body>

<script src="/Js/homepage-nav.js"></script>
</html>