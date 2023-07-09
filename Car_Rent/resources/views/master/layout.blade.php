<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" /> 
    <title>@yield('title')</title>

    @yield('style')
</head>
<body>
    {{-- Navbar --}}
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center">
                {{-- <img src="" class="h-16 mr-3" alt="Logo" /> --}}
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LOGO</span>
            </a>
            <div class="flex items-center">
                <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
                    {{-- ----------------<!-- session here -->------------------------- --}}
                                
                        @if(session()->has('name'))
                        <div class="pl-4 text-sm font-normal">Welcome, {{ session('name') }}</div>
                        @endif
                    {{-- --------------------------------------------------------------- --}}
                </div>
                
                <a href="{{ route('destroy') }}" class="text-sm text-dark flex items-center"><img src="{{asset('assets/box-arrow-right.svg')}}" class="bg-red-400 p-3 rounded-lg mx-2">Logout</a>
            </div>
        </div>
    </nav>
    {{-- Navbar --}}
    {{-- Side bar --}}

    
 <aside id="default-sidebar" class="fixed left-1 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" style="top: 85px" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="{{ url('/dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/house-gear-fill.svg')}}">
                <span class="ml-3">Dashboard</span>
             </a>
          </li>
          
          <li>
             <a href="{{ url('/cars') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/car-front-fill.svg')}}">
                <span class="ml-3">Cars</span>
             </a>
          </li>
          
          <li>
             <a href="{{ url('/clients') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/person-fill-gear.svg')}}">
                <span class="ml-3">Clients</span>
             </a>
          </li>
          
          <li>
             <a href="{{ url('/marks') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/patch-check-fill.svg')}}">
                <span class="ml-3">Marks</span>
             </a>
          </li>
          
          <li>
             <a href="{{ url('/models') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/cloud-fog-fill.svg')}}">
                <span class="ml-3">Models</span>
             </a>
          </li>
          
          <li>
             <a href="{{ url('/fuels') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/fuel-pump-fill.svg')}}">
                <span class="ml-3">Fuels</span>
             </a>
          </li>
          
          <li>
             <a href="{{ url('/reservations') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src="{{asset('assets/calendar2-check-fill.svg')}}">
                <span class="ml-3">Reservation</span>
             </a>
          </li>

       </ul>
    </div>
 </aside>
 
 <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700" style="margin-top: 77px">
        @yield('content')
    </div>
 </div>
 
    
    {{-- Side bar --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>
</html>
