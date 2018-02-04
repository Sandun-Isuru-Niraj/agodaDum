@extends('temp.temp')

@section('title')
Dashboard
@endsection

@section('body')



@section('pagename')
<i class="fa fa-ban fa-lg"></i> Cancel and View Bookings
@endsection

@section('selpane')

	

 <a href="/" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-stack-overflow fa-lg"></i> Home</a>
 <a href="book" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-book fa-lg"></i> Placing Booking</a>
 <a href="cancel" class="w3-bar-item w3-button w3-hover-black w3-red"><i class="fa fa-ban fa-lg"></i> Cancel Booking</a>
 <a href="help" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-info-circle fa-lg"></i> Help</a>
 
@endsection

@section('content')
<cancel></cancel>


@endsection


@endsection
