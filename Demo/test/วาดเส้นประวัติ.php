<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 500px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <!-- <h3>My Google Maps Demo</h3> -->
    <!--The div element for the map -->
    
    <div>
        <form action="/action_page.php">
        Date:
        <input type="date" name="bday">
        <input type="submit" value = "ค้นหา">
      </form>
    </div>
    <div id="map"></div>
    <script type="text/javascript">
        // Initialize and add the map
        function initMap() {
        // The location of TH
        var TH = {lat: 20, lng: 100};
        var items = [];
        $.getJSON("https://miningproject-36b73.firebaseio.com/api.json?fbclid=IwAR3gZUR_uhp6amov6UyepHadLGV_plG2i5tAiBtd1T15aHziPLnnhE8fG0k", function(json) 
        {
          var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 6, center: TH});
            var truck1 = {lat:18.94596, lng: 99.0503};
            var marker1 = new google.maps.Marker({position: truck1, map: map});
          for(x in json){
            var x1 = (json[x].pos_logs["2019"]["09"]["22"]);
            for(x2 in x1){
              var pos_lat = x1[x2].lat;
              var pos_long = x1[x2].long;
              items.push([pos_lat,pos_long]);
            }
          }

          // var poly = [];
          // var bounds = new google.maps.LatLngBounds();
          // for (i = 0; i < items.length; i++) {
          //   var coords = new google.maps.LatLng(items[i][0], items[i][1])
          //   poly.push(coords);
          //   bounds.extend(coords);
          // }

          var poly = [
            {lat: 18.793098, lng: 98.954033},
            {lat: 18.93596, lng: 98.95503},
            {lat: 18.94596, lng: 98.96503},
            {lat: 18.94596, lng: 98.98503},
            {lat: 18.94596, lng: 99.0503},
          ];

          var truck1_path = new google.maps.Polyline({
              path: poly,
              geodesic: true,
              strokeColor: '#FF0000',
              strokeOpacity: 1.0,
              strokeWeight: 3
          });
          truck1_path.setMap(map); 
        });
        }
    </script>
    
   
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSET94G3USezjVA7ScCw07bpxuTBv5kiI&callback=initMap">
    </script>
  </body>
</html>