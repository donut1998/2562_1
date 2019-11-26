<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ระบบระบุตำแหน่งยานพาหนะ</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Our Custom CSS -->
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
    <!-- GoogleAPI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                    <a href="ประวัติการติดตาม.php">
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
                <form>
                    <div class="form-group">
                        <label for="sel1">Select: &nbsp;</label>
                        <select size="1" id="wgtmsr">
                            <option>แสดงการติดตามทั้งหมด</option>
                            <option>รถคันที่ 1</option>
                        </select>
                        <br>
                    </div>
                </form>
            </div>
            <div id="map">
                <script type="text/javascript">
                    // Initialize and add the map
                    function initMap() {
                        // The location of TH
                        var TH = {
                            lat: 20,
                            lng: 100
                        };
                        $.getJSON("https://miningproject-36b73.firebaseio.com/api.json", function(json) {
                            var map = new google.maps.Map(
                                document.getElementById('map'), {
                                    zoom: 6,
                                    center: TH
                                });
                            var current_latitude = json.truck_1.last_pos.lat;
                            var current_longtitude = json.truck_1.last_pos.long;

                            var truck1 = {
                                lat: current_latitude,
                                lng: current_longtitude
                            };
                            var marker1 = new google.maps.Marker({
                                position: truck1,
                                map: map
                            }); //mark
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
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSET94G3USezjVA7ScCw07bpxuTBv5kiI&callback=initMap">
    </script>
</body>

</html>