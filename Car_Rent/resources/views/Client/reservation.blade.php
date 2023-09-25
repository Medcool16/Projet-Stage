@extends('master.Homepage')

@section('title')
    Reservation
@endsection

@section('content')

<section style="margin-bottom:54%">
    <div class="" style="margin: 10px 0px">
        <h1 class=" mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">Our <span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-red-500  selection:text-white">Cars</span></h1>
    </div>

    <div class="flex space-x-4 justify-center" style="margin: 0px 40px">
        <div class="bg-gray-300 relative rounded-t-lg" style="width: 20%; height: 68vh;background-color: rgba(108, 108, 108, 0.419)">
            <div class="absolute flex justify-center items-center top-0 rounded-t-lg  w-full h-20 bg-gray-300">
                <h1 class="font-serif text-gray-900 text-5xl">Filter</h1>
            </div>
            <div style="margin-top: 30%">
                <form action="{{ route('filter') }}" method="GET">
                    @csrf
                    <div class="mb-3 mx-4">
                        <label  class="block mb-2 font-medium text-white">Price :</label>
                        <div class="flex justify-center">
                            <input type="number" name="min_price" class=" border rounded-sm bg-transparent border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500 w-32 mx-3 " placeholder="Min">
                            <input type="number" name="max_price" class=" border rounded-sm bg-transparent border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500 w-32 mx-3 " placeholder="Max">
                        </div>
                    </div>

                    <div class="mb-3 mx-1">
                        <label  class="block mb-2 font-medium mx-3 text-white">Number of passangers :</label>
                        <input type="number" name="people" class="border rounded-sm bg-transparent border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500 w-full " placeholder="People">
                    </div>

                    <div class="mb-3 mx-1">
                        <label  class="block mb-2 font-medium mx-3 text-white">Fuel type :</label>
                        <select  name="fue"  class=" border rounded-sm bg-transparent border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500 w-full  ">
                            <option value="" class="text-center">----select---</option>
                            @foreach ($fuel as $k)
                            <option value="{{ $k->id }}" class="text-gray-900">{{ $k->fuel_type }}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="mb-3 mx-1">
                        <label  class="block mb-2 font-medium mx-3 text-white">Gear-box type :</label>
                        <select class=" border rounded-sm bg-transparent border-gray-600 placeholder-gray-400 text-white focus:ring-red-500 focus:border-red-500 w-full  " name="gear">
                            <option value="" class="text-center">----select---</option>
                            <option value="automatic" class="text-gray-900">automatic</option>
                            <option value="manual" class="text-gray-900">manual</option>
                          </select>
                    </div>

                    <div class="justify-center mt-4 flex">
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium text-sm px-5 py-2.5 mr-2 mb-2 ">Apply filter</button>
                    </div>
                </form>
            </div>
        </div>

        <div class=" flex flex-col space-y-2" style="width: 60%; height: 90vh;">
                <div class=" w-full flex items-center justify-center rounded-t-lg" style="height: 10vh;  background-color: rgba(128, 128, 128, 0.415)">

                    <div class="flex items-center justify-center pt-3">
                        <a href="{{ route('all') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">All categories</a>
                        <a href="{{ route('compact') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">Compact</a>
                        <a href="{{ route('economy') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">Economy</a>
                        <a href="{{ route('van') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">Van</a>
                        <a href="{{ route('minivan') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">Minivan</a>
                        <a href="{{ route('SUVs') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">SUVs</a>
                        <a href="{{ route('sport') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">Sport</a>
                        <a href="{{ route('covertible') }}" class="border focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 border-gray-600 text-white hover:text-white hover:bg-gray-900 focus:ring-gray-600">Covertible</a>
                    </div>

                </div>
                <div class="w-full animated" style="height:150vh ;">
                    @yield('reservation_content')
                </div>
        </div>
    </div>
</section>
@endsection


@section('style')
    <style>
        input::placeholder{
            color: gray;
        }
    </style>
@endsection

