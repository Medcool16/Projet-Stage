@extends('master.Homepage')

@section('title')
    Park
@endsection

@section('content')
    <section style="margin-top: 90px">
        <h1 class="text-center text-4xl text-white">Stock of our cars</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full" style="margin-top: 50px">
            @foreach ($data as $i)
                
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                   
                        @foreach ($mark as $k)
                            @if ($i->id_marque === $k->id)
                                <h5 class="mb-2 mt-2 text-3xl text-center font-bold tracking-tight text-gray-900 dark:text-white">{{ $k->mark_name }}</h5>
                            @endif
                        @endforeach

                    <img class="p-8 rounded-t-lg" src="{{ asset('uploads/'.$i->image) }}" alt="product image" />
                    
                    
                    <div class="flex justify-center py-2">
                        <button data-dropdown-toggle="dropdownTop" data-dropdown-placement="top" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800" type="button">Show details</button>
                    </div>
                    
                    <!-- Dropdown menu -->
                    <div id="dropdownTop" class="z-10 hidden bg-red-300 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                            
                          <li>
                            @foreach ($model as $j)
                                        @if ($i->id_model === $j->id)
                                            <h6 class=""><span><img src="assets/tags.svg" class="mx-1 inline-block">Model: <span class="mb-3 font-normal text-gray-700 dark:text-white">{{ $j->model_name }}</span></h2>
                                        @endif
                            @endforeach
                          </li>

                            <li><h6 class=""><img src="assets/info-circle.svg" class="mx-1 inline-block">Type: <span class="mb-3 font-normal text-gray-700 ">{{ $i->type }}</span></h6></li>
                            <li><h6 class=""><img src="assets/paint-bucket.svg" class="mx-1 inline-block">Color: <span class="mb-3 font-normal text-gray-700 ">{{ $i->color }}</span></h6></li>
                            <li><h6 class=""><img src="assets/diagram-3.svg" class="mx-1 inline-block">Gear box: <span class="mb-3 font-normal text-gray-700 ">{{ $i->gear_box }}</span></h6></li>
                            <li><h6 class=""><img src="assets/speedometer2.svg" class="mx-1 inline-block">Speed: <span class="mb-3 font-normal text-gray-700 ">{{ $i->puissance }} Km/h</span></h6></li>
                            <li><h6 class=""><img src="assets/arrow-down-up.svg" class="mx-1 inline-block">kilometrage: <span class="mb-3 font-normal text-gray-700 ">{{ $i->kilometrage }}</span></h6></li>
                            <li>
                                @foreach ($fuel as $f)
                                        @if ($i->id_carburant === $f->id)
                                            <h6 class="card-title"><span><img src="assets/fuel-pump.svg" class="mx-1 inline-block">Fuel: <span class="mb-3 font-normal text-gray-700 ">{{ $f->fuel_type }}</span></h2>
                                        @endif
                                @endforeach
                            </li>
                            <li><h6 class="card-title"><img src="assets/people.svg" class="mx-1 inline-block">Person: x<span class="mb-3 font-normal text-gray-700 ">{{ $i->nbr_person }}</span></h6></li>
                        </ul>
                    </div>
                        
                </div>

            @endforeach
        </div>
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
