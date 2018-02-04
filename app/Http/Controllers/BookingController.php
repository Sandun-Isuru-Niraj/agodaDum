<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Hotel;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BookingController extends Controller
{
    public function setBooking(Request $request){

        $booking = new Booking();
        $hotel = Hotel::where('id','1')->first();

        $hotelID = $hotel->HotelID;
        $auth = $hotel->authcode;
        $target = $hotel->target;



        $name = $request->input('name');
        $booking->name = $name;
        $email = $request->input('email');
        $booking->email = $email;
        $checkin = $request->input('checkin');
        $booking->checkin = $checkin;
        $checkout = $request->input('checkout');
        $booking->checkout = $checkout;
        $country = $request->input('country');
        $booking->country = $country;
        $nic = $request->input('nic');
        $booking->nic = $nic;

        $lux = $request->input('lux');
        $booking->luxury = "luxury";
        $double = $request->input('double');
        $booking->double = "double";
        $normal = $request->input('normal');
        $booking->normal = "normal";
        $honeymoon = $request->input('honeymoon');
        $booking->honeymoon = "honeymoon";
        $num_lux = 0;
        $num_double = 0;
        $num_normal = 0;
        $num_honeymoon = 0;

        $num_lux = $request->input('num_lux');
        $booking->lux_num = $num_lux;
        $num_double = $request->input('num_double');
        $booking->double_num = $num_double;
        $num_normal = $request->input('num_normal');
        $booking->normal_num = $num_normal;
        $num_honeymoon = $request->input('num_honeymoon');
        $booking->honeymoon_num = $num_honeymoon;



        $client = new Client([
            'base_uri' => '',
            'timeout' => 10.0,
            'headers' => [
                'Content-Type' => 'application/json'
            ],]);

        $response = $client->request('POST', $target, [
            'json' => [
                'action' => 'reservation',
                'HotelID' => $hotelID,
                'authcode' =>$auth,
                'userData' => [
                    'NIC' => $nic,
                    'Name' => $name,
                    'Country' => $country,
                    'email' => $email
                ],
                'reservation' => [
                    'checkin_date' => $checkin,
                    'checkout_data' => $checkout,
                    'payment' =>''
                ],
                'Rooms' =>[ [
                    "type" => "luxury",
                    "no_of_rooms" => $num_lux
                ],
                [
                    "type" => "double",
                    "no_of_rooms" => $num_double
                ],
                [
                    "type" => "normal",
                    "no_of_rooms" => $num_normal
                ],
                [
                    "type" => "honeymoon",
                    "no_of_rooms" => $num_honeymoon
                ]
            ]]]);


        $booking->save();
        $msg = $response->getBody();
        return redirect()->back()->with('message', 'Booking Successfull');

    }

    public function loadBooking(){
        $bookings = Booking::all();

        return response()->json(['bookings'=>$bookings]);
    }

    public function cancelBooking($id){
        $booking =  Booking::where('id', '=', $id)->first();
        Booking::where('id', '=', $id)->delete();

        $hotel = Hotel::where('id','1')->first();

        $hotelID = $hotel->HotelID;
        $auth = $hotel->authcode;
        $nic = $booking->nic;
        $target = $hotel->target;

        $client = new Client([
            'base_uri' => '',
            'timeout' => 10.0,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],]);

        $response = $client->request('POST', $target, [
            'json' => [
                'action' => 'cancel',
                'HotelID' => $hotelID,
                'authcode' =>$auth,
                'NIC' => $nic
            ]]);

        $msg = $response->getBody();
        return response($msg);
    }



}
