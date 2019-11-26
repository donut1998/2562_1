<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>จัดการอุปกรณ์ติดตาม</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 570px;
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
                    <a href="#">
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
                <h1>การแจ้งเตือน</h1>


            </div>
        </div>


</body>

</html>