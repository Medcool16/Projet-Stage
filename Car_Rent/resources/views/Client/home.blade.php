@extends('master.Homepage')

@section('title')
    Home
@endsection

@section('content')
<section class="">

<div id="default-carousel" class="relative z-0" data-carousel="slide" style="margin-top: -88px; width: 101%">

  <div id="title" class="absolute z-30 mx-3 slogan">
    <h1 class="text-6xl text-white text-center">Your Ultimate Travel Companion,<span class="text-red-600 text-4xl block">{{ __("message.Rent Now") }}</span></h1>
  </div>

  <!-- Carousel wrapper -->
  <div class="relative overflow-hidden" style="height: 45rem">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/test.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0 " alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('images/tests.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" alt="...">
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
  
</div>
</section>

<section class=" items-center justify-between mx-auto p-4" >
  <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
    <div class="col-span-2 mb-8">

      <h1 class=" service-title text-5xl text-center text-white">{{ __('message.Our service your') }} <span class=" text-red-600">{{ __('message.satisfaction') }}</span></h1><br>

      <p class="font-light  sm:text-xl text-gray-200 text-center"> {{ __('message.We handle the details while you enjoy the festivities. Trust our expertise, top-notch service, Your satisfaction is our ultimate priority') }}</p>
      <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">

      </div>
    </div>
    <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
      <div class="">
        <img src="{{ asset('images/services/customer.png') }}" class=" w-20">
        <h3 class="mb-2 text-2xl font-bold text-white">{{ __('message.Customer support') }}</h3>
        <p class="font-light text-gray-400">We provide reliable customer support via phone, email, or live chat to assist with inquiries,modifications, or cancellations.</p>
      </div>

      
      <div>
        <img src="{{ asset('images/services/booking.png') }}" class=" w-20">
        <h3 class="mb-2 text-2xl font-bold text-white">{{ __('message.Online booking') }}</h3>
        <p class="font-light text-gray-400">We allow customers to browse available vehicles, compare prices, and make reservations conveniently through the website</p>
      </div>

      <div>
        <img src="{{ asset('images/services/insurance.png') }}" class=" w-20">
        <h3 class="mb-2 text-2xl font-bold text-white">{{ __('message.Insurance coverage') }}</h3>
        <p class="font-light text-gray-400">Benefit from our "Insurance Coverage" and travel without worries. We've got you protected from accidents to theft.</p>
      </div>

      <div>
        <img src="{{ asset('images/services/crane-truck.png') }}" class=" w-20">
        <h3 class="mb-2 text-2xl font-bold text-white">{{ __('message.Roadside insurance') }}</h3>
        <p class="font-light text-gray-400">We provide "Roadside Insurance" to guarantee seamless journeys. From flat tires to battery glitches, we're here for you. </p>
      </div>


    </div>

      

    
</section>

<div class="pt-6 mt-6 space-y-4 border-t border-gray-900"></div>

