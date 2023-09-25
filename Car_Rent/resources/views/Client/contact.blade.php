@extends('master.Homepage')

@section('title')
    Contact
@endsection

@section('content')

<section class="animated" style="margin: 30px 0px;">
    <div class="flex flex-col items-center" style="margin-bottom: 30px">
        {{-- <span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-5xl text-red-500">Reviews</span> --}}
        <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-5xl text-white">Contact</h1>
    </div>
    <div class="flex space-x-2 justify-center">
        <div class="specials" style="width: 30%; height: 50vh;">
            <img src="{{ asset('images/desk.jpg') }}" class="object-contain h-full">
        </div>

        <div class=" flex text_animation flex-col justify-center" style="width: 40%; height: 40vh;">
            <span class=" text-2xl font-extrabold ml-4 text-white">Main Office :</span>

            <div class="mt-3 space-y-3">
                <span class="text-white font-thin block"><img src="{{ asset('assets/geo-alt-fill.svg') }}" class="invert w-6 mx-3 inline-block">{{ $agency->name }}</span>
                <span class="text-white font-thin block"><img src="{{ asset('assets/geo-alt-fill.svg') }}" class="invert w-6 mx-3 inline-block">{{ $agency->location }}</span>
                <span class="text-white font-thin block"><img src="{{ asset('assets/clock-fill.svg') }}" class="invert w-5 mx-3 inline-block"> 8:30 AM ====> 9:30 PM</span>
                <span class="text-white font-thin block"><img src="{{ asset('assets/telephone-fill.svg') }}" class="invert w-5 mx-3 inline-block">{{ $agency->contact }}</span>
                <span class="text-white font-thin block"><img src="{{ asset('assets/envelope-fill.svg') }}" class="invert w-5 mx-3 inline-block"> Mohamed16Slaoui@gmail.com</span>
            </div>
        </div>



    </div>
    <div style="margin-top: 5%">
        <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">Send Us a<span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-red-500  selection:text-white"> Message</span></h1>
    </div>

    <div class="flex justify-center rounded-lg mx-4" style="background-color: rgba(167, 163, 163, 0.218); margin-top: 15px">
        <form action="" method="POST" class="justify-center" style="width: 50%;  height: 60vh">
            @csrf
            <label class=" font-medium text-white ">Full Name</label>
            <input type="text" name="full_name" class="shadow-sm py-4 bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" placeholder="Your full name" required>    
            <br>
            <label class="block mb-2 font-medium text-white">Your Message</label>
            <textarea rows="5" name="message" class="block p-2.5 w-full text-sm text-white bg-transparent  border border-gray-300 focus:ring-red-500 focus:border-red-500 " placeholder="Leave your message here..."></textarea>
            <br>

            <div class="justify-center flex" style="margin-top: 40px">
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection

@section('style')
    <style>
    </style>
@endsection
