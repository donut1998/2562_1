<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 500px;  /* The height is 400 pixels */
        width: 50%;  /* The width is the width of the web page */
       }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <!-- <h3>My Google Maps Demo</h3> -->
    <!--The div element for the map -->
    <div id="map"></div>
    <script type="text/javascript">
        // Initialize and add the map
        function initMap() {
        // The location of TH
        var TH = {lat: 20, lng: 100};
        $.getJSON("https://miningproject-36b73.firebaseio.com/api.json?fbclid=IwAR3gZUR_uhp6amov6UyepHadLGV_plG2i5tAiBtd1T15aHziPLnnhE8fG0k", function(json) {
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 6, center: TH});
          var current_latitude = json.truck_1.last_pos.lat;
          var current_longtitude = json.truck_1.last_pos.long;

          var truck1 = {lat:current_latitude, lng: current_longtitude};
          var marker1 = new google.maps.Marker({position: truck1, map: map}); //mark
      });
       
        }
    </script>
    
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSET94G3USezjVA7ScCw07bpxuTBv5kiI&callback=initMap">
    </script>
  </body>
</html>