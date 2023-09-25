
@extends('Client.reservation')

@section('reservation_content')
    @parent

    @foreach ($final as $i)
    <div class="flex mb-4 p-3 border " style="background-color:; height: 245px;">
        <div class=" h-44" style="width: 40%">
            <img src="{{ asset('uploads/'. $i->image) }}" class="w-full h-32 object-contain rounded-t-lg">
        </div>

        <div class="h-44 p-2 rounded-md img-holder" style="width: 50%; background-color: #ffffff1a">
            @foreach ($mark as $k)
                @if ($i->id_marque === $k->id)
                    <h5 class="mb-2 mx-3 text-2xl font-bold tracking-tight text-white">{{ $i->color }} {{ $k->mark_name }} Car</h5>
                @endif
            @endforeach

            <h6 class=" text-white"><img src="assets/info-circle.svg" class="mx-1 inline-block">Type: <span class="mb-3 font-thin text-gray-100">{{ $i->type }}</span></h6>
            <h6 class=" text-white"><img src="assets/diagram-3.svg" class="mx-1 inline-block">Gear box: <span class="mb-3 font-thin text-gray-100">{{ $i->gear_box }}</span></h6>
            <h6 class=" text-white"><img src="assets/speedometer2.svg" class="mx-1 inline-block">Speed: <span class="mb-3 font-thin text-gray-100">{{ $i->puissance }} Km/h</span></h6>
            <h6 class=" text-white"><img src="assets/arrow-down-up.svg" class="mx-1 inline-block">kilometrage: <span class="mb-3 font-thin text-gray-100">{{ $i->kilometrage }}</span></h6>
            
            @foreach ($fuel as $f)
                @if ($i->id_carburant === $f->id)
                    <h6 class="card-title text-white"><span><img src="assets/fuel-pump.svg" class="mx-1 inline-block">Fuel: <span class="mb-3 font-thin  text-whittext-gray-100">{{ $f->fuel_type }}</span></h2>
                @endif
            @endforeach
            <h6 class=" text-white"><img src="{{ asset('assets/people.svg') }}" class="mx-1 inline-block">Passangers: <span class="mb-3 font-thin text-gray-100">{{ $i->nbr_person }}</span></h6>
        </div>

        <div class="h-44 flex justify-start relative flex-col " style="width: 20%;">
            <p class="text-3xl text-center font-bold tracking-tight text-white">{{ $i->price }}</p>
            <span class="text-center font-thin text-white">Dhs/<span class="text-red-500">Day</span></span>

            <div class="flex justify-center absolute bottom-0 right-3">
                <a href="{{ route('book',$i->id) }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Book now</a>
            </div>
        </div>
    </div>
    @endforeach


    <div class="flex justify-center mb-4" style="margin-top:">{{ $final->links() }}</div>

@endsection
