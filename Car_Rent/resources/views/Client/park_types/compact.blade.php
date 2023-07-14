
@extends('Client.reservation')

@section('reservation_content')
    @parent
    @foreach ($data as $i)
    <div class="flex mb-4 rounded-sm p-3 " style="background-color: #ffffff47; height: 245px;">
        <div class=" h-44" style="width: 40%">
            <img src="{{ asset('uploads/'. $i->image) }}" class="">
        </div>

        <div class="h-44 p-2 rounded-l-lg" style="width: 50%; background-color: #dddbff73">
            @foreach ($mark as $k)
                @if ($i->id_marque === $k->id)
                    <h5 class="mb-2 mx-3 text-2xl font-bold tracking-tight text-gray-900">{{ $i->color }} {{ $k->mark_name }} Car</h5>
                @endif
            @endforeach

            <h6 class=""><img src="assets/info-circle.svg" class="mx-1 inline-block">Type: <span class="mb-3 font-normal text-gray-700">{{ $i->type }}</span></h6>
            <h6 class=""><img src="assets/diagram-3.svg" class="mx-1 inline-block">Gear box: <span class="mb-3 font-normal text-gray-700">{{ $i->gear_box }}</span></h6>
            <h6 class=""><img src="assets/speedometer2.svg" class="mx-1 inline-block">Speed: <span class="mb-3 font-normal text-gray-700">{{ $i->puissance }} Km/h</span></h6>
            <h6 class=""><img src="assets/arrow-down-up.svg" class="mx-1 inline-block">kilometrage: <span class="mb-3 font-normal text-gray-700">{{ $i->kilometrage }}</span></h6>
            
            @foreach ($fuel as $f)
                @if ($i->id_carburant === $f->id)
                    <h6 class="card-title"><span><img src="assets/fuel-pump.svg" class="mx-1 inline-block">Fuel: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $f->fuel_type }}</span></h2>
                @endif
            @endforeach
            
        </div>

        <div class="h-44 rounded-r-lg" style="width: 10%; background-color: #dddbff73">
            <p class="text-3xl text-center font-bold tracking-tight text-gray-900">{{ $i->price }}</p>
            <span class="block mb-3 text-center">Dhs/month</span>
            <a href="{{ $i->id }}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-thin rounded-lg text-sm px-5 py-2.5 text-center">Book now</a>
        </div>
    </div>
    @endforeach


    <div class="flex justify-center mb-4" style="margin-top: 80px">{{ $data->links() }}</div>
@endsection
