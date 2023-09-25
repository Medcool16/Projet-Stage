@extends('master.Homepage')

@section('title')
    About
@endsection

@section('content')
    <section class="animated" style="margin-bottom: 15%">
        <div>
            <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">About <span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-red-500  selection:text-white">Us</span></h1>
        </div>

        <div class="flex flex-col items-center space-x-2 justify-center mt-4">
            
        <div class=" flex justify-center space-x-4 w-full h-96">
            <div class="bg-transparent  h-full w-96">
                {{-- <img src="{{ asset('images/about3.jpg') }}" class="object-cover h-full"> --}}
            </div>
            <div class="bg-transparent border specials h-full" style="width: 45%">
                <img src="{{ asset('images/about.jpg') }}" loading="lazy" class="object-cover h-full">
            </div>
            <div class="bg-transparent  h-full w-96">
                {{-- <img src="{{ asset('images/about2.jpg') }}" class="object-cover h-full"> --}}
            </div>
        </div>

        <div class="space-y-2 text-center text_animation " style="width: 80%;">


            <p class="text-white font-thin text-lg my-4">Welcome to "Reno Car", your trusted destination for unparalleled travel experiences. With a passion for seamless journeys, we take pride in providing top-tier car rental services that cater to your every need. Our 10 years of expertise in the industry have honed our commitment to excellence and customer satisfaction. From our diverse fleet of meticulously maintained vehicles to our dedicated team of professionals, we go the extra mile to ensure your comfort, safety, and enjoyment throughout your rental journey. Whether it's a family vacation, a business trip, or an adventure with friends, let "Reno Car" be your key to unlocking exceptional adventures. Discover the freedom to explore and create memories that last a lifetime with us.</p>
        </div>

            


    </section>
@endsection




@section('style')
    <style>

    </style>
@endsection
