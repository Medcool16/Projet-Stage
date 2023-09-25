@extends('master.layout')

@section('title')
    Client
@endsection


@section('content')
<div class="grid grid-cols-1 gap-4 mb-4">
    <h1 class="text-center font-bold text-3xl text-white mb-1 underline">Clients</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs uppercase bg-gray-700 text-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">First name</th>
                <th scope="col" class="px-6 py-3">Last name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr class="border-b bg-gray-900 text-white border-gray-700 hover:bg-gray-800">
                
                <td class="px-2 py-2 ">{{ $i->first_name }}</td>
                <td class="px-2 py-2 ">{{ $i->last_name }}</td>
                <td class="px-2 py-2 ">{{ $i->email }}</td>
                <td class="px-6 py-1">
                    <form action="{{ route('remove_client',$i->id) }}" method="post">
                        @csrf  @method('DELETE')
                        <input class="bg-red-500 text-white pointer-event-auto mx-1 px-2 py-1 my-2 rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
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
        .tabrow th{
            text-align: center;
        }
    </style>
@endsection