@extends('master.layout')

@section('title')
    Reservation
@endsection


@section('content')

<h1 class="text-center font-bold text-3xl mb-4 text-white underline">Reservations</h1>

<div class="grid grid-cols-1 gap-4 mb-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs uppercase bg-gray-700 text-white">
            <tr>
                
                <th colspan="1" class="text-center border-2 py-3 bg-blue-900">Payment</th>
                <th colspan="2" class="text-center border-2 py-3 bg-blue-900">Client</th>
                <th colspan="4" class="text-center border-2 py-3 bg-blue-900">Car</th>
                <th colspan="3" class="text-center border-2 py-3 bg-blue-900">Reservation</th>
            </tr>
            <tr>
                <th rowspan="2" class="text-center border-2 py-3">Paid</th>
                <th scope="col" class=" py-3 border text-center">Full Name</th>
                <th scope="col" class=" py-3 border text-center">Card ID</th>
                {{-- <th scope="col" class=" py-3 border text-center">Email</th> --}}


                <th scope="col" class=" py-3 border text-center">Matricule</th>
                <th scope="col" class=" py-3 border text-center">Mark</th>
                <th scope="col" class=" py-3 border text-center">Model</th>
                <th scope="col" class=" py-3 border text-center">Type</th>


                <th scope="col" class=" py-3 border text-center">Destination</th>
                <th scope="col" class=" py-3 border text-center">Start Date</th>
                <th scope="col" class=" py-3 border text-center">End Date</th>


                <th scope="col" colspan="3" class=" py-3 border text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($contract as $res )
                <tr class="border-b bg-gray-900 text-white border-gray-700 hover:bg-gray-800">
                    @if ( $res->isPaid == 1)
                        <td class=" py-2 border">Yes</td>
                    @else
                        <td class=" py-2 border">No</td>
                    @endif
                    <td class=" py-2 border">{{ $res->first_name }} {{ $res->last_name }}</td>
                    <td class=" py-2 border">{{ $res->client_id }}</td>
                    {{-- <td class=" py-2 border">{{ $res->email }}</td> --}}

                    @foreach ($car as $i)
                        @if ($res->id_car == $i->id)

                            <td class=" py-2 border">{{ $i->matricule }}</td>
                            @foreach ($mark as $t)
                                @if ($i->id_marque == $t->id)
                                    <td class=" py-2 border">{{ $t->mark_name }}</td>
                                @endif
                            @endforeach
                            @foreach ($model as $k)
                                @if ($i->id_model == $k->id)
                                    <td class=" py-2 border">{{ $k->model_name }}</td>
                                @endif
                            @endforeach
                            <td class=" py-2 border">{{ $i->type }}</td>

                        @endif
                    @endforeach
                    <td class=" py-2 border">{{ $res->start_location }} => {{ $res->end_location }}</td>
                    <td class=" py-2 border">{{ $res->start_date }}</td>
                    <td class=" py-2 border">{{ $res->end_date }}</td>
                    <td class=" py-2 border flex justify-center space-x-1">

                        @if ($res->isPaid == 0)
                            <a href="{{ route('pay',$res->id) }}" class="border p-1 rounded-lg bg-green-400 "><img src="assets/currency-dollar.svg" class="invert"></a>
                        @else
                            <a href="{{ route('pay',$res->id) }}" class="border p-1 rounded-lg bg-yellow-300 "><img src="assets/x-lg.svg" class="invert"></a>
                        @endif
                        <form action="{{ route('cancel_res',$res->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="bg-red-500 text-white mx-1 px-2 py-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
                            </form>
                    </td>
                </tr> 
            @endforeach
            
        </tbody>
    </table>
 </div>


@endsection