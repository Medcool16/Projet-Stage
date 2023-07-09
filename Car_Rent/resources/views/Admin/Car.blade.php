@extends('master.layout')

@section('title')
    Car
@endsection


@section('content')
<div class="grid grid-cols-1 gap-4 mb-4">
    <div class="flex items-center justify-center h-50 rounded text-center">
        @if(session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
            {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('add_page') }}" class="bg-blue-200 mx-3 p-2 rounded-lg" style="width: 100px;">Add car</a>
        <a href="#" class="bg-green-200 mx-1 p-2 rounded-lg" style="width: 100px;">Print</a>
    </div>
</div>
<hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700 ">

<div class="grid grid-cols-1 gap-4 mb-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Matricule</th>
                <th scope="col" class="px-6 py-3">Mark</th>
                <th scope="col" class="px-6 py-3">Model</th>
                <th scope="col" class="px-6 py-3">Color</th>
                <th scope="col" class="px-6 py-3">Type</th>
                <th scope="col" class="px-6 py-3">Kilometrage</th>
                <th scope="col" class="px-6 py-3">Gear-box</th>
                <th scope="col" class="px-6 py-3">Fuel</th>
                <th scope="col" class="px-6 py-3">Speed</th>
                <th scope="col" class="px-6 py-3">Price/day</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th colspan="2" class="text-center px-6 py-3" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr class="hover:bg-gray-100">
                <td class="px-2 py-2 ">{{ $i->matricule }}</td>
                <td class="px-2 py-2 ">
                    @foreach ($mark as $t)
                        @if ($i->id_marque == $t->id)
                            {{ $t->mark_name }}
                        @endif
                    @endforeach
                </td>
                <td class="px-2 py-2 ">
                    @foreach ($model as $k)
                        @if ($i->id_model == $k->id)
                            {{ $k->model_name }}
                        @endif
                    @endforeach
                </td>
                <td class="px-2 py-2 ">{{ $i->color }}</td>
                <td class="px-2 py-2 ">{{ $i->type }}</td>
                <td class="px-2 py-2 ">{{ $i->kilometrage }}</td>
                <td class="px-2 py-2 ">{{ $i->gear_box }}</td>
                <td class="px-2 py-2 ">
                    @foreach ($fuel as $f)
                        @if ($i->id_carburant == $f->id)
                            {{ $f->fuel_type }}
                        @endif
                    @endforeach
                </td>
                <td class="px-2 py-2 ">{{ $i->puissance }} km/h</td>
                <td class="px-2 py-2 ">{{ $i->price }} Dhs</td>
                <td class="px-2 py-2 ">{{ $i->status }}</td>
                <td class="px-2 py-2 "><a class="" href="{{ route('send_car_update',$i->id) }}"><img src="assets/pencil-square.svg" class="bg-yellow-300 mx-1 p-1 rounded-lg" width="25px"></a></td>
                <td class="px-2 py-2 ">
                    <form action="{{ route('remove_car',$i->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="bg-red-500 text-white pointer-event-auto mx-1 px-2 py-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
                </form>
                </td>
            </tr>   
            @endforeach
        </tbody>
    </table>
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
