
        "use strict";

var latitudd='';
navigator.geolocation.watchPosition({caller});
   function geoFindMe() {
   
    var output = document.getElementById("out");
  
    if (!navigator.geolocation){
      output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
      return;
    }
  
    function success(position) {
      latitudd='';
      var latitude  = position.coords.latitude;
      latitudd+=latitude;
      var longitude = position.coords.longitude;
      latitudd+=',';
      latitudd+=longitude;
      output.innerHTML = '<p>Latitud:' + latitude + ' Y Longitud: ' + longitude + '</p>';
  
      
    }
  
    function error() {
      output.innerHTML = "Unable to retrieve your location";
    }
  
    output.innerHTML = "<p>Locating…</p>";
  
    navigator.geolocation.getCurrentPosition(success, error);
  }
       function initMap(posicion) {
 
         const directionsRenderer = new google.maps.DirectionsRenderer();
         const directionsService = new google.maps.DirectionsService();
         const map = new google.maps.Map(document.getElementById("map"), {
           zoom: 7,
           center: {
             lat: 4.570868,
             lng: -74.297333
           
           }
         });
       directionsRenderer.setMap(map);
         directionsRenderer.setPanel(document.getElementById("right-panel"));
         const control = document.getElementById("floating-panel");
         control.style.display = "block";
         map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
 
         const onChangeHandler = function() {
           calculateAndDisplayRoute(directionsService, directionsRenderer);
           
         };
 
         document
           .getElementById("end")
           .addEventListener("click", onChangeHandler);
       }
      
       function calculateAndDisplayRoute(directionsService, directionsRenderer, posicion) {
         var Latitudylongitudgeo=latitudd;
         const end = prompt("Pegue aquí la latitud y longitud de la ruta a seguir.\nRecuerde que la latitud y longitud deben estar separados por una coma.");
         directionsService.route(
           {
             origin: Latitudylongitudgeo,
             destination: end,
             travelMode: google.maps.TravelMode.WALKING
           },
           (response, status) => {
             if (status === "OK") {
               directionsRenderer.setDirections(response);
             } else {
               window.alert("Debes permitir la ubicación y luego seleccionar una ruta. Directions request failed due to " + status);
             }
           }
         );
       }
   
   