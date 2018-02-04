<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function roomLoad()
    {

        $rooms = Hotel::where('HotelID', '2219905')->first();

        return view('book', ['luxury_rooms' => $rooms->luxury_rooms, 'double_rooms'=> $rooms->double_rooms,
        'normal_rooms'=>$rooms->normal_rooms, 'honeymoon_rooms'=>$rooms->honeymoon_rooms]);
    }

    public function getBack(Request $request)
    {
        $hotel = Hotel::where('id','1')->first();

        $auth = $request->authcode;
        $rooms = $request->rooms;
        $lux = $rooms['luxury'];
        $double = $rooms['double'];
        $noraml = $rooms['normal'];
        $honeymoon = $rooms['honeymoon'];

        if($auth==$hotel->authcode){

            Hotel::where('id', '1')->update([
                'luxury_rooms' => $lux,
                'double_rooms' => $double,
                'normal_rooms' => $noraml,
                'honeymoon_rooms' => $honeymoon
            ]);
            return response('Upadate Successfull');
        }else{
            return response('Not Permited');
        }


    }

    public function loadHotel(){
        $hotel = Hotel::where('id','1')->first();


        return view('help', ['luxury_rooms' => $hotel->luxury_rooms, 'double_rooms'=> $hotel->double_rooms,
        'normal_rooms'=>$hotel->normal_rooms, 'honeymoon_rooms'=>$hotel->honeymoon_rooms, 'target'=>$hotel->target,
        'HotelID'=>$hotel->HotelID, 'authcode'=>$hotel->authcode]);

        
    }

    public function dataUpdate(Request $request){
        $target = $request->target;
        $luxury_rooms = $request->luxury_rooms;
        $double_rooms = $request->double_rooms;
        $normal_rooms = $request->normal_rooms;
        $honeymoon_rooms = $request->honeymoon_rooms;

        Hotel::where('id','1')->update([
            'target' => $target,
            'luxury_rooms' => $luxury_rooms,
            'double_rooms' => $double_rooms,
            'normal_rooms' => $normal_rooms,
            'honeymoon_rooms' => $honeymoon_rooms
        ]);

        return redirect()->back()->with('message', 'Update Successfull');
    }
}
