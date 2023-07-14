<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" /> 
    <title>Registration</title>
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
                <div class="bg-red-300 mx-3">
                  <a href="{{ route('homie') }}" class="my-6 p-1">Back &RightArrow;</a>
                </div>
                <div class=" mx-3" style="margin: 0px 180px">
                  <h1 class="my-6 text-center text-3xl font-bold">Sign in</h1>
                </div>

              </div>

              <form action="{{ route('new_client') }}" method="post">
                @csrf
                  <div class=" c1">
                    <label for="first_name" class=" text-sm font-medium text-white ">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="first name" required>
                  </div>
                  
                  <div class=" c1">
                    <label for="last_name" class=" text-sm font-medium text-white ">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="last name" required>
                  </div>
              
                  <div class=" c1">
                      <label for="CIN" class=" text-sm font-medium text-white ">ID</label>
                      <input type="text" id="CIN" name="CIN" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="P43..." required>
                    </div>
              
                  <div class=" c1">
                      <label for="gender" class=" text-sm font-medium text-white ">Gender</label>
                      <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                    </div>
              
                  <div class="">
                      <label for="phone" class=" text-sm font-medium text-white ">Phone</label>
                      <input type="text" id="phone" name="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="phone number" required>
                  </div>
              
                  <div class="">
                      <label for="license" class=" text-sm font-medium text-white ">License</label>
                      <input type="text" id="license" name="license" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="license" required>
                  </div>
              
                  <div class="">
                      <label for="username" class=" text-sm font-medium text-white ">Username</label>
                      <input type="text" id="username" name="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="username" required>
                  </div>
              
                  <div class="">
                    <label for="email" class=" text-sm font-medium text-white ">Your email</label>
                    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="example123@gmail.com" required>
                  </div>
              
              
                  <div class="">
                    <label for="password" class=" text-sm font-medium text-white ">Your password</label>
                    <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="password" required>
                  </div>
              
                  <div class="">
                      <label for="large-input" class=" text-sm font-medium text-white ">Adress</label>
                      <textarea type="text" id="large-input" name="adress" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" cols="30" rows="3" placeholder="your adress"></textarea>
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
                    <button type="submit" class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
                  </div>
                </form>
                
              
          </div>
      </div>
  </section>
</body>


</html>
