<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('cancel', function(){
    return view('cancel');
});

Route::get('help', [
    'uses' => 'HotelController@loadHotel',
    'as' => 'help'
    ]);

Route::post('sendbooking',[
    'uses' => 'BookingController@setBooking',
    'as' => 'sendbooking'
 ]);

 Route::get('book',[
    'uses' => 'HotelController@roomLoad',
    'as' => 'book'
 ]);

 Route::post('update',[
    'uses' => 'HotelController@dataUpdate',
    'as' => 'update'
 ]);