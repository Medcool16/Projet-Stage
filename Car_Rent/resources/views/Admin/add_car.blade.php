@extends('master.layout')

@section('title')
    Add Car
@endsection


@section('content')
            <div>
                <h1 class="text-center text-white underline text-4xl my-3">ADD CAR</h1>
            </div>
            <div class="block max-w-4xl p-6  border rounded-sm shadow bg-gray-800 border-gray-700" style="margin:0px auto ;">
                <div class="card-body">
                    <form method="POST" action="{{ route('store_car') }}" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-white" >Matricule</label>
                  <input type="text" class="shadow-sm bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Matricule" name="matricule">
                </div>
            
                <div class="mb-3 c1 c1">
                  <label  class="block mb-2 text-sm font-medium text-white">Gear-box</label>
    
                  <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="gear">
    
                    <option value="manual" class="text-gray-900">Manual</option>
                    <option value="automatic" class="text-gray-900">Automatic</option>
    
                  </select>
                </div>
    
                <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-white">Status</label>
    
                  <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="status">
    
                    <option value="available" class="text-gray-900">Available</option>
                    <option value="reserved" class="text-gray-900">Reserved</option>
    
                  </select>
                </div>
            
                <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-white">Mark</label>
                  <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="mark">
                    @foreach ($mark as $i)
                        <option value="{{ $i->id }}" class="text-gray-900">{{ $i->mark_name }}</option>
                    @endforeach
                  </select>
                </div>
            
                <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-white">Model</label>
                  <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="model">
                    @foreach ($model as $j)
                        <option value="{{ $j->id }}" class="text-gray-900">{{ $j->model_name }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-white">Fuel</label>
                  <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="fuel">
                    @foreach ($fuel as $k)
                        <option value="{{ $k->id }}" class="text-gray-900">{{ $k->fuel_type }}</option>
                    @endforeach
                  </select>
                </div>
    
                <div class="mb-3 c1">
                    <label  class="block mb-2 text-sm font-medium text-white">Color</label>
                    <input type="text" class="shadow-sm bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="color" name="color">
                </div>
    
                <div class="mb-3 c1">
                    <label  class="block mb-2 text-sm font-medium text-white">Speed</label>
                    <input type="text" class="shadow-sm bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="speed" name="speed">
                </div>

                <div class="mb-3 c1">
                    <label  class="block mb-2 text-sm font-medium text-white">Kilometrage</label>
                    <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="kilometrage">
                      <option value="unlimited" class="text-gray-900">Unlimited</option>
                      <option value="limited" class="text-gray-900">Limited</option>
                    </select>
                </div>

                <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-white">Type</label>
                  <select class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placehotext-white dark:focus:ring-red-500 dark:focus:border-red-500" name="type">
                        <option value="Economy" class="text-gray-900">Economy Car</option>
                        <option value="Compact" class="text-gray-900">Compact Car</option>
                        <option value="SUVs" class="text-gray-900">SUVs Car</option>
                        <option value="Minivan" class="text-gray-900">Minivans Car</option>
                        <option value="Sport" class="text-gray-900">Sport Car</option>
                        <option value="Van" class="text-gray-900">Van Car</option>
                        <option value="Covertible" class="text-gray-900">Covertible Car</option>
                  </select>
                </div>

                <div class="mb-3 c1">
                    <label  class="block mb-2 text-sm font-medium text-white">Number of persons</label>
                    <input type="number" class="shadow-sm bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="Number of persons" min="0" name="nbr_person">
                </div>

                <div class="mb-3 c1">
                    <label  class="block mb-2 text-sm font-medium text-white">Price per day</label>
                    <input type="number" class="shadow-sm bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5" placeholder="price per day" min="0" name="price">
                </div>
    
                <div class="mb-3 c1">
                    <label  class="block mb-2 text-sm font-medium text-white">Image/Logo</label>
                    <input type="file" class="block w-full text-sm text-white border border-gray-300 rounded-sm cursor-pointer bg-transparent" placeholder="image" name="image">
                </div>
                
                @if ($errors->any())
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <br>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="display: inline-block">Submit</button>
                <a href="{{ url('/cars') }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" style="display: inline-block">Return</a>
            </form>
            </div>
            </div>
@endsection


@section('style')
   <style>
        .sec{
            display: inline-block;
        }
       .option-head a{
           margin: 1px 6px;
       }
       
       .mb-3.c1,.mb-3.c2{
        display: inline-block;
        width: 48%;
       }

       .table thead th tr{
        text-align: center;
       }
   </style>
@endsection
