@extends('master.layout')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="grid grid-cols-2 gap-4 mb-4">
    <div class="flex items-center justify-center h-50 rounded bg-gray-50 dark:bg-gray-800 position-relative">
        <img src="images/car.png" class="img-fluid" width="180px" height="180px">
        <div>
            <div class="text-center mb-4 text-6xl text-gray-900 dark:text-white"><h1>CARS</h1></div>
            <div class="flex justify-center"><span class="num">{{ $cars }}</span></div>
        </div>
    </div>

    <div class="flex items-center justify-center h-50 rounded bg-gray-50 dark:bg-gray-800 position-relative">
        <img src="images/clients.png" class="img-fluid my-4 mx-2" width="190px" height="190px">
        <div>
            <div class="text-center mb-4 text-6xl text-gray-900 dark:text-white"><h1>CLIENTS</h1></div>
            <div class="flex justify-center"><span class="num">{{ $clients }}</span></div>
        </div>
    </div>
  
 </div>

 <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

 <div class="grid grid-cols-1 gap-4 mb-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Matricule</th>
                <th scope="col" class="px-6 py-3">Mark</th>
                <th scope="col" class="px-6 py-3">Model</th>
                <th scope="col" class="px-6 py-3">Color</th>
                <th scope="col" class="px-6 py-3">Gear-box</th>
                <th scope="col" class="px-6 py-3">Fuel</th>
                <th scope="col" class="px-6 py-3">Speed</th>
                <th scope="col" class="px-6 py-3">Price/day</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($available_cars as $i)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-2 py-0 " >{{ $i->matricule }}</td>
                <td class="px-2 py-0 " >
                    @foreach ($mark as $t)
                        @if ($i->id_marque == $t->id)
                            {{ $t->mark_name }}
                        @endif
                    @endforeach
                </td>
                <td class="px-2 py-0 " >
                    @foreach ($model as $k)
                        @if ($i->id_model == $k->id)
                            {{ $k->model_name }}
                        @endif
                    @endforeach
                </td>
                <td class="px-2 py-0 " >{{ $i->color }}</td>
                <td class="px-2 py-0 " >{{ $i->gear_box }}</td>
                <td class="px-2 py-0 " >
                    @foreach ($fuel as $f)
                        @if ($i->id_carburant == $f->id)
                            {{ $f->fuel_type }}
                        @endif
                    @endforeach
                </td>
                <td class="px-2 py-0 " >{{ $i->puissance }} km/h</td>
                <td class="px-2 py-0 " >{{ $i->price }} Dhs</td>
            </tr>   
            @endforeach
        </tbody>
    </table>
 </div>
@endsection



@section('style')
    <style>
        .line{
            border: none;
            border-top: 1px solid black;
            width: 100%;
            margin-bottom: 50px;
        }

        .num{
            font-size:50px; 
            border: 1px solid black;
            padding: 1px 10px;
        }

        .card{
            width: 365px;
            height: 200px;
        }

        th, td{
          text-align: center;
        }
    </style>
@endsection