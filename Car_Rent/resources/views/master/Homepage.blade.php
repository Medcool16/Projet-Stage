<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" /> --}}
     <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('Css/homepage-nav-color.css') }}"> 
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    @yield('style')
    <style>
      /* .z-40{
        z-index: 0;
      } */
      
    </style>

</head>

<body>

  <nav class="bg-transparent w-full sticky left-0 flex mx-4 space-x-2 justify-center" style="z-index: 100;">
      <div class=" flex justify-center items-center" style="width: 10%; height: 10vh;">
          <a href="{{ route('homie') }}" class="flex items-center ml-4">
            <img src="{{ asset('images/logo.png') }}" class="mr-3 w-20" alt="">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">RenoCar</span>
          </a>
      </div>


      <div class=" flex justify-center items-center" style="width: 70%; height: 10vh;">
            <ul class="hidden lg:flex navbar p-4 mt-4 font-medium text-white md:flex-row md:space-x-8 ">
              <li>
                <a href="{{ route('homie') }}" id="home" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 " aria-current="page">Home</a>
              </li>
              <li>
                <a href="{{ url('/park') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Park</a>
              </li>
              <li>
                <a href="{{ url('/reservation') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Reservation</a>
              </li>
              <li>
                <a href="{{ route('review') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Reviews</a>
              </li>
              <li>
                <a href="{{ route('about') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">About</a>
              </li>
              <li>
                <a href="{{ route('contact') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Contact</a>
              </li>
            </ul>

            <button class="lg:hidden text-white">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6">
                  <path fill-rule="evenodd" d="M2 4.5A.5.5 0 012.5 4h15a.5.5 0 010 1h-15a.5.5 0 01-.5-.5zM2 9.5A.5.5 0 012.5 9h15a.5.5 0 010 1h-15a.5.5 0 01-.5-.5zM2 14.5A.5.5 0 012.5 14h15a.5.5 0 010 1h-15a.5.5 0 01-.5-.5z" clip-rule="evenodd" />
              </svg>
          </button>
      </div>


      
      {{------------------------ Register ------------------------------}}
      @if (session()->has('member'))

            <div class=" flex justify-end" style="width: 15%; height: 10vh;">
              <div class="flex">
                <div class="flex items-center pt-3">
                  <button type="button" class="flex items-center text-sm bg-gray-800 rounded-md p-3 mt-4 md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom" style="margin-top: -11px;">
                    <span class="text-white  mr-2">My Account</span>
                    <img class="w-8 h-8 rounded-full invert" src="{{ asset('assets/person-circle.svg') }}">
                  </button>
                  <!-- Dropdown menu -->

                  <div class="z-50 overflow-hidden my-4 text-base bg-gray-800 divide-y rounded-sm w-36 mr-4 shadow 0 ml-auto " id="user-dropdown" style="display:none;">
                    
                    <div class="px-4 py-3 hover:bg-gray-600">
                      <a href="{{ route('viewProfile',session('member')) }}" class="block text-sm text-white ">profile</a>
                    </div>

                    <ul class="py-3 hover:bg-gray-600" aria-labelledby="user-menu-button">
                      <li>
                        <a href="{{ route('desClient') }}" class="block px-4 text-sm text-white  ">Sign out</a>
                      </li>
                    </ul>
                  </div>


                </div>
              </div>
            </div>
            
              @else
              <div class="flex justify-center items-center sm:w-96" style="width: 25%; height: 10vh;">
                  <a href="{{ route('registerClient') }}" class=" mx-4 text-white font-bold border p-1 px-3 rounded-md hover:bg-white hover:text-gray-900 transition delay-700 duration-200 ease sm:text-sm">Sign in</a>
                  <a href="{{ route('logClient') }}" class="text-white font-bold border p-1 px-3 rounded-md hover:bg-white hover:text-gray-900  transition delay-700 duration-200 ease sm:text-sm">Login</a>
              </div>
              @endif
              

        {{------------------------ Register ------------------------------}}
  </nav>
  

<div>
  @yield('content')
</div>

<!-- Footer container -->
<footer
  class="bg-gray-900 text-center text-white w-full">
  <div
    class="flex items-center justify-between border-b-2 border-gray-700 p-6">
    <div class="mr-12 hidden lg:block">
      <span>Get in touch with us:</span>
    </div>
    <!-- Social network icons container -->

    <div class="flex justify-center">
      <a href="#!" class="mr-6 text-neutral-600">
        <img src="{{ asset('assets/facebook.svg') }}" class="w-6 invert">
      </a>
      <a href="#!" class="mr-6 text-neutral-600">
        <img src="{{ asset('assets/twitter.svg') }}" class="w-6 invert">
      </a>
      <a href="#!" class="mr-6 text-neutral-600">
        <img src="{{ asset('assets/linkedin.svg') }}" class="w-6 invert">
      </a>
    </div>
  </div>

  
  <div class=" py-10 text-center mt-4">
    <div class="grid-1  gap-8 md:grid-cols-2 flex justify-between">
      <!-- Tailwind Elements section -->
      <div class="" style="width:35%">
        <h6 class="mb-4 flex text-3xl items-center justify-center font-semibold">
          <img src="{{ asset('images/logo.png') }}" class="mr-3 w-20" alt="">
          RenoCar
        </h6>
        <p class="mx-4">
          Embark on extraordinary journeys with our exceptional car rental services, designed to enhance every mile of your adventure.
        </p>
      </div>

      
      <!-- Useful links section -->
      <div class="">
        <h6
          class="mb-2 font-semibold uppercase">
          Menu
        </h6>
        <div class="flex flex-wrap justify-center space-x-4 w-56">
          <p class="mb-2">
            <a href="#home" class="text-neutral-200 hover:underline"
              >Home</a
            >
          </p>
          <p class="mb-2">
            <a href="{{ url('/park') }}" class="text-neutral-200 hover:underline"
              >Park</a
            >
          </p>
          <p class="mb-2">
            <a href="{{ url('/reservation') }}" class="text-neutral-200 hover:underline"
              >Reservation</a
            >
          </p>
          <p class="mb-2">
            <a href="{{ route('review') }}" class="text-neutral-200 hover:underline"
              >Reviews</a
            >
          </p>
          <p class="mb-2">
            <a href="{{ route('contact') }}" class="text-neutral-200 hover:underline"
              >Contact</a
            >
          </p>
          <p class="mb-2">
            <a href="{{ route('about') }}" class="text-neutral-200 hover:underline"
              >About us</a
            >
          </p>
        </div>
      </div>
      <!-- Contact section -->
      <div style="margin-right: 100px">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase">
          Contact
        </h6>
        <div class="flex flex-col">
          <p class="mb-4 flex">
            <img src="{{ asset('assets/geo-alt-fill.svg') }}" class="mx-2 invert">
            255-R Ouarzazate, Morocco
          </p>
          <p class="mb-4 flex">
            <img src="{{ asset('assets/envelope-fill.svg') }}" class="mx-2 invert">
            Mohamed16Slaoui@gmail.com
          </p>
          <p class="mb-4 flex">
            <img src="{{ asset('assets/telephone-fill.svg') }}" class="mx-2 invert">
            +212-680-615618
          </p>
        </div>
      </div>
    </div>
  </div>

  <!--Copyright section-->
  <div class="bg-gray-700 mt-4 p-6 text-center">
    <span>© 2023 Copyright:</span>
  </div>
</footer>


@vite('resources/js/app.js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/countup.js"></script>
<script src="Js/homepage-nav.js"></script>
@yield('script')
</body>


</html>
