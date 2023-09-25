@extends('master.layout')

@section('title')
    Hot offeres
@endsection


@section('content')
                @if(session('success'))
                    <div class="p-4 mb-4 text-sm text-center mx-4 rounded-lg bg-gray-800 text-green-400">
                    {{ session('success') }}
                    </div>
                @endif

<form action="{{ route('store offers') }}" method="POST">
    @csrf
    <div class="justify-center mt-4 flex">
        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium text-sm px-5 py-2.5 mr-2 mb-2 ">Apply</button>
    </div>
<div class="justify-center grid-cols-1 mx-4 flex-wrap flex relative gap-2 w-full" style="margin-top:">
    @foreach ($cars as $i)
    
    <div class="relative flex flex-col border hover:bg-gray-800 transition duration-200 ease-in  bg-transparent bg-clip-border text-gray-100 shadow-md" style="width: 27%;">
        <input type="text" name="new_price" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="New Price">
        <div class="flex items-center justify-between mx-2 my-2">
            <input type="checkbox" name="hot[]" value="$i->id">
            @foreach ($mark as $j)
                @if ($i->id_marque == $j->id)
                <h5 class="text-3xl text-white font-semibold tracking-tight text-center"> {{ $j->mark_name }}</h5>
                @endif
            @endforeach
                <span class="text-center font-thin text-white">{{ $i->price }} Dhs/<span class="text-red-500">{{ __('message.Day') }}</span></span>
                
        </div>
        <div class="relative m-0 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-100 shadow-none">
          <img
            src="{{ asset('uploads/'. $i->image) }}"
            class="w-full h-48 object-contain rounded-t-lg"
          />
        </div>
        <div class="p-6">
          
        </div>
        <div class="flex justify-center">
            <div class="absolute bottom-0 mx-1">
                <a href="#" class="border px-1 text-white font-thin">{{ $i->type }}</a>
                <a href="#" class="border px-1 text-white font-thin">{{ $i->gear_box }}</a>
                <a href="#" class="border px-1 text-white font-thin">{{ $i->nbr_person }} Passangers</a>
                @foreach ($fuel as $f)
                    @if ($i->id_carburant == $f->id)
                    <a href="#" class="border px-3 text-white font-thin">{{ $f->fuel_type }}</a>
                    @endif
                @endforeach
            </div>
        </div>
      </div>

    @endforeach
    </form>
</div>


@endsection


@section('style')

@endsection
