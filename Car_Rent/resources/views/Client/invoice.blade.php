<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <title>Invoice</title>
</head>
<body>
    <div class="flex justify-center mt-4" id="button">
        <button onclick="PrintContent()" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Print</button>
    </div>
<section class="w-full p-4" >
    <div class=" px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10" style="">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto">
          <!-- Card -->
          <div class="flex flex-col p-4 sm:p-10 bg-white border border-gray-900 shadow-lg rounded-xl dark:bg-gray-800">
            <!-- Grid -->
            <div class="flex justify-between">
              <div>
                <img src="{{ asset('images/logo.png') }}" class="mr-3 w-24" alt="">
    
                <h1 class="mt-2 text-lg md:text-xl font-semibold text-red-600 dark:text-white">Reno Car</h1>
              </div>

              <div class="text-center text-red-700" style="width: 50%">
                <span class="uppercase font-bold">note that you must head to the agency to pay. <br> Any delay will dismissed your reservation within 24h </span>
              </div>
              <!-- Col -->
    
              <div class="text-center">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">Car Rental Invoice #</h2>
                <span class="mt-1 block text-gray-500">----{{ $invoice->created_at }}-----</span>
    
                <address class="mt-4 not-italic text-gray-800 dark:text-gray-200">
                    {{ $agency->name }}<br>
                  {{ $agency->contact }}<br>
                  {{ $agency->location }}<br>
                  {{ $agency->city }}, MA<br>
                </address>
              </div>
              <!-- Col -->
            </div>
            <!-- End Grid -->
            
            
            
            <!-- Grid -->
            <span class="text-3xl font-bold my-4 ml-4 text-blue-500 text-center">Customer Information</span>
            <div>
                <span class="mt-1 block text-center text-gray-500">You are going to rent this car for: {{ $duration }} Days</span>
          </div>
            <div class="mt-4">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-gray-200 border">
                        <tr>

                            <th scope="col" class="px-2 py-3">
                                Full Name
                            </th>

                            {{-- <th scope="col" class="px-2 py-3">
                                Email
                            </th> --}}

                            <th scope="col" class="px-2 py-3">
                                Phone
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Start Location
                            </th>
                            <th scope="col" class="px-2 py-3">
                                End Location
                            </th>


                            <th scope="col" class="px-2 py-3">
                                Start Date & Time
                            </th>

                            <th scope="col" class="px-2 py-3">
                                End Date & Time
                            </th>

                           

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="px-2 text-center py-4">{{ $invoice->first_name }} {{ $invoice->last_name }} </td>
                            {{-- <td class="px-2 text-center py-4">{{ $invoice->email }}</td> --}}
                            <td class="px-2 text-center py-4">{{ $invoice->phone }}</td>
                            <td class="px-2 text-center py-4">{{ $invoice->start_location }}</td>
                            <td class="px-2 text-center py-4">{{ $invoice->end_location }}</td>
                            <td class="px-2 text-center py-4">{{ $invoice->start_date }} | {{ $invoice->start_time }}</td>
                            <td class="px-2 text-center py-4">{{ $invoice->end_date }} | {{ $invoice->end_time }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Grid -->
            <span class="text-3xl font-bold my-4 ml-4 text-blue-500 text-center">Vehicule Information</span>
            <div class="mt-4">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-gray-200 border">
                        <tr>

                            <th scope="col" class="px-2 py-3">
                                Matricule
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Mark
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Model
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Gear Box
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Speed
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Fuel
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Passangers
                            </th>

                           

                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="px-2 py-4 text-center">{{ $car->matricule }}</td>
                            <td class="px-2 py-4 text-center">
                                @foreach ($mark as $t)
                                    @if ($car->id_marque == $t->id)
                                        {{ $t->mark_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="px-2 py-4 text-center">
                                @foreach ($model as $k)
                                    @if ($car->id_model == $k->id)
                                        {{ $k->model_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="px-2 py-4 text-center">{{ $car->gear_box }}</td>
                            <td class="px-2 py-4 text-center">{{ $car->type }}</td>
                            <td class="px-2 py-4 text-center">{{ $car->puissance }} Km/h</td>
                            <td class="px-2 py-4 text-center">
                                @foreach ($fuel as $f)
                                    @if ($car->id_carburant == $f->id)
                                        {{ $f->fuel_type }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="px-2 py-4 text-center">{{ $car->nbr_person }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Flex -->
            <div class="mt-8 flex justify-between">
              <div class="w-full max-w-2xl sm:text-right space-y-2">
                <!-- Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-1 gap-1 sm:gap-2">
                  <dl class="grid sm:grid-cols-5 gap-x-3">
                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Price per day: 
                        <span class="col-span-2 text-gray-500">{{ $car->price }}.00 Dhs
                            
                        </span>
                    </dt>
                  </dl>
    
                  <dl class="grid sm:grid-cols-5 gap-x-3">
                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Total: <span class="text-sm">({{ $duration }} Day *  {{ $car->price }} Dhs)</span> 
                        <span class="col-span-2 text-center text-gray-500"> = {{   $car->price * $duration }} Dhs</span></dt>
                    
                  </dl>
                </div>
              </div>

              


            </div>

        </div>
      </div>
</section>

<script> 
    const button = document.getElementById('button');
        function PrintContent(){
            button.style.display = "none"
            window.print();
            setTimeout(() => {
                button.style.display = "flex";
            }, 100);

        }
</script>

</body>
</html>