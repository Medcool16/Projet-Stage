@extends('master.layout')

@section('title')
    Fuel
@endsection


@section('content')
    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
        {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-center h-50 rounded">
            <div class="block max-w-4xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <form method="POST" action="{{ route('store_fuel') }}">
                    @csrf
                    <div class="mb-3">
                      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Make a new fuel</label>
                      <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Fuel name" name="fuel_name">
                    </div>
    
                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="display: inline-block">Submit</button>
                </form>
            </div>
        </div>
    
        <div class="flex items-center justify-center h-50 rounded">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Fuel</th>
                        <th scope="col" class="px-6 py-3">Created at</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fuel as $i)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-2 ">{{ $i->id }}</td>
                        <td class="px-5 py-2 ">{{ $i->fuel_type }}</td>
                        <td class="px-2 py-2 ">{{ $i->created_at }}</td>
                        <td class="flex mx-4 px-3 py-2">
                            <form action="{{ route('remove_fuel',$i->id) }}" method="post">
                                @csrf  @method('DELETE')
                                <input class="bg-red-500 text-white pointer-event-auto mx-1 px-2 py-1 rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
                            </form>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
      
     </div>
@endsection