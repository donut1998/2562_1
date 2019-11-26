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
                <h1>การจัดการอุปกรณ์ติดตาม</h1>

                <form>

                    <div class="form-group">
                        <label>หมายเลขป้ายแผ่นทะเบียน:</label>
                        <input type="text" name="name" class="form-control" value="" required="">
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="" required="">
                    </div>

                    <button type="submit" class="btn btn-success save-btn">Save</button>

                </form>
                <br />
                <table class="table table-bordered data-table">
                    <thead>
                        <th>หมายเลขป้ายแผ่นทะเบียน</th>
                        <th>Email</th>
                        <th width="200px">Action</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

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

        <script type="text/javascript">
            $("form").submit(function(e) {
                e.preventDefault();
                var name = $("input[name='name']").val();
                var email = $("input[name='email']").val();

                $(".data-table tbody").append("<tr data-name='" + name + "' data-email='" + email + "'><td>" + name + "</td><td>" + email + "</td><td><button class='btn btn-info btn-xs btn-edit'>Edit</button><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");

                $("input[name='name']").val('');
                $("input[name='email']").val('');
            });

            $("body").on("click", ".btn-delete", function() {
                $(this).parents("tr").remove();
            });

            $("body").on("click", ".btn-edit", function() {
                var name = $(this).parents("tr").attr('data-name');
                var email = $(this).parents("tr").attr('data-email');

                $(this).parents("tr").find("td:eq(0)").html('<input name="edit_name" value="' + name + '">');
                $(this).parents("tr").find("td:eq(1)").html('<input name="edit_email" value="' + email + '">');

                $(this).parents("tr").find("td:eq(2)").prepend("<button class='btn btn-info btn-xs btn-update'>Update</button><button class='btn btn-warning btn-xs btn-cancel'>Cancel</button>")
                $(this).hide();
            });

            $("body").on("click", ".btn-cancel", function() {
                var name = $(this).parents("tr").attr('data-name');
                var email = $(this).parents("tr").attr('data-email');

                $(this).parents("tr").find("td:eq(0)").text(name);
                $(this).parents("tr").find("td:eq(1)").text(email);

                $(this).parents("tr").find(".btn-edit").show();
                $(this).parents("tr").find(".btn-update").remove();
                $(this).parents("tr").find(".btn-cancel").remove();
            });

            $("body").on("click", ".btn-update", function() {
                var name = $(this).parents("tr").find("input[name='edit_name']").val();
                var email = $(this).parents("tr").find("input[name='edit_email']").val();

                $(this).parents("tr").find("td:eq(0)").text(name);
                $(this).parents("tr").find("td:eq(1)").text(email);

                $(this).parents("tr").attr('data-name', name);
                $(this).parents("tr").attr('data-email', email);

                $(this).parents("tr").find(".btn-edit").show();
                $(this).parents("tr").find(".btn-cancel").remove();
                $(this).parents("tr").find(".btn-update").remove();
            });
        </script>

</body>

</html>