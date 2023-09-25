@extends('master.Homepage')

@section('title')
    Reviews
@endsection

@section('content')
<section class="animated">
            <div class="flex flex-col items-center" style="margin-bottom: 30px">
                <span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-5xl text-red-500">Reviews</span>
                <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-5xl text-white">What Clients Say About Us</h1>
            </div>

            
    <div id="gallery" class="relative w-full" data-carousel="slide">
        
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            
            @foreach ($reviews as $i)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-white">

                    <a href="#" class=" max-w-sm p-6 flex flex-col justify-center bg-transparent border rounded-sm shadow hover:bg-gray-800 ">
                        <div class="text-gray-500 flex justify-center">
                            <img src="{{ asset('images/user.png') }}" class="w-14">
                        </div>

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white text-center">{{ $i->full_name }}</h5>
                        <em class=" text-center font-thin text-gray-100">ʽʽ{{ $i->comment }}ʼʼ</em>

                        <div class="flex justify-center mt-4">
                            @for ($j = 1; $j <= $i->rate; $j++)
                                <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            @endfor
                        </div>
                    </a>

                </div>
            </div>
            @endforeach

            
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev style="left: 12%">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next style="right: 12%">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


</section>
<section style="margin: 30px 0px;;">
    <div>
        <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">Leave your <span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-red-500  selection:text-white">Feedback</span></h1>
    </div>
    <div class="flex justify-center rounded-lg mx-4" style="background-color: rgba(167, 163, 163, 0.218)">


        <form action="{{ route('add_review') }}" method="POST" class="justify-center" style="width: 50%;  height: 60vh">
            @csrf
            {{-- <label class=" font-medium text-white ">Full Name</label> --}}
            
            @foreach ($client as $c)
                @if (session('member') == $c->id)
                <input type="hidden" name="full_name" value="{{ $c->first_name }} {{ $c->last_name }}" class="shadow-sm py-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" placeholder="Your full name" required>    
                @else
                
                @endif
            @endforeach



            <br>
            <label class="block mb-2 font-medium text-white">Your comment</label>
            <textarea rows="5" name="comment" class="block p-2.5 w-full text-sm bg-transparent text-white  border border-gray-300 focus:ring-red-500 focus:border-red-500 " placeholder="Leave a comment..."></textarea>
            <br>
            <label class=" font-medium text-white ">Rating</label><br>

            <div class="space-x-2 pt-3">
                <input type="radio" value="1" name="rate" class="w-4 h-4 text-red-600 bg-transparent ring-offset-gray-800 focus:ring-2 border-gray-200">
                <label class="ml-2 text-sm font-medium text-white" >Bad</label>

                <input type="radio" value="2" name="rate" class="w-4 h-4 text-red-600 bg-transparent ring-offset-gray-800 focus:ring-2 border-gray-200">
                <label class="ml-2 text-sm font-medium text-white" >Weak</label>

                <input type="radio" value="3" name="rate" class="w-4 h-4 text-red-600 bg-transparent ring-offset-gray-800 focus:ring-2 border-gray-200">
                <label class="ml-2 text-sm font-medium text-white" >Faire</label>

                <input type="radio" value="4" name="rate" class="w-4 h-4 text-red-600 bg-transparent ring-offset-gray-800 focus:ring-2 border-gray-200">
                <label class="ml-2 text-sm font-medium text-white" >Good</label>

                <input type="radio" value="5" name="rate" class="w-4 h-4 text-red-600 bg-transparent ring-offset-gray-800 focus:ring-2 border-gray-200">
                <label class="ml-2 text-sm font-medium text-white" >Excellent</label>
            </div>

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
