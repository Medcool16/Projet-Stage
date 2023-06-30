<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('Homepage');
});




// --------------Admin-------------------------
Route::get('/admin', function () {
    return view('Admin.admin_login');
})->name('error_show');

Route::post('/admin','AdminController@login')->name('login');

// -----------------------------------------------------------


// ------------------Destroy session------------------
Route::get('/','AdminController@destroy')->name('des');

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


Route::get('/cars/add',function(){
    view('Admin.add_car');

})->name('add_car_page');

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