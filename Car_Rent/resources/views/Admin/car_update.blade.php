@extends('master.layout')

@section('title')
    Edit_Car
@endsection


@section('content')
            <div class="">
                <h1 class="text-center text-yellow-300 text-4xl my-3">EDIT CAR</h1>
            </div>
            <div class="block max-w-4xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" style="margin:0px auto ;">
                <div class="card-body">
                    <form method="POST" action="{{ route('now_update',$up->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matricule</label>
              <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Matricule" value="{{ $up->matricule }}" name="matricule">
            </div>
        
            <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gear-box</label>

              <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="gear">

                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>

              </select>
            </div>
        
            <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mark</label>
              <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="mark">
                @foreach ($mark as $i)
                    @if ($up->id_marque == $i->id_marque)
                        <option value="{{ $i->id }}" selected>{{ $i->mark_name }}</option>
                    @endif
                    <option value="{{ $i->id }}">{{ $i->mark_name }}</option>
                @endforeach
              </select>
            </div>
        
            <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model</label>
              <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="model">
                @foreach ($model as $j)
                @if ($up->id_model == $j->id_model)
                    <option value="{{ $j->id }}" selected>{{ $j->model_name }}</option>
                @endif
                <option value="{{ $j->id }}">{{ $j->model_name }}</option>
            @endforeach
              </select>
            </div>
            
            <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuel</label>
              <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="fuel">
                @foreach ($fuel as $k)
                    @if ($up->id_carburant == $k->id_carburant)
                    <option value="{{ $k->id }}" selected>{{ $k->fuel_type }}</option>
                    @endif
                    <option value="{{ $k->id }}">{{ $k->fuel_type }}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3 c1">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="color" value="{{ $up->color }}" name="color">
            </div>

            <div class="mb-3 c1">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Speed</label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="speed" value="{{ $up->puissance }}" name="speed">
            </div>

            <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kilometrage</label>
              <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kilometrage">
                <option value="unlimited">Unlimited</option>
                <option value="limited">Limited</option>
              </select>
          </div>

          <div class="mb-3 c1">
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="type">
                  <option value="Economy">Economy Car</option>
                  <option value="Compact">Compact Car</option>
                  <option value="SUVs">SUVs Car</option>
                  <option value="Minivan">Minivans Car</option>
                  <option value="Sport">Sport Car</option>
                  <option value="Van">Van Car</option>
                  <option value="Covertible">Covertible Car</option>
            </select>
        </div>

          <div class="mb-3 c1">
              <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of persons</label>
              <input type="number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Number of persons" value="{{ $up->nbr_person }}" min="0" name="nbr_person">
          </div>

            <div class="mb-3 c1">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price per day</label>
                <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="price" value="{{ $up->price }}" name="price">
            </div>

            <div class="mb-3 c1">
                  <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
    
                  <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="status">
    
                    <option value="available">Available</option>
                    <option value="reserved">Reserved</option>
    
                  </select>
              </div>

            <div class="mb-3 c1">
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image/Logo</label>
                <input type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" placeholder="image" name="image">
            </div>
            
            <br>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="display: inline-block">Modify</button>
            <a href="{{ url('/cars') }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="display: inline-block">Return</a>
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
       .bt{
        margin: 0px -10px;
       }

       th ,td{
        text-align: center;
        margin: 0px -10px;
       }
   </style>
@endsection
