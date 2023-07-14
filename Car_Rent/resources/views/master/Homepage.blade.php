<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Css/homepage-nav-color.css"> 
    <title>@yield('title')</title>

    @yield('style')
    <style>
      .z-40{
        z-index: 0;
      }
    </style>

</head>

<body>

  <nav class="bg-transparent w-full relative top-0 left-0 " style="z-index: 100">
    <div class="max-w-screen-sm flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center">
        <img src="#" class="h-8 mr-3" alt="">
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">LOGO</span>
    </a>
    <div class="flex md:order-2">
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <img src="{{ asset('assets/list.svg') }}" class="invert w-10">
    </button>
  </div>
    <div class="flex md:order-2">
        {{------------------------ Register ------------------------------}}


              @if (session()->has('member'))
                  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="flex items-center md:order-2">
                      <button type="button" class="flex mr-3 text-sm bg-blue-900 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom" style="margin-top: -11px;">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full invert" src="{{ asset('assets/person-circle.svg') }}">
                      </button>
                      <!-- Dropdown menu -->
                      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 ml-auto" id="user-dropdown">
                        <div class="px-4 py-3">
                          <span class="block text-sm text-gray-900 dark:text-white">{{ session('member') }} {{ session('nickname') }}</span>
                          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ session('email') }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                          <li>
                            <a href="{{ route('desClient') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                          </li>
                        </ul>
                      </div>
                      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                      </button>
                    </div>
                  </div>
              {{-- toast --}}
                  

                    <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert" style="position: absolute;top: 100px; right: 10px">
                        <div class="ml-3 text-sm font-normal">Welcome, {{ session('member')  }} {{ session('nickname') }}</div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
          {{--  --}}
            
              @else

                  <a href="{{ route('registerClient') }}" class=" mx-4 text-white font-bold border p-1 px-3 rounded-full hover:bg-white hover:text-gray-900">Sign in</a>
                  <a href="{{ route('logClient') }}" class="text-white font-bold border p-1 px-3 rounded-full hover:bg-white hover:text-gray-900">Login</a>
                  
              @endif

        {{------------------------ Register ------------------------------}}


        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          
      </button>
    </div>

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg text-white md:flex-row md:space-x-8 md:mt-0 md:border-0">
        <li>
          <a href="{{ route('homie') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 " aria-current="page">Home</a>
        </li>
        <li>
          <a href="{{ url('/park') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Park</a>
        </li>
        <li>
          <a href="{{ url('/reservation') }}" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Reservation</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Agencies</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  

<div>
  @yield('content')
</div>


<footer class="bg-gray-900">
  <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="" class="flex items-center">
                <img src="" class="h-8 mr-3" alt="" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">LOGO</span>
            </a>

            <div style="margin: 10%;">
              <h1 class="text-sm font-semibold uppercase text-white" style="margin: 23px 73px">Our sponsoers</h1>
              <img src="{{ asset('images/brand/item.png') }} " style="width: 50%;">
            </div>

        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div class="text-center">
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">Useful links</h2>
                <ul class="text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Home</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Park</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Specials</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Agencies</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                    
                </ul>
            </div>
          
          
            <div class="text-center">
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">Legal</h2>
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm  sm:text-center text-gray-400">© 2023 <a href="#" class="hover:underline">CarZella™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900">
                <img src="{{ asset('assets/facebook.svg') }}" class="invert" >
                
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <img src="{{ asset('assets/whatsapp.svg') }}" class="invert" >
            </a>

            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <img src="{{ asset('assets/twitter.svg') }}" class="invert" >
            </a>

            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <img src="{{ asset('assets/linkedin.svg') }}" class="invert" >
            </a>
        </div>
    </div>
  </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/countup.js"></script>
<script src="Js/homepage-nav.js"></script>
@yield('script')
</body>


</html>
