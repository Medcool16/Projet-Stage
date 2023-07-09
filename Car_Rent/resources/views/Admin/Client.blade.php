@extends('master.layout')

@section('title')
    Client
@endsection


@section('content')
<div class="grid grid-cols-1 gap-4 mb-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">CIN</th>
                <th scope="col" class="px-6 py-3">First name</th>
                <th scope="col" class="px-6 py-3">Last name</th>
                <th scope="col" class="px-6 py-3">Gender</th>
                <th scope="col" class="px-6 py-3">License</th>
                <th scope="col" class="px-6 py-3">Adress</th>
                <th scope="col" class="px-6 py-3">Phone</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-2 py-2 ">{{ $i->CIN }}</td>
                <td class="px-2 py-2 ">{{ $i->first_name }}</td>
                <td class="px-2 py-2 ">{{ $i->last_name }}</td>
                <td class="px-2 py-2 ">{{ $i->gender }}</td>
                <td class="px-2 py-2 ">{{ $i->license }}</td>
                <td class="px-2 py-2 ">{{ $i->adress }}</td>
                <td class="px-2 py-2 ">{{ $i->phone }}</td>
                <td class="px-2 py-2 ">{{ $i->email }}</td>
                <td class="px-6 py-1">
                    <input class="bg-red-500 text-white pointer-event-auto mx-1 px-2 py-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
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