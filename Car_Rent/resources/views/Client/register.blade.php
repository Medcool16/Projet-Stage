<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    @vite('resources/css/app.css')
    <title>Register</title>
    <style>
        .c1{
            display: inline-block;
            width: 40%;
       }
    </style>
</head>
<!-- component -->
<body>
  <section>
    <div class="relative flex justify-center items-center">
      <img src="{{ asset('images/bg.jpg') }}" class="w-full h-screen">

      <div class="absolute z-10 rounded-lg" style="width: 45%; height: 80vh; background-color: rgba(82, 82, 82, 0.304)">

        <h1 class="text-white font-bold text-5xl text-center my-4">Register</h1>

        <form action="{{ route('new_client') }}" class="space-y-4" method="post">
          @csrf
            <div class="flex justify-center space-x-2">
              <div style="width: 37%">
                <label for="first_name" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">First Name</label>
                <input type="text" id="first_name" name="first_name" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="first name" style="width: 100%" required>
              </div>
              
              <div style="width: 37%">
                <label for="last_name" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="last name" style="width: 100%" required>
              </div>
            </div>
        
        
            <div class="">
                <label for="username" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">Username</label>
                <input type="text" id="username" name="username" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="username" style="width: 75% ; margin: 5px auto" required>
            </div>
        
            <div class="">
              <label for="email" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">Your email</label>
              <input type="email" id="email" name="email" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="example123@gmail.com" style="width: 75% ; margin: 5px auto" required>
            </div>
        
        
            <div class="">
              <label for="password" class="block mb-2 text-sm font-medium text-white" style="width: 75% ; margin: 5px auto">Your password</label>
              <input type="password" id="password" name="password" class="bg-transparent border text-white border-gray-300  text-sm   focus:ring-red-500 focus:border-red-500 block p-2.5" placeholder="password" style="width: 75% ; margin: 5px auto" required>
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
              <button type="submit" class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register new account</button>
            </div>

            <div class="flex justify-center">
              <a href="{{ route('logClient') }}" class="text-white text-center text-sm font-thin underline">Already have an account </a>
            </div>
          </form>

          <div class="flex justify-center" style="margin-top: 20px">
            <a href="{{ url()->previous() }}" class="text-white text-center text-sm font-thin bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 p-2 rounded-lg shadow">Return</a>
          </div>
      </div>
        
    </div>
    
    </section>
</body>


</html>
