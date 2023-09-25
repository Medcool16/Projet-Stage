@extends('master.Homepage')

@section('title')
    Book
@endsection

@section('content')
<section style="background-color:rgba(128, 128, 128, 0.333);">
    
    <div>
        <h1 class=" mt-4 text-3xl font-extrabold leading-none tracking-tight text-center md:text-5xl lg:text-5xl text-white" style="margin-bottom: 50px">Reservation</h1>
    </div>

    <div class="flex test">            
    <div class="flex items-start justify-center" style="width: 45%; height: 40vh; margin-right: -35px">
        <div class="relative flex mx-4 my-2 flex-col border hover:bg-gray-600 transition duration-700 ease-in-out  bg-transparent bg-clip-border text-gray-100 shadow-md" >
            <div class="flex items-center justify-center mx-2 my-2">
                @foreach ($mark as $j)
                    @if ($car->id_marque == $j->id)
                    <h5 class="text-3xl text-white text-center font-semibold tracking-tight"> {{ $j->mark_name }}</h5>
                    @endif
                @endforeach
            </div>
            <div class="relative m-0 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-100 shadow-none">
              <img
                src="{{ asset('uploads/'. $car->image) }}"
                class="w-96 h-48 object-contain rounded-t-lg"
              />
            </div>
            <div class="p-6">
              
            </div>
            <div class="flex justify-center">
                <div class="absolute bottom-0 mx-1">
                    <a href="#" class="border px-2 text-white font-thin">{{ $car->type }}</a>
                    <a href="#" class="border px-3 text-white font-thin">{{ $car->gear_box }}</a>
                    <a href="#" class="border px-4 text-white font-thin">{{ $car->nbr_person }} Passangers</a>
                    @foreach ($fuel as $f)
                        @if ($car->id_carburant == $f->id)
                        <a href="#" class="border px-3 text-white font-thin">{{ $f->fuel_type }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
          </div>
          
    
    
        </div>

        <div class="flex-col space-y-2 p-4 rounded-lg border" style="width: 40%; ">
        <form action="{{ route('book_info') }}" method="POST">
            @csrf
            <input type="hidden" name="id_car" value="{{ $car->id }}">
            <input type="hidden" name="id_member" value="{{ session('member') }}">
            <input type="hidden" name="isPaid" value=0>
        <div class=" flex items-center flex-col space-y-2 rounded-lg" style="height: 30vh;">

            <div class="-mx-3 mt-4 md:flex mb-2">
    
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">Start location</label>
                        <input class="appearance-none block w-full bg-grey-lighter text-white bg-transparent py-3 px-4" name="start_location" type="text" placeholder="Start location" required>
                    </div>
    
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">Start time</label>
                        <input class="appearance-none block w-full bg-grey-lighter text-white bg-transparent py-3 px-4" name="start_time" type="time" placeholder="Start time" required>
                    </div>
    
    
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">Start date</label>
                        <input class="appearance-none block w-full bg-grey-lighter text-white bg-transparent py-3 px-4" name="start_date" type="date" placeholder="start date" required>
                    </div>
            </div>
    
            <div class="-mx-3 md:flex mb-2 mt-4">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">End location</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white bg-transparent py-3 px-4" name="end_location" type="text" placeholder="end location" required>
                </div>
    
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">End time</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white bg-transparent py-3 px-4" name="end_time" type="time" placeholder="end time" required>
                </div>
    
    
                <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">End date</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white bg-transparent py-3 px-4" name="end_date" type="date" placeholder="end date" required>
                </div>
            </div>
            
    
        </div>
        
        <div class=" flex  flex-col space-y-2 rounded-lg" style="height: 80vh; background: #ffffff11;">
            <h1 class="text-2xl font-thin text-white text-center">Driver details</h1>
            <div class="flex justify-center space-x-1">
                <div class="c1">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">First Name</label>
                    <input class="appearance-none block w-full bg-grey-lighter border text-white bg-transparent py-3 px-4 mb-3" name="customer_first_name" type="text" placeholder="Jane" required>
                  
                </div>
                <div class="c1">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">Last Name</label>
                  <input class="appearance-none block bg-grey-lighter text-white bg-transparent py-3 px-4 w-full" name="customer_last_name" type="text" placeholder="Doe" required>
                </div>
              </div>
              
              <div class="flex justify-center space-x-1">
                <div class="c1">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">ID</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border text-white bg-transparent py-3 px-4 mb-3" name="customer_id" type="text" placeholder="P9485***" required>
                  
                </div>
                <div class="c1">
                    <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2">Phone</label>
                    <input class="appearance-none block bg-grey-lighter text-white bg-transparent py-3 px-4 w-full" name="client_phone" type="text" placeholder="phone number" required>
                </div>
              </div>

                          
              <div class="">
                  <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2 ml-3">Email</label>
                <div class="flex justify-center flex-col items-center">
                  <input class="appearance-none block bg-grey-lighter text-white bg-transparent py-3 px-4 mb-3" style="width: 96%" name="customer_email" type="text" placeholder="example@gmail.com" required>
                </div>
              </div>

              <div class="">
                  <label class="block uppercase tracking-wide text-white text-grey-darker text-xs font-bold mb-2 ml-3">More information <span class="font-thin">(optional)</span></label>
                <div class="flex justify-center flex-col items-center">
                    <textarea rows="4" class="block p-2.5 text-sm text-white bg-transparent border  focus:ring-red-500 focus:border-red-500 " name="more_info" style="width: 96%" placeholder="More informations..."></textarea>
                </div>
              </div>

            <div style="width: 96%" class="flex justify-center">
                <div class="flex items-center p-4 mb-4 text-sm text-red-400 rounded-lg bg-gray-800" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <span class="font-medium">Note!</span> You must be 20 and above to reserve this car !
                    </div>
                  </div>
            </div>
            <div class="justify-center flex">
                <button type="submit" onclick="return confirm('Are you sure all this information is correct !')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Checkout</button>
            </div>
        </div>
    
    </form>
    </div>



</div>

</section>
@endsection


@section('style')
    <style>
        .c1 {
            display: inline-block;
            width: 48%;
        }
    </style>
@endsection
