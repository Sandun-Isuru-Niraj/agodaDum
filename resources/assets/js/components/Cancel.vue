<template>

<div>
    
  <table class="w3-table-all">
          
          <tr>
              <th>Name</th>
              <th>NIC</th>
              <th>Check-IN</th>
              <th>Check-Out</th>
              <th></th>
          </tr>

          <tr v-for="booking in bookings">
              <td>{{booking.name}}</td>
              <td>{{booking.nic}}</td>
              <td>{{booking.checkin}}</td>
              <td>{{booking.checkout}}</td>
              <td><button class="w3-btn w3-red" @click.prevent="deleteBooking($event)" v-bind:id="booking.id">Cancel Booking</button></td>
          </tr>
      </table> 
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
</template>

<script>
export default {
  data(){
      return{
            bookings:[]
      }
  },
  mounted(){
        this.$http.get("/api/loadbooking/")
            .then(function (response){
                
                  this.bookings = response.data.bookings;
                
            })
  },
  methods:{
      viewBooking(){
        

      },
      deleteBooking(){
        		var r = confirm("Are you sure to Cancel Booking?");
				if (r == true) {
                    document.getElementById('id01').style.display='block';
					this.$http.get("/api/cancelbooking/"+event.target.id)
                .then(function(response){

                    console.log(response)
                    document.getElementById('id01').style.display='none';
                document.getElementById('id02').style.display='block';
                    document.location.reload(true);
                });

				} else {
					window.alert("Request Canceled!");
				}
      }
  }
}
</script>

