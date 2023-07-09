@extends('master.Homepage')

@section('title')
    Home
@endsection

@section('content')
  <section style="margin-top: 90px">
      
    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden  md:h-96">

          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/bg.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          </div>
      </div>
    </div>

  </section>

  <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">

  <div class="">
    <h3 class="text-center text-3xl dark:text-white">--------- &nbsp; OUR CAR RENTAL SERVICES &nbsp; ---------</h3>
  </div>

  <section style="margin-top: 100px">

    <div class="grid grid-cols-4 gap-4 mb-4">

      <div class="flex items-center justify-center h-24 rounded px-2">
        <a href="#" class="block max-w-sm p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-center text-3xl my-3 dark:text-white">Customer Support</h5>
            <div class="flex justify-center dark:invert ">
              <img src="/images/services/customer.png" class="h-14">
            </div>
            <p class="font-normal text-gray-700 dark:text-gray-400 dark:text-white">We provide reliable customer support via phone, email, or live chat to assist with inquiries, modifications, or cancellations.</p>
          </a>
      </div>

      <div class="flex items-center justify-center h-24 rounded px-2">
        <a href="#" class="block max-w-sm p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-center text-3xl my-3 dark:text-white">Roadside insurance</h5>
            <div class="flex justify-center">
              <img src="/images/services/roadside.png" class="h-14">
            </div>
            <p class="font-normal text-gray-700 dark:text-gray-400 dark:text-white">We provide reliable customer support via phone, email, or live chat to assist with inquiries, modifications, or cancellations.</p>
          </a>
      </div>

      <div class="flex items-center justify-center h-24 rounded px-2">
        <a href="#" class="block max-w-sm p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-center text-3xl my-3 dark:text-white">Online booking</h5>
            <div class="flex justify-center">
              <img src="/images/services/booking.png" class="h-14">
            </div>
            <p class="font-normal text-gray-700 dark:text-gray-400 dark:text-white">We allow customers to browse available vehicles, compare prices, and make reservations conveniently through the website</p>
          </a>
      </div>

      <div class="flex items-center justify-center h-24 rounded px-2">
        <a href="#" class="block max-w-sm p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h3 class="text-center text-3xl my-3 dark:text-white">Insurance Coverage</h5>
            <div class="flex justify-center">
              <img src="/images/services/insurance.png" class="h-14">
            </div>
            <p class="font-normal text-gray-700 dark:text-gray-400 dark:text-white">We offer various insurance options to protect customers against accidents, damage, theft, or other unforeseen events.</p>
          </a>
      </div>


    </div>
  </section>
@endsection
