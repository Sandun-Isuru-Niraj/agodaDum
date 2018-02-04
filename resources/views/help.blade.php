@extends('temp.temp')

@section('title')
Dashboard
@endsection

@section('body')



@section('pagename')
<i class="fa fa-info-circle fa-lg"></i> Help and Details
@endsection

@section('selpane')

	

<a href="/" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-stack-overflow fa-lg"></i> Home</a>
<a href="book" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-book fa-lg"></i> Placing Booking</a>
<a href="cancel" class="w3-bar-item w3-button w3-hover-black"><i class="fa fa-ban fa-lg"></i> Cancel Booking</a>
<a href="help" class="w3-bar-item w3-button w3-hover-black w3-red"><i class="fa fa-info-circle fa-lg"></i> Help</a>

  
@endsection

@section('content')
@if(session()->has('message'))
      <div class="w3-container w3-green w3-card-8">
        <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">x</span>
          {{ session()->get('message') }}
      </div>
    @endif
  <div>

      <div class="w3-container">
          <div class="w3-row">
              <h4>Configurations</h4>
              <table class="w3-table-all">

                  <tr>
                      <td><b>Hotel ID:</b></td>
                      <td>{{$HotelID}}</td>
                  </tr>
                  <tr>
                      <td><b>Auth Code:</b></td>
                      <td>{{$authcode}}</td>
                  </tr>
                  <tr>
                      <td><b>URL :</b></td>
                      <td>http://agoda.morasquad.me/api/upload</td>
                  </tr>
              </table>
              <br>
              <form action="{{route('update')}}" method="post">

            <table class="w3-table-all">

                  <tr>
                      <td><b>Target URL:</b></td>
                      <td><input class="w3-input w3-border" type="text" name="target" value="{{$target}}"></td>
                  </tr>
                  <tr>
                      <th><b>No of Rooms</b></th>
                      <th></th>
                  </tr>
                  <tr>
                      <td><b>Luxury Rooms :</b></td>
                      <td><input class="w3-input w3-border" type="number" name="luxury_rooms" value="{{$luxury_rooms}}"></td>
                  </tr>
                  <tr>
                      <td><b>Double Rooms :</b></td>
                      <td><input class="w3-input w3-border" type="number" name="double_rooms" value="{{$double_rooms}}"></td>
                  </tr>
                  <tr>
                      <td><b>Noraml Rooms :</b></td>
                      <td><input class="w3-input w3-border" type="number" name="normal_rooms" value="{{$normal_rooms}}"></td>
                  </tr>
                  <tr>
                      <td><b>Honeymoon Rooms :</b></td>
                      <td><input class="w3-input w3-border" type="number" name="honeymoon_rooms" value="{{$honeymoon_rooms}}"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><button class="w3-btn w3-hover-black" onclick="document.getElementById('id01').style.display='block'">Update</button></td>
                  </tr>
              </table>
              {{csrf_field()}}
              </form>
          </div>
      </div>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container w3-center">
<br><br>
      <h4>Please Wait..</h4>
      <img src="spinner.gif" alt="" class="src">
    </div>
  </div>
</div>
<div id="id02" class="w3-modal">
  <div class="w3-modal-content">

      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <div class="w3-panel w3-green">
  <h3>Success!</h3>
  <p>Your Booking is Cancelled.</p>
</div>
    </div>

</div>
  </div>





@endsection


@endsection