<section style="margin-bottom: 100px">

  <p class="text-center text-gray-300 font-medium text-2xl">Come with</p>
  <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-6xl text-red-500">HOT OFFERS</h1>

  <div id="specials" class="flex flex-wrap mx-2 space-x-4 justify-center">
    @foreach($data as $i)
    <div  class="w-full my-2 max-w-sm bg-transparent border relative border-red-100 shadow hover:text-gray-900 hover:bg-gray-800 transition duration-500 ease-in-out ">
      <a href="#" class="">
          <div class="p-8 rounded-t-lg" style="margin-bottom: -30px">
              <img class="w-full h-48 object-contain rounded-t-lg" src="{{ asset('uploads/'.$i->image) }}" alt="product image" />
          </div>
      </a>
      <div class="px-5 pb-5">
          <a href="#">
              @foreach ($mark as $j)
                  @if ($i->id_marque == $j->id)
                  <h5 class="text-3xl text-white font-semibold tracking-tight text-center"> {{ $j->mark_name }}</h5>
                  @endif
              @endforeach
          </a>
    
          <div class="flex justify-center space-x-5">
              <span class="text-center font-thin text-white"><span class="text-2xl line-through text-white">{{ $i->price+100 }}</span> Dhs/<span class="text-red-500">Day</span></span>
              <span class="text-center font-thin text-white py-2">{{ $i->price }} Dhs/<span class="text-red-500">Day</span></span>
          </div>
              {{-- -----------------------------------------------------boook------------------------------------------------------------ --}}
          <div class="flex justify-center" style="margin-bottom:10px ">
            <a href="{{ route('book',$i->id) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Book now</a>
        </div>
            {{-- -----------------------------------------------------boook------------------------------------------------------------ --}}
      </div>

      <div class="flex justify-center">
        <div class="inline-flex rounded-md shadow-sm absolute bottom-0" role="group">
          <span class=" border border-white text-center px-2 text-white"><img src="{{ asset('assets/diagram-3.svg') }}" class="mx-1 invert rounded-sm border inline-block">{{ $i->gear_box }}</span>
          @foreach ($fuel as $k)
              @if ($k->id == $i->id_carburant)
                <span class=" border border-white text-center px-2 text-white"><img src="{{ asset('assets/fuel-pump-fill.svg') }}" class="mx-1 invert rounded-sm border inline-block">{{ $k->fuel_type }}</span>
              @endif
          @endforeach
          @foreach ($model as $m)
              @if ($m->id == $i->id_model)
                <span class=" border border-white text-center px-2 text-white">{{ $m->model_name }}</span>
              @endif
          @endforeach
        </div>
      </div>

    </div>
    @endforeach
  </div>

</section>


<div class="pt-6 mt-6 space-y-4 border-t border-gray-900"></div>

<section>
  <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">{{ __('message.Check out our') }}</h1>
  <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-red-500">{{ __('message.Gallary') }}</h1>

  <div class="container flex justify-center">
    <div class="-m-1 flex flex-wrap md:-m-2">
      <div class="flex w-1/2 flex-wrap">
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('images/Gallary/2.jpg') }}" loading="lazy" />
        </div>
        <div class="w-1/2 p-1 md:p-2 ">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('images/Gallary/3.jpg') }}" loading="lazy"  />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('images/Gallary/5.jpg') }}" loading="lazy"  />
        </div>
      </div>
      <div class="flex w-1/2 flex-wrap">
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('images/Gallary/1.jpg') }}" loading="lazy" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('images/Gallary/4.jpg') }}" loading="lazy"  />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="{{ asset('images/Gallary/6.jpeg') }}" loading="lazy" " />
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pt-6 mt-6 space-y-4 border-t border-gray-900"></div>

<section>
  <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">{{ __('message.Why choosing Us') }} </h1>
  
  <div class="flex justify-center">
    <p class="text-center text-gray-300" style="width: 50%">Discover the advantages of choosing us for your car rental needs.</p>
  </div>

  <div class="mt-4">
    <div class=" grid grid-cols-3 gap-4 mb-4">
      <div class="flex flex-col items-center">
        <h1 class="text-3xl text-white font-thin">{{ __('message.Clients') }}</h1>
          <img src="{{ asset('images/why/clients.png') }}" class="invert w-20">
          <p id="clientsCount" class="text-3xl font-thin text-center text-white w-full">0</p>
      </div>
  
      <div class="flex flex-col items-center">
        <h1 class="text-3xl text-white font-thin">{{ __('message.Cars') }}</h1>
        <img src="{{ asset('images/why/cars.png') }}" class="invert w-20">
        <p id="carStockCount" class="text-3xl font-thin text-center text-white w-full">0</p>
      </div>

      <div class="flex flex-col items-center">
        <h1 class="text-3xl text-white font-thin">{{ __('message.Reservations') }}</h1>
        <img src="{{ asset('images/why/reservations.png') }}" class="invert w-20">
        <p id="reservationCount" class="text-3xl font-thin text-center text-white w-full">0</p>
      </div>
  </div>
  </div>

  <input type="hidden" id="count_cars" value="{{ $Count_cars }}">
  <input type="hidden" id="count_clients" value="{{ $Count_clients }}">
  <input type="hidden" id="count_res" value="{{ $Count_res }}">
</section>



@endsection


