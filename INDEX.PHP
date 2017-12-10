

<head>
  <meta charset="utf-8">
  
  <meta name="description" content="Technology Stack">
     <title>Display House Address on a Map with Weather details using google maps</title>
  <!-- Latest compiled and minified CSS -->
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

  <style>
  body{
    padding-top: 40px;
  }
  </style>

<body data-spy="scroll" data-target="#my-navbar">

  <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="http://akashsharmaynwa-com.stackstaging.com/" class="navbar-brand">Akash Sharma (Back to my Site)</a>
        </div><!-- Navbar Header-->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          
        
          <ul class="nav navbar-nav">
          
          </ul>
        </div>
      </div><!-- End Container-->
    </nav><!-- End navbar -->

    <!-- jumbotron-->
  <style>
    #hello {
   
   position:absolute;
   top:250;
   left:700;
  }
#hello2{

position:absolute;
   top:465;
   left:1080;

}
    </style>

    

    <!-- Feedback-->
    

<!-- call to action -->


<!-- Gallery -->
 
<!-- Footer -->

  <h2 align = "center"> Click on the map to find the address and the weather details. </h2>


 
 

  

 
    <title>Web Mashup: Display Address with Weather Details</title>
    <meta charset="utf-8"/> 
    <script type="text/javascript" src="webmash.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyD8Sz_V_7d74QotmMl-jhYDphNbfH32nlM&callback=initMap" type="text/javascript"></script>  

  <body onload="initMap()">
    <div id="map" align = "center" style="width: 600px; height: 500px;"></div><br/>
    <div id="output">      
  		<textarea id="hello" rows="10" cols="60">
  		</textarea>
  		<br>
  		<button id ="hello2" onclick="clearText()"> Clear </button>
     	<br>
    </div>
     <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
