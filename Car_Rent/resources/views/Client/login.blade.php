<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" /> 
    <title>Login</title>
    <style>
        .c1{
            display: inline-block;
            width: 48%;
       }
    </style>
</head>
<!-- component -->
<body>
  <section>
    <div class="relative flex justify-center items-center">
      <img src="{{ asset('images/bg.jpg') }}" class="w-full h-screen">

      <div class="absolute z-10 rounded-lg" style="width: 45%; height: 80vh; background-color: rgba(82, 82, 82, 0.304)">

        <h1 class="text-white font-bold text-5xl text-center my-4">Login</h1>

        <form class="space-y-6 flex flex-col" action="{{ route('Connect_client') }}">
          @csrf
            <div>
                <label for="user" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">Username</label>
                <input type="text" name="username" id="user" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="your username" required style="width: 75% ; margin: 0 auto">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">Your password</label>
                <input type="password" name="password" id="password" placeholder="password" class="bg-transparent border border-gray-300 text-white text-sm  focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required style="width: 75% ; margin: 0 auto">
            </div>

            @if ($errors->any())
            <div class="p-4 mb-4 text-sm rounded-lg bg-red-400 shadow text-center text-white" style="width: 50% ; margin:0 auto; margin-top: 5%">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
        @endif

        <div class="flex justify-center">
          <button type="submit" class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign In</button>
        </div>

        <div class="flex justify-center text-sm font-medium text-gray-400">Not registered?  &nbsp;
          <a href="{{ route('registerClient') }}" class="text-white text-center text-sm font-thin underline"> Create new account</a>
        </div>
      </form>

      <div class="flex justify-center" style="margin-top: 20px">
        <a href="{{ url()->previous() }}" class="text-white text-center text-sm font-thin bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 p-2 rounded-lg shadow">Return</a>
      </div>
        
    </div>
    
    </section>
</body>


</html>
