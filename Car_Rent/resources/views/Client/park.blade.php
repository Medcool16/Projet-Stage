@extends('master.Homepage')

@section('title')
    Park
@endsection

@section('content')
    <section style="margin-bottom: 0px">
        <div>
            <h1 class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white">{{ __('message.Featured') }} <span class=" mt-4 mb-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-red-500  selection:text-white">{{ __('message.Vehicles') }}</span></h1>
        </div>
        <div class="justify-center  grid-cols-1 mx-4 flex-wrap flex relative sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 w-full" style="margin-top: 50px">
            @foreach ($data as $key => $i)
            <div class="relative specials flex mx-4 my-2 flex-col border hover:bg-gray-600 transition duration-700 ease-in-out  bg-transparent bg-clip-border text-gray-100 shadow-md" style="width: 27%;">
                <div class="flex items-center justify-between mx-2 my-2">
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
                        <a href="#" class="border px-2 text-white font-thin">{{ $i->type }}</a>
                        <a href="#" class="border px-3 text-white font-thin">{{ $i->gear_box }}</a>
                        <a href="#" class="border px-4 text-white font-thin">{{ $i->nbr_person }} Passangers</a>
                        @foreach ($fuel as $f)
                            @if ($i->id_carburant == $f->id)
                            <a href="#" class="border px-3 text-white font-thin">{{ $f->fuel_type }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
              </div>

            @endforeach
        </div>
    </section>
    <div class="flex justify-center mb-4" style="margin-top: 10px">{{ $data->links() }}</div>
@endsection

@section('style')
    <style>
        .grid {
            display: grid;
            place-items: center;
        }


    </style>
@endsection
