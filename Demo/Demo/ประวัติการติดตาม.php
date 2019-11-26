<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ประวัติการติดตาม</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 90%;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }

        #wgtmsr {
            width: 200px;
            height: 30px;
        }
    </style>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>เหมืองแม่เมาะ</h3>
            </div>

            <ul class="list-unstyled components">

                <!-- <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-home"></i>
                            แสดงตำแหน่ง
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">แสดงการติดตามทั้งหมด</a>
                        </li>
                        <li>
                            <a href="#">รถคันที่ 1</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="Main.php">
                        <i class=""></i>
                        แสดงตำแหน่งปัจจุบัน
                    </a>
                </li>
                <li>
                    <a href="จัดการอุปกรณ์ติดตาม.php">
                        <i class=""></i>
                        จัดการอุปกรณ์ติดตาม
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class=""></i>
                        ประวัติการติดตาม
                    </a>
                </li>
                <li>
                    <a href="การแจ้งเตือน.php">
                        <i class=""></i>
                        การแจ้งเตือน
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class=""></i>
                        ออกจากระบบ
                    </a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="container">
                <!-- <form class="form-inline" action="#">
                    <label>Select: &nbsp;&nbsp;</label>
                    <select size="1" id="wgtmsr">
                        <option>แสดงการติดตามทั้งหมด</option>
                        <option>รถคันที่ 1 </option>
                    </select>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;&nbsp; </label>
                    <input type="date" name="bday">
                    <button type="submit">Submit</button>
                </form> -->
                <form name="myForm" action="#" onsubmit="return initMap()" method="post">
                    Name: <input type="text" name="fname">
                    <input type="submit" value="Submit">
                </form>
            </div>
            <br>
            <div id="map">
                <script type="text/javascript">
                    function initMap() {
                        // The location of TH
                        var x6 = document.forms["myForm"]["fname"].value;
                        //document.write(typeof x6);
                        var items = [];
                        $.getJSON("https://miningproject-36b73.firebaseio.com/api.json?fbclid=IwAR3gZUR_uhp6amov6UyepHadLGV_plG2i5tAiBtd1T15aHziPLnnhE8fG0k", function(json) {
                            
                            //document.write(x6);
                            
                            for (x in json) {
                                // var x1 = (json[x].pos_logs["2019"]["09"]["22"]);
                                var top = x6;
                                var x1 = (json[x].pos_logs["2019"]["09"]["22"]);
                                document.write(x1);
                                for (x2 in x1) {
                                    var pos_lat = x1[x2].lat;
                                    var pos_long = x1[x2].long;
                                    items.push([pos_lat, pos_long]);
                                }
                            }

                            var TH = {
                                lat: items[items.length - 1][0],
                                lng: items[items.length - 1][1]
                            };

                            var map = new google.maps.Map(
                                document.getElementById('map'), {
                                    zoom: 15,
                                    center: TH
                            });

                            var poly = [];
                            var bounds = new google.maps.LatLngBounds();
                            for (i = 0; i < items.length; i++) {
                                var coords = new google.maps.LatLng(items[i][0], items[i][1])
                                poly.push(coords);
                                bounds.extend(coords);
                            }

                            // var poly = [
                            //   {lat: 18.793098, lng: 98.954033},
                            //   {lat: 18.93596, lng: 98.95503},
                            //   {lat: 18.94596, lng: 98.96503},
                            //   {lat: 18.94596, lng: 98.98503},
                            //   {lat: 18.94596, lng: 99.0503},
                            // ];

                            var truck1_path = new google.maps.Polyline({
                                path: poly,
                                geodesic: true,
                                strokeColor: '#FF0000',
                                strokeOpacity: 1.0,
                                strokeWeight: 3
                            });
                            truck1_path.setMap(map);
                            var last_pos_truck1 = {
                                lat: items[items.length - 1][0],
                                lng: items[items.length - 1][1]
                            };
                            var marker_truck1 = new google.maps.Marker({
                                position: last_pos_truck1,
                                map: map
                            });
                        });
                    }
                </script>
            </div>
        </div>

    </div>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSET94G3USezjVA7ScCw07bpxuTBv5kiI&callback=initMap">
    </script>



</body>

</html>