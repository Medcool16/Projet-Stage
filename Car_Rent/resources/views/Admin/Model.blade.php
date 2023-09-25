@extends('master.layout')

@section('title')
    Model
@endsection


@section('content')
    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
        {{ session('success') }}
        </div>
    @endif
    <h1 class="text-center font-bold text-3xl mb-4 text-white underline">Models</h1>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-center h-50 rounded">
            <div class="block max-w-4xl relative p-6 border rounded-sm shadow bg-gray-800 border-gray-700" style="width: 50%; height: 40vh;">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <div class="mb-3">
                      <label  class="block mb-2 text-sm font-medium text-white">Model</label>
                      <input type="text" class="shadow-sm bg-transparent border border-gray-300 text-white text-sm focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" placeholder="Model" name="model">
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
                    <div class="flex justify-center">
                        <button type="submit" class="text-white absolute bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center " style="">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="flex items-center justify-center h-50 rounded">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Model</th>
                        <th scope="col" class="px-6 py-3">Created at</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mode as $i)
                    <tr class="border-b bg-gray-900 text-white border-gray-700 hover:bg-gray-800">
                        <td class="px-6 py-2">{{ $i->id }}</td>
                        <td class="px-6 py-2">{{ $i->model_name }}</td>
                        <td class="px-6 py-2">{{ $i->created_at }}</td>
                        <td class="flex justify-center">
                            <form action="{{ route('delete_model',$i->id) }}" method="post">
                                @csrf  @method('DELETE')
                                <input class="bg-red-500 text-white pointer-event-auto mx-1 px-2 py-1 my-2 rounded-lg" onclick="return confirm('Are you sure you want to delete this data ?')" style="cursor: pointer;" type="submit" value="X">
                            </form>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
      
     </div>
@endsection