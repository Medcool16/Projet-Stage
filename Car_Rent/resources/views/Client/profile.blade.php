@extends('master.Homepage')

@section('title')
    profile
@endsection

@section('content')
    <section class="animated">

    <hr class="h-px my-3 bg-gray-200 border-0">
    <span class="text-white text-3xl font-bold" style="margin-left: 20vh;">Profile</span>
    <hr class="h-px my-3 bg-gray-200 border-0">


    <div class="flex justify-center space-x-2">
        <div class="flex flex-col" style="width: 30%; height: 60vh;">
            <span class="ml-4 mt-4 text-2xl text-white font-thin">Profile Information</span>
            <span class="ml-4 mt-4 text-gray-400 font-thin">Update your account's profile information and email adress</span>
        </div>

        <div class="border-l-2 border-gray-700 pt-4 space-y-4 text-white " style="width: 50%; height: 90vh; background-color: #6c626224;">

            <form action="{{ route('update_profile',$client->id) }}" class="text_animation" method="POST">
                @csrf
                @method('PUT')



                @if(session('error'))
                    <div class="p-4 mb-4 text-sm text-center mx-4 rounded-lg bg-gray-800 text-red-400">
                    {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="p-4 mb-4 text-sm text-center mx-4 rounded-lg bg-gray-800 text-green-400">
                    {{ session('success') }}
                    </div>
                @endif

                <span class="font-bold text-2xl mx-3 text-center">Username</span>
                <div class="w-96 px-3">
                    <label class="block tracking-wide text-white text-grey-darker text-xs font-thin mb-2">Update Username </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white border bg-transparent rounded-sm py-3 px-4" value="{{ $client->username }}" name="new_username" type="text" >
                </div>
                ----------------------------------------------------------------------------------------------------------------------
                <span class="font-bold text-2xl mx-3 text-center">Password</span>
                <div class="w-96 px-3">
                    <label class="block tracking-wide text-white text-grey-darker text-xs font-thin mb-2">old password</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white border bg-transparent rounded-sm py-3 px-4" name="old_password" type="password" >
                </div>

                <div class="w-96 px-3">
                    <label class="block tracking-wide text-white text-grey-darker text-xs font-thin mb-2">new password</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white border bg-transparent rounded-sm py-3 px-4" name="new_password" type="password" >
                </div>

                <div class="w-96 px-3">
                    <label class="block tracking-wide text-white text-grey-darker text-xs font-thin mb-2">Confirm password</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white border bg-transparent rounded-sm py-3 px-4" name="confirm_password" type="password" >
                </div>

                ----------------------------------------------------------------------------------------------------------------------
                <span class="font-bold text-2xl mx-3 text-center">Email</span>
                <div class="w-96 px-3">
                    <label class="block tracking-wide text-white text-grey-darker text-xs font-thin mb-2">Update Email</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-white border bg-transparent rounded-sm py-3 px-4" value="{{ $client->email }}" name="new_email" type="text" >
                </div>

                <div class="my-3 mx-3">
                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Save</button>
                </div>
            </form>
        </div>
    </div>
    <hr class="h-px my-3 bg-gray-200 border-0">

    
    <div class="flex justify-center space-x-2">
        <div class="flex flex-col" style="width: 30%; height: 60vh;">
            <span class="ml-4 mt-4 text-2xl text-white font-thin">Reservation History</span>
            <span class="ml-4 mt-4 text-gray-400 font-thin">Check out all your history reservation of cars in our site</span>
        </div>

        <div class="border-l-2 border-gray-700 pt-4 space-y-4 text-white " style="width: 50%; height: ; background-color: #6c626224;">
            <span class="font-bold text-2xl mx-3 text-center">Reservations : <span class="font-thin">({{ $nbr_res }})</span></span>
            @foreach ($history as $h)
                @if ($h->isPaid)
                <div class="flex p-4 space-x-3 mb-4 text-sm mx-3 rounded-sm bg-gray-800 text-blue-400 hover:bg-gray-700" role="alert">
                    <div class="border rounded-full p-1 bg-blue-500"><img src="{{ asset('assets/check2.svg') }}" class="invert"></div>
                    <div class="">
                        <span class="text-white font-bold">Car details :</span>
                        @foreach ($car as $c)
                            @if ($c->id === $h->id_car)

                                <span class=" ">{{ $c->color }}</span>

                                @foreach ($mark as $t)
                                    @if ($c->id_marque == $t->id)
                                        <span class=" ">{{ $t->mark_name }}</span>
                                    @endif
                                @endforeach

                                <span class=" ">{{ $c->type }}</span>

                                @foreach ($model as $m)
                                    @if ($c->id_model == $m->id)
                                        <span class=" ">{{ $m->model_name }}</span>
                                    @endif
                                @endforeach


                            @endif
                        @endforeach
                    </div>
                  </div>
                @else
                <div class="flex p-4 mb-4 text-sm mx-3 space-x-3  rounded-sm  bg-gray-800 text-yellow-400 hover:bg-gray-700" role="alert">
                    <div class="border rounded-full p-1 bg-red-400"><img src="{{ asset('assets/x-lg.svg') }}" class="invert"></div>
                    <div class="">
                        <span class="text-white font-bold">Car details :</span>
                        @foreach ($car as $c)
                            @if ($c->id === $h->id_car)

                                <span class=" ">{{ $c->color }}</span>

                                @foreach ($mark as $t)
                                    @if ($c->id_marque == $t->id)
                                        <span class=" ">{{ $t->mark_name }}</span>
                                    @endif
                                @endforeach

                                <span class=" ">{{ $c->type }}</span>

                                @foreach ($model as $m)
                                    @if ($c->id_model == $m->id)
                                        <span class=" ">{{ $m->model_name }}</span>
                                    @endif
                                @endforeach


                            @endif
                        @endforeach
                    </div>
                  </div>
                @endif
            @endforeach
        </div>
    </div>

    </section>
@endsection




@section('style')
    <style>

    </style>
@endsection
