@extends('master.Homepage')

@section('title')
    Home
@endsection

@section('content')
<section class="">
    
<div id="default-carousel" class="relative w-full z-0" data-carousel="slide" style="margin-top: -88px;">

  <div class="absolute z-30 mx-3 slogan">
    <h1 class="text-6xl text-white text-center">Your Ultimate Travel Companion,<span class="text-red-600 text-4xl block">Rent Now</span></h1>
  </div>

  <!-- Carousel wrapper -->
  <div class="relative overflow-hidden" style="height: 45rem">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/test.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 " alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/test.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/test.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" alt="...">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/test.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" alt="...">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/test.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" alt="...">
      </div>
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2" style="left: 145px">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
  </div>
  
    {{-- Form --}}
  <div class="absolute z-30 mx-3 reserve">
      
      <form action="" method="">
        <div class="mb-6">
          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
              <img class="w-4 h-4 text-gray-500 dark:text-gray-400" src="{{ asset('assets/cloud-fog.svg') }}">
            </div>
            <select name="car_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
              <option class="text-center">Select car type</option>
              @foreach ($mark as $m)
                  <option value="{{ $m->id }}" class="">{{ $m->mark_name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-6">
          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
              <img class="w-4 h-4 text-gray-500 dark:text-gray-400" src="{{ asset('assets/geo-alt.svg') }}">
            </div>
            <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Location">
          </div>
        </div>

        <div class="mb-6 c1">
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <img class="w-4 h-4 text-gray-500 dark:text-gray-400" src="{{ asset('assets/calendar-date.svg') }}">
              </div>
              <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start date">
            </div>
        </div>

        <div class="mb-6 c1">
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <img class="w-4 h-4 text-gray-500 dark:text-gray-400" src="{{ asset('assets/calendar-date.svg') }}">
              </div>
              <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End date">
            </div>
        </div>


        <div class="mb-6 c1">
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <img class="w-4 h-4 text-gray-500 dark:text-gray-400" src="{{ asset('assets/clock.svg') }}">
              </div>
              <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start time">
            </div>
        </div>

        <div class="mb-6 c1">
            <div class="relative max-w-sm">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <img class="w-4 h-4 text-gray-500 dark:text-gray-400" src="{{ asset('assets/clock.svg') }}">
              </div>
              <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="End time">
            </div>
        </div>


        <button type="submit" class="block text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800 w-full">Book now</button>

      </form>

  </div>
</div>

</section>

<section class="items-center justify-between mx-auto p-4" >

  <div class="h-24 w-full" style="padding-top: 50px">
        <h1 class=" service-title text-5xl text-center text-white">Our service your <span class=" text-red-600">satisfaction</span></h1><br>
        <p class="text-center text-white w-full text-sm"> We handle the details while you enjoy the festivities. Trust our expertise, top-notch service, Your satisfaction is our ultimate priority
        </p>        
  </div>
  


    <div class="grid grid-cols-4 gap-4 mb-4" style="margin-top: 100px">
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/services/customer.png') }}" class="invert w-20">
        <h1 class="text-3xl text-white font-semibold">Customer support</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <p class="text-center text-white w-full" style="width: 212px">We provide reliable customer support via phone, email, or live chat to assist with inquiries,modifications, or cancellations.</p>  
      </div>
      
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/services/booking.png') }}" class="invert w-20">
        <h1 class="text-3xl text-white font-semibold">Online booking</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <p class="text-center text-white w-full" style="width: 212px">We allow customers to browse available vehicles, compare prices, and make reservations conveniently through the website</p>  
      </div>
      
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/services/insurance.png') }}" class="invert w-20">
        <h1 class="text-3xl text-white font-semibold">Customer support</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <p class="text-center text-white w-full" style="width: 212px">We provide reliable customer support via phone, email, or live chat to assist with inquiries,modifications, or cancellations.</p>  
      </div>
      
      <div class="flex flex-col items-center">
        <img src="{{ asset('images/services/crane-truck.png') }}" class="invert w-20">
        <h1 class="text-3xl text-white font-semibold">Roadside insurance</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <p class="text-center text-white w-full" style="width: 212px">We provide reliable customer support via phone, email, or live chat to assist with inquiries, modifications, or cancellations.</p>  
      </div>

    
    </div>

    
</section>

<section class="banner">
  <h1 class="font-bold text-4xl text-white underline">Why choosing us ?</h1>
  <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consequuntur dolorum placeat quisquam animi rem iste minus! Doloremque, facilis reiciendis?</p>

  <div class="why-holder flex" style="justify-content: space-evenly;margin-top: 50px;">

    <div class=" flex-col justify-center h-96">
      
        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No hidden fees</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400" style="width: 300px">Know exactly what you’re paying</p>
        </a> 

    </div>

      <div class="h-48 bg-white" style="width: 0.5px"></div>

    <div class=" flex-col justify-center h-96">
      
        <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Price Match Guarantee</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400" style="width: 300px">Found the same deal for less? We’ll match the price</p>
        </a>

    </div>

      <div class="h-48 bg-white" style="width: 0.5px"></div>

    <div class=" flex-col justify-center h-96">

      <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Flexible rentals</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400" style="width: 300px">Cancel or change most bookings for free up to 48 hours before pick-up</p>
      </a>
    </div>
  </div>
{{-- ----------------------------------------------- --}}

    <div class=" grid grid-cols-3 gap-4 mb-4 countup">
        <div class="flex flex-col items-center">
          <h1 class="text-3xl text-white font-semibold">Clients</h1>
            <img src="{{ asset('images/why/clients.png') }}" class="invert w-20">
            <p id="clientsCount" class="text-3xl font-bold text-center text-white w-full">0</p>
        </div>
    
        <div class="flex flex-col items-center">
          <h1 class="text-3xl text-white font-semibold">Cars</h1>
          <img src="{{ asset('images/why/cars.png') }}" class="invert w-20">
          <p id="carStockCount" class="text-3xl font-bold text-center text-white w-full">0</p>
        </div>

        <div class="flex flex-col items-center">
          <h1 class="text-3xl text-white font-semibold">Reservations</h1>
          <img src="{{ asset('images/why/reservations.png') }}" class="invert w-20">
          <p id="reservationCount" class="text-3xl font-bold text-center text-white w-full">0</p>
        </div>
    </div>

</section>

<section style="height: 80vh">
  <h1 class="text-center font-semibold text-white text-5xl">Constomer's <span class="text-red-500">Review</span></h1>
  
  <div class=" grid grid-cols-3 gap-4 mb-4" style="margin-top: 50px">


    <div class="flex flex-col items-center">
        <div div class="w-full max-w-sm bg-white border rounded-sm py-4 px-4 shadow dark:bg-gray-800 dark:border-gray-700">

          <div class="border-gray-300 border py-3">
            <div class="flex flex-col items-center pb-10">
              <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/photo.jpg') }}" alt="User"/>
              <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
              <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
              {{-- Comment --}}
              <div class="flex mt-4 space-x-3 md:mt-6 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, est.</div>
              <div class="my-3 flex rate">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
              </div>
            </div>
          </div>

        </div>
    </div>
    
    <div class="flex flex-col items-center">
        <div div class="w-full max-w-sm bg-white border rounded-sm py-4 px-4 shadow dark:bg-gray-800 dark:border-gray-700">

          <div class="border-gray-300 border py-3">
            <div class="flex flex-col items-center pb-10">
              <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/photo.jpg') }}" alt="User"/>
              <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
              <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
              {{-- Comment --}}
              <div class="flex mt-4 space-x-3 md:mt-6 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, est.</div>
              <div class="my-3 flex rate">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
              </div>
            </div>
          </div>

        </div>
    </div>

    <div class="flex flex-col items-center">
        <div div class="w-full max-w-sm bg-white border rounded-sm py-4 px-4 shadow dark:bg-gray-800 dark:border-gray-700">

          <div class="border-gray-300 border py-3">
            <div class="flex flex-col items-center pb-10">
              <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/photo.jpg') }}" alt="User"/>
              <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
              <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
              {{-- Comment --}}
              <div class="flex mt-4 space-x-3 md:mt-6 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, est.</div>
              <div class="my-3 flex rate">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
                <img src="{{ asset('images/star.png') }}" class="w-5">
              </div>
            </div>
          </div>

        </div>
    </div>



    
  </div>

</section>



@endsection
