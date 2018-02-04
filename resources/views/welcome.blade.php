@extends('temp.temp')

@section('title')
Dashboard
@endsection

@section('body')



@section('pagename')
<i class="fa fa-stack-overflow fa-lg"></i> Rooms and Packages
@endsection

@section('selpane')

	

<a href="/" class="w3-bar-item w3-button w3-hover-black w3-red"><i class="fa fa-stack-overflow fa-lg"></i> Home</a>
<a href="book" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-book fa-lg"></i> Placing Booking</a>
<a href="cancel" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-ban fa-lg"></i> Cancel Booking</a>
<a href="help" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-info-circle fa-lg"></i> Help</a>

  
@endsection

@section('content')
<div>
    <br><br>
<div class="w3-container">

<div class="w3-row">
    <div class="w3-container w3-card-4">

        
            <div class="w3-half w3-container">
                <img src="deluxe_room.jpg" alt="Norway" width="450">
            </div>
                <div class="w3-half w3-container w3-center">
                    <h4><i class="fa fa-bed"></i> Luxury Room</h4>
                    <p><i class="fa fa-area-chart"></i> 26 m²/280 ft²</p>
                    <p><i class="fa fa-usd"></i> From $99</p>
                    <p><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                    <p><center><a href="/book"><button class="w3-btn w3-red">Book Now!</button></a></center></p>
                </div>
       
    </div>

</div>
<br>
<div class="w3-row">

        <div class="w3-container w3-card-4">

            <div class="w3-half w3-container">
                <img src="double_room.jpg" alt="Norway" width="450">
            </div>
            
                <div class="w3-half w3-container w3-center">
                    <h4><i class="fa fa-bed"></i> Double Room</h4>
                    <p><i class="fa fa-area-chart"></i> 28 m²/301 ft²</p>
                    <p><i class="fa fa-usd"></i> From $69</p>
                    <p><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
                    <p><center><a href="/book"><button class="w3-btn w3-red">Book Now!</button></a></center></p>
                </div>
       
    </div>

</div>
<br>
<div class="w3-row">

        <div class="w3-container w3-card-4">

            <div class="w3-half w3-container">
                <img src="single_room.jpg" alt="Norway" width="450">
            </div>
            
                <div class="w3-half w3-container w3-center">
                    <h4><i class="fa fa-bed"></i> Normal Room</h4>
                    <p><i class="fa fa-area-chart"></i> 26 m²/280 ft²</p>
                    <p><i class="fa fa-usd"></i> From $39</p>
                    <p><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
                    <p><center><a href="/book"><button class="w3-btn w3-red">Book Now!</button></a></center></p>
                </div>
       
    </div>

</div>
<br>
<div class="w3-row">

        <div class="w3-container w3-card-4">

            <div class="w3-half w3-container">
                <img src="honeymoon.jpg" alt="Norway" width="450">
            </div>
            
                <div class="w3-half w3-container w3-center">
                    <h4><i class="fa fa-bed"></i> Honeymoon Room</h4>
                    <p><i class="fa fa-area-chart"></i> 26 m²/280 ft²</p>
                    <p><i class="fa fa-usd"></i> From $49</p>
                    <p><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
                    <p><center><a href="/book"><button class="w3-btn w3-red">Book Now!</button></a></center></p>
                </div>
       
    </div>

</div>
</div>
<br>
<br>
</div>


@endsection


@endsection
