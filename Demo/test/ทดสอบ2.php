<!-- input google map plot  -->
<!DOCTYPE html>
 <html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<title>Directions service</title>
<style>
  /* Always set the map height explicitly to define the size of the div
   * element that contains the map. */
  #map {
    height: 100%;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  #floating-panel {
    position: absolute;
    top: 10px;
    left: 25%;
    z-index: 5;
    background-color: #fff;
    padding: 5px;
    border: 1px solid #999;
    text-align: center;
    font-family: 'Roboto','sans-serif';
    line-height: 30px;
    padding-left: 10px;
  }
</style>
</head>
<body>
<div id="floating-panel">
<b>Start: </b>
<input id="start" type="text"
        placeholder="Enter lat">
<b>End: </b>
 <input id="end" type="text"
        placeholder="Enter lng">
</div>
<div id="map"></div>
<script>
  function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: {lat: 0,  lng:  0}
    });

marker = new google.maps.Marker({
                map:map,
                draggable:true,
                animation: google.maps.Animation.DROP,
                position: {lat: 0,  lng:  0}
            });
    var onChangeHandler = function() {
      DisplayPoint(map);
    };
    //document.getElementById('start').addEventListener('change', onChangeHandler);
    document.getElementById('end').addEventListener('change', onChangeHandler);


  function DisplayPoint(map) {

      var lat = document.getElementById('start').value;
      var lng = document.getElementById('end').value;
      var latLng = new google.maps.LatLng(lat, lng);
      marker.setPosition(latLng);
      map.panTo(latLng);

  }
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSET94G3USezjVA7ScCw07bpxuTBv5kiI&callback=initMap">
</script>