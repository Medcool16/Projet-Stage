@extends('master.Homepage')

@section('title')
    Park
@endsection

@section('content')
    <section style="margin-top: 90px">
        <h1 class="text-center text-4xl dark:text-white">Stock of our cars</h1>

        <div class="grid grid-cols-2 mb-4" style="margin-top: 50px">
            @foreach ($data as $i)
                    
                <div class="flex bg-white border shadow" style="margin: 5px">
                    <div class="bg-blue-100 h-96 flex justify-center items-center" style="width: 350px">
                        <img src="{{ asset('uploads/'. $i->image) }}">
                    </div>
                    
                    <div class="bg-red-300 h-96 px-3 space-y-3" style="width: 300px">
                        @foreach ($mark as $k)
                            @if ($i->id_marque === $k->id)
                            <h5 class="mb-2 mt-2 text-3xl text-center font-bold tracking-tight text-gray-900 dark:text-white">{{ $k->mark_name }}</h5>
                            @endif
                        @endforeach

                        @foreach ($model as $j)
                            @if ($i->id_model === $j->id)
                                <h6 class=""><span><img src="assets/tags.svg" class="mx-1 inline-block">Model: <span class="mb-3 font-normal text-gray-700 dark:text-white">{{ $j->model_name }}</span></h2>
                            @endif
                        @endforeach

                            <h6 class=""><img src="assets/info-circle.svg" class="mx-1 inline-block">Type: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->type }}</span></h6>
                            <h6 class=""><img src="assets/info-circle.svg" class="mx-1 inline-block">Type: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->type }}</span></h6>
                            <h6 class=""><img src="assets/paint-bucket.svg" class="mx-1 inline-block">Color: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->color }}</span></h6>
                            <h6 class=""><img src="assets/diagram-3.svg" class="mx-1 inline-block">Gear box: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->gear_box }}</span></h6>
                            <h6 class=""><img src="assets/speedometer2.svg" class="mx-1 inline-block">Speed: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->puissance }} Km/h</span></h6>
                            <h6 class=""><img src="assets/arrow-down-up.svg" class="mx-1 inline-block">kilometrage: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->kilometrage }}</span></h6>
                        @foreach ($fuel as $f)
                            @if ($i->id_carburant === $f->id)
                                <h6 class="card-title"><span><img src="assets/fuel-pump.svg" class="mx-1 inline-block">Fuel: <span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $f->fuel_type }}</span></h2>
                            @endif
                        @endforeach
                            <h6 class="card-title"><img src="assets/people.svg" class="mx-1 inline-block">Person: x<span class="mb-3 font-normal text-gray-700 dark:text-gray-400 dark:text-white">{{ $i->nbr_person }}</span></h6>

                    </div>
                </div>
            @endforeach
        </div>
        {{-- -------------------------------------------- --}}
    </section>
    <div class="flex justify-center mb-4" style="margin-top: 80px">{{ $data->links() }}</div>
@endsection

@section('style')
    <style>
        .grid {
            display: grid;
            place-items: center;
        }


    </style>
@endsection