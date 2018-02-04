<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/load',[
   'uses' => 'HotelController@roomLoad'
]);

Route::post('/sendbooking',[
   'uses' => 'BookingController@setBooking'
]);

Route::get('loadbooking',[
   'uses' => 'BookingController@loadBooking'
]);

Route::get('cancelbooking/{id}',[
    'uses' => 'BookingController@cancelBooking'
]);

Route::post('upload',[
    'uses' => 'HotelController@getBack'
]);

Route::get('/loadhotel',[
    'uses' => 'HotelController@loadHotel'
]);

Route::post('update',[
    'uses' => 'HotelController@dataUpdate'
]);