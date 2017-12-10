
var username = "akashynwa1";
var map;
var marker;
var lat;
var lng;

function initMap() {   //function for the map to be intialized
    var contents = '<div id="display">' + 'address and weather information' + '</div>';
	var infowindow= new google.maps.InfoWindow({
                 content: contents,
                 
 });
	var geocoder=new google.maps.Geocoder;
	map = new google.maps.Map(document.getElementById('map'), {
	    center: {lat: 32.75, lng: -97.13}, //specified lon and lat//
	    zoom: 17
 });
	
	
	google.maps.event.addListener(map, 'click', function(event) {   ////Initialize a mouse click event on map which then calls reversegeocode function
		    reversegeocode(event.latLng, map, geocoder,infowindow);  // calling the reverse geo code function
	
 });
	
}

function reversegeocode(loc,map, geocoder,infowindow){  // 
	 
	geocoder.geocode({'location': loc}, function(value, status) {
	   if(marker){
	      marker.setMap(null);
	   }
	   marker = new google.maps.Marker({
	          position: loc,
	          map: map
 });     	 
	   infowindow.open(map, marker);
	   displayResult(loc, value[0].formatted_address);  
 });
	
}
 
function displayResult (loc, address) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
    if (request.readyState == 4) {
           var temperature = request.responseXML.getElementsByTagName("temperature")[0].childNodes[0].nodeValue;  /// to get the weather conditions in xml format:
           var clouds = request.responseXML.getElementsByTagName("clouds")[0].childNodes[0].nodeValue;
           var windSpeed = request.responseXML.getElementsByTagName("windSpeed")[0].childNodes[0].nodeValue;
        document.getElementById("display").innerHTML = "<br/> Address:" + address + "<br/> Temperature (degrees) :"+ temperature + " <br/> Clouds (%): " + clouds + "<br/> WindSpeed (mph): " + windSpeed;    
        document.getElementById("hello").innerHTML  += "\n Weather conditions for the clicked address  "+ address + " are Temperature (C): " + temperature + "  Clouds: " + clouds + "  WindSpeed (mph): " + windSpeed;    
 }
 
 };
     lat = loc.lat();
     lng = loc.lng();
    
    request.open("GET", "http://api.geonames.org/findNearByWeatherXML?lat="+lat+"&lng="+lng+"&username="+username, true);

    request.send();
}

function clearText(){   //to clear the text
	 document.getElementById("hello").innerHTML = " ";
}

