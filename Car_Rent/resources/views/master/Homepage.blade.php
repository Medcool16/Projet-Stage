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
    <style>
      
    </style>

</head>

<body>

  <nav class="navbar navbar-expand-lg p-0 bg-dark">
    <div class="container-fluid">
      <div class="d-flex justify-content-start">
        <a class="navbar-brand mx-lg-5" href="#"><img src="/images/carlogo.png"></a>
      </div>
  
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>      
  
      <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="{{ url('/home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Park</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="{{ url('/specials') }}" >Specials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#" >Our Agencies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#" >Contact</a>
          </li>
        </ul>
      </div>
      <div class="ml-auto">
        <a href="#" class="btn btn-outline-info">Login</a>
      </div>
    </div>
  </nav>
  
  

<div>
  @yield('content')
</div>

</body>

<script src="/Js/homepage-nav.js"></script>
</html>