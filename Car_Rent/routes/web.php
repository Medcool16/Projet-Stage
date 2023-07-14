<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;




// --------------Admin-------------------------
Route::get('/admin', function () {
    return view('Admin.admin_login');
})->name('error_show');

Route::post('/admin','AdminController@loginAdmin')->name('login');

// -----------------------------------------------------------


// ------------------Destroy session------------------
Route::get('/destroy','AdminController@destroy')->name('destroy');

// ------------------------------------------------

// ======================================================================================================================

// ----------------------Dashboard-----------------
Route::get('/dashboard',function(){
    return view('Admin.Dashboard'); 
    });

Route::get('/dashboard','DashController@car_rows');


// ------------------------------------------------


// --------------Cars-------------------------------------

Route::get('/cars',function(){
    return view('Admin.Car');
});

Route::get('/cars','CarController@show')->name('back_car');


Route::get('/download-table', 'CarController@downloadTable')->name('download');

// ================================Add=====================================


Route::get('/add','CarController@viewCarAdd')->name('add_page');

Route::post('/cars','CarController@store_car_data')->name('store_car');


// ================================Update= Delete=====================================

Route::get('/Edit-car/{id}','CarController@send_car_update')->name('send_car_update');

Route::put('/Edit-car/{id}','CarController@update_car')->name('now_update'); // i made an update here don't forget that i removed `id`

Route::delete('/Edit-car/{id}','CarController@remove_car')->name('remove_car');

// ==============================================================================


// --------------------------------------------------------



// --------------Client-------------------------------------

Route::get('/clients',function(){
    return view('Admin.Client');
});

Route::get('/clients','ClientController@show_clients');

// --------------------------------------------------------

// --------------Mark-------------------------------------

Route::get('/marks',function(){
    return view('Admin.Mark');
});

Route::get('/marks','MarkController@show')->name('mark_show');
Route::delete('/marks/{id}','MarkController@remove')->name('remove');


Route::post('/marks','MarkController@store')->name('set');


// --------------------------------------------------------


// --------------Model-------------------------------------

Route::get('/models',function(){
    return view('Admin.Model');
});

Route::get('/models','ModellController@show')->name('model_show');

Route::post('/models','ModellController@store')->name('store');

Route::delete('/models/{id}','ModellController@delete')->name('delete');

// --------------------------------------------------------


// --------------Reservation-------------------------------------

Route::get('/reservations',function(){
    return view('Admin.Reservation');
});

// --------------------------------------------------------


// --------------Fuel-------------------------------------

Route::get('/fuels',function(){
    return view('Admin.Fuel');
});

Route::get('/fuels','FuelController@show_fuels')->name('back_fuel');

Route::post('/fuels','FuelController@store_fuel')->name('store_fuel');

Route::delete('/fuels/{id}','FuelController@remove_fuel')->name('remove_fuel');

// --------------------------------------------------------


// ------------------------Tables--------------------------------------

//----------------------car--------------------
Route::get('/admin/tables','CarController@car_table');

// --------------------------------------------------------------

//-----------------------------------Agency----------------------------
Route::get('/agencies',function(){
    return view('Admin.Agencie');
});

Route::get('/agencies','AgencyController@show_agencies')->name('back_agency');

Route::post('/agencies','AgencyController@store_agency')->name('store_agency');

Route::delete('/agencies','AgencyController@remove_fuel')->name('remove_agency');


//[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[---- CLIENT SIDE ----]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]


Route::get('/','homeController@show_top_cars')->name('homie');



Route::get('/park',function(){
    return view('Client.park');
});


//--------------------Park-------------------
Route::get('/park','parkController@park_show');



//----------------------Register && Login---------------
Route::get('/register',function(){
    return view('Client.register');
})->name('registerClient');


Route::get('/login',function(){
    return view('Client.login');
})->name('logClient');


Route::post('/register','ClientController@register')->name('new_client');

 Route::get('/connect','ClientController@LogClient')->name('Connect_client');



// ------------------Destroy session of client------------------
Route::get('/destroyClient','ClientController@destroyClient')->name('desClient');

// ------------------------------------------------




// --------------------Reservation------------------

Route::get('/reservation',function(){
    return view('Client.reservation');
});

Route::get('/reservation','ReservationController@car_show_reserve');

Route::get('/reservation', 'ReservationController@all')->name('all');


Route::get('/compact','ReservationController@compact')->name('compact');
Route::get('/economy','ReservationController@economy')->name('economy');
Route::get('/SUVs','ReservationController@SUVs')->name('SUVs');
Route::get('/van','ReservationController@van')->name('van');
Route::get('/minivan','ReservationController@minivan')->name('minivan');
Route::get('/covertible','ReservationController@covertible')->name('covertible');
Route::get('/sport','ReservationController@sport')->name('sport');