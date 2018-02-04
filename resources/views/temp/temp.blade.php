<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <title>@yield('title')</title>
       
</head>
    <body>

      <ul class="w3-navbar w3-black w3-large">
      <li><a href="" class="w3-hover-blue"><i class="fa fa-amazon fa-lg"></i>goda Dummy </a></li>
        <li><a class="w3-hover-red" href=""><i class="fa fa-home"></i> Home</a></li>
        <li><a class="w3-hover-yellow" href="#"><i class="fa fa-server"></i> My Services</a></li>
        <li><a class="w3-hover-green" href="#"><i class="fa fa-question-circle"></i> Help</a></li>
      
      </li>

      </ul>
      <div class="w3-container">
<br>
<br>
</div>

      <div class="w3-row">
  <div class="w3-container w3-quarter">
  
  <div class="w3-bar-block w3-card-4" id="content">
  <header class="w3-container w3-black">
  <h2>Main Menu</h2>
</header>
    @yield('selpane')
    <footer class="w3-container w3-black">
  <br/>
</footer>
</div>
  </div>
  <div class="w3-container w3-threequarter" >
  <div class="w3-bar-block w3-card-4" id="content">
  <header class="w3-container w3-black">
  <h3>@yield('pagename')</h3>
</header>
<div id="app" >
     @yield('content')</div>
    <footer class="w3-container w3-black">
  <br/>
</footer>
</div>
  </div>
   
  </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>


  @yield('body')
    </body>
    
</html>