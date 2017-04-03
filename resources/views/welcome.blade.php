<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- bootstrap -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet" >
        <script src="{{ asset('js/jquery-3.2.0.min.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

         <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #33cc33;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #006600;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 3px solid transparent;
      margin-bottom: 25px;
      width: 100%;
      height: 100%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #009933;
  }
  .carousel-inner img {
      /*-webkit-filter: grayscale(90%);*/
      /*filter: grayscale(90%);  make all photos black and white  */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #006600 !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: red;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #cc3300;
      background-color: #009933;
      color: #fff;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #006600;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #006600;
      border: 0;
      font-size: 15px !important;
      letter-spacing: 2px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #009933 !important;
  }

  .navbar-nav li a:hover {
      color: #ff0000 !important;
      font-size: 16px;
  }
  .navbar-nav li.active a {
      color: red !important;
      background-color: #006600 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: green;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #ff3300 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="{{asset('uploads/logos/new-home.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">{{ trans('transwelcome.home') }}</a></li>
        <li><a href="#message">@lang('transwelcome.message') </a></li>
        <li><a href="#gallery">@lang('transwelcome.gallery')</a></li>
        <li><a href="#contact">@lang('transwelcome.contact')</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('transwelcome.programe')
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Bachelor Degree</a></li>
            <li><a href="#">Master Degree</a></li>
            <li><a href="#">Doctor Degree</a></li> 
            <li><a href="#">Associate Degree</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('transwelcome.more')
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Faculty</a></li>
            <li><a href="#">Staff</a></li>
            <li><a href="#">Student</a></li> 
            <li><a href="#">Alumni</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle ="dropdown">@lang('transwelcome.language')
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu languages">
            <li><a href="#" data-value="kh" value="kh">@lang('transwelcome.khmer')</a></li>
            <li><a href="#" data-value="en" value="en">@lang('transwelcome.english')</a></li>
          </ul>
        </li>
          @if (Route::has('login'))
                    @if (Auth::check())
                        <li><a href="{{ url('/home') }}">@trans('transwelcome.home') </a></li>
                    @else
                        <li><a href="{{ url('/login') }}">{{ trans('transwelcome.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('transwelcome.register') }}</a></li>
                    @endif
                
            @endif
          
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('uploads/galleries/graduated_1.jpg') }}" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="{{ asset('uploads/galleries/graduated_10.jpg') }}" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="{{ asset('uploads/galleries/graduated_4.jpg')}}" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="message" class="container text-center">
  <h3>Welcome to National University of Management.</h3>
  <p><em>We are here to share!</em></p>
  <p>People make a university great, so whether you are a prospective student, current student, professor, researcher, staff member, graduate, parent, neighbor, or visitor, your interest and enthusiasm are valued and appreciated.</p>

  <br>
  <h3>Partnership</h3>
  <div class="row">
    <div class="col-sm-2">
      <p class="text-center"><strong>OTEMAE UNIVERSITY</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="{{ asset('uploads/partnerships/otemae.jpg')}}" class="img-circle person" alt="Random Name" width="300" height="300">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>KANAZAWA UNIVERSITY</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="{{ asset('uploads/partnerships/kanazawa.jpg')}}" class="img-circle person" alt="Random Name" width="300" height="300">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>OSAKA UNIVERSITY</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ asset('uploads/partnerships/osaka.jpg')}}" class="img-circle person" alt="Random Name" width="300" height="300">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>PEKING UNIVERSITY</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ asset('uploads/partnerships/peking.jpg')}}" class="img-circle person" alt="Random Name" width="300" height="300">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>PUGET SOUND UNIVERSITY</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ asset('uploads/partnerships/puget.jpg')}}" class="img-circle person" alt="Random Name" width="300" height="300">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    <div class="col-sm-2">
      <p class="text-center"><strong>CGE <br/>UNIVERSITY</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="{{ asset('uploads/partnerships/cge.jpg')}}" class="img-circle person" alt="Random Name" width="300" height="300">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>

  </div>
</div>

<!-- Container (gallery Section) -->
<div id="gallery" class="bg-1">
  <div class="container">
    <h3 class="text-center">EVENT DATES</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">November <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="{{ asset('uploads/galleries/finalexam.jpg')}}" alt="Paris" width="400" height="300">
          <p><strong>Finial Exame</strong></p>
          <p>Friday 27 November 2017</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">More information</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="{{ asset('uploads/galleries/new_year_2016.jpg')}}" alt="New York" width="400" height="300">
          <p><strong>Annual Meeting</strong></p>
          <p>Saturday 28 November 2017</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">More information</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="{{ asset('uploads/galleries/field_trip_it.jpg')}}" alt="field tripe" width="400" height="300">
          <p><strong>Field Trip</strong></p>
          <p>Sunday 29 November 2017</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">More information</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">Ã—</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<script src="{{ asset('js/languages.js') }}"></script>
</body>
</html>
