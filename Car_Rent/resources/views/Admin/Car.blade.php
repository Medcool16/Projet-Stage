@extends('master.layout')

@section('title')
    Car
@endsection


@section('content')
<div class="flex flex-col">
    @if(session('success'))
        <div class="p-4 mb-4 text-sm rounded-lg bg-gray-800 text-green-400">
        {{ session('success') }}
        </div>
    @endif
    <h1 class="text-center font-bold text-3xl mb-1 text-white underline">Cars</h1>
</div>
<hr class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded">

<div class="flex items-center justify-center h-50 rounded text-center my-2">
    <a href="{{ route('add_page') }}" class="bg-blue-500 text-white hover:bg-blue-600 mx-3 p-2 rounded-md" style="width: 100px;">Add car</a>
</div>

<div class="grid grid-cols-1 gap-4 mb-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs uppercase bg-gray-700 text-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">Matricule</th>
                <th scope="col" class="px-6 py-3">Mark</th>
                <th scope="col" class="px-6 py-3">Model</th>
                <th scope="col" class="px-6 py-3">Color</th>
                <th scope="col" class="px-6 py-3">Type</th>
                <th scope="col" class="px-6 py-3">Gear-box</th>
                <th scope="col" class="px-6 py-3">Fuel</th>
                <th scope="col" class="px-6 py-3">Speed</th>
                <th scope="col" class="px-6 py-3">Price/day</th>
                <th scope="col" class="px-6 py-3">Status</th>
                <th colspan="2 class="text-center px-6 py-3" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr class="border-b bg-gray-900 text-white border-gray-700 hover:bg-gray-800">
                <td class="px-2 py-2">{{ $i->matricule }}</td>
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
                <td class=" py-2 "></td>
                <td class="px-2 py-2 flex justify-center space-x-1">
                    <form action="{{ route('remove_car',$i->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="bg-red-500 text-white mx-1 px-2 py-px rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
                    </form>
                    <a class="" href="{{ route('send_car_update',$i->id) }}"><img src="assets/pencil-square.svg" class="bg-yellow-300 p-1 rounded-lg" width=""></a>
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


@section('script')
    
@endsection