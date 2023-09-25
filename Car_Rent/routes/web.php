<?php

use App\Models\agency;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/admin', function () {
    return view('Admin.admin_login');
})->name('error_show');

Route::post('/admin','AdminController@loginAdmin')->name('login');

// -----------------------------------------------------------

Route::middleware(['auth.admin'])->group(function () {

// --------------Admin-------------------------



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


Route::get('/clients','ClientController@show_clients')->name('viewClients');
Route::delete('/Clients/{id}','ClientController@remove_client')->name('remove_client');


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

Route::delete('/models/{id}','ModellController@delete')->name('delete_model');

// --------------------------------------------------------


// --------------Reservation-------------------------------------

Route::get('/reservations','ContractController@show_reservation_a')->name('show_reservations');

Route::get('/reservations/{id}','ContractController@pay')->name('pay');

Route::delete('/cancel-reservation/{id}','ContractController@cancel_reservation')->name('cancel_res');







// --------------------------------------------------------


// --------------Fuel-------------------------------------

Route::get('/fuels',function(){
    return view('Admin.Fuel');
});

Route::get('/fuels','FuelController@show_fuels')->name('back_fuel');

Route::post('/fuels','FuelController@store_fuel')->name('store_fuel');

Route::delete('/fuels/{id}','FuelController@remove_fuel')->name('remove_fuel');

// --------------------------------------------------------


});

// ------------------------Hot offers----------------------------------

// Route::get('/hot-offers','OffersController@hot_offer')->name('offeres');

// Route::post('/hot-offers','OffersController@store_offers')->name('store offers');


//[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[---- CLIENT SIDE ----]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]


Route::get('/','homeController@show_top_cars')->name('homie');




//--------------------Park-------------------
// Route::get('/park',function(){
//     return view('Client.park');
// });

Route::get('/park','parkController@park_show')->name('parking');



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


Route::middleware(['auth.client'])->group(function () {

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


            Route::get('/filter','ReservationController@filter')->name('filter');


            Route::get('/Book-{id}','ReservationController@book')->name('book');

            Route::post('/Book','ReservationController@book_info')->name('book_info');



            Route::post('/Reviews','ReviewController@add_review')->name('add_review');
});



// -------------------------------Review-----------------------------------------


Route::get('/Reviews','ReviewController@show_review')->name('review');






// ---------------------------------Contact-------------------------------------

Route::get('/Contact',function(){
    $agency  = agency::where('id',1)->first();
    return view('Client.contact', compact('agency'));
})->name('contact');


// ---------------------------------About------------------------------------


Route::get('/About',function(){
    return view('Client.about');
})->name('about');



//-------------------------Contract----------------------------------------

Route::get('/Invoice-details/{id}','ContractController@showInvoice')->name('invoice');


// --------------------------------------------------------------


// -----------------------------Client profile-----------------------------

Route::get('/profile/{id}','ClientController@profile')->name('viewProfile');

Route::put('profile/{id?}','ClientController@update_profile')->name('update_profile');
// --------------------------------------------------------------