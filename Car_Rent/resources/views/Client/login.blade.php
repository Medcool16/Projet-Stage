<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <section class="flex items-stretch text-white" style="height: 100vh;">
      <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative" style="background-image: linear-gradient(rgb(62 110 158 / 84%),rgb(2 18 58 / 13%)),url(../images/form.jpg);">
          <div class="w-full px-24 z-10">
              {{-- <h1 class="text-5xl text-center font-bold tracking-wide py-4">Keep it special</h1> --}}
          </div>
      </div>


      <div class="lg:w-1/2 w-full flex items-center justify-center md:px-16 px-0 z-0" style="background-image: linear-gradient(rgb(20 37 53 / 89%),rgb(52 51 142 / 42%)),url(../images/footer.png);">
          <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center" >
          </div>
          <div class=" z-20">
              <div class="flex items-center">
                <div class="bg-red-300 ">
                  <a href="{{ route('homie') }}" class="my-6 p-1">Back &RightArrow;</a>
                </div>
                <div class=" " style="margin: 0px 130px">
                  <h1 class="my-6 text-center text-3xl font-bold">Login</h1>
                </div>

              </div>
              <form class="space-y-6" action="{{ route('Connect_client') }}">
                @csrf
                  <div>
                      <label for="user" class="block mb-2 text-sm font-medium text-white">Username</label>
                      <input type="text" name="username" id="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="your username" required>
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-white">Your password</label>
                      <input type="password" name="password" id="password" placeholder="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                  </div>
                  <div class="flex justify-between">
                      <a href="#" class="text-sm text-white hover:underline">Lost Password?</a>
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

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                <div class="text-sm font-medium text-gray-900">
                    Not registered? <a href="{{ route('registerClient') }}" class="text-white hover:underline">Create account</a>
                </div>

                
              
          </div>
      </div>
  </section>
</body>


</html>
