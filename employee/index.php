<?php include "header.php";
$servername = "localhost";
$username = "root";
$password = "password";
$conn = mysqli_connect($servername, $username, $password);
$employee_count = "SELECT COUNT(employee_id) FROM EMPLOYEE";
$client_count = "SELECT count(client_id) FROM CLIENT";
$branch_count = "SELECT count(branch_id) FROM BRANCH";
$account_count = "SELECT count(account_number) FROM ACCOUNT";
$city_count = "SELECT count(branch_city_id) FROM BRANCH_CITY";
$head_branch = "SELECT branch_city_id FROM BRANCH WHERE branch_is_head_office=1";
mysqli_select_db($conn, '353s');
$emcount = mysqli_fetch_array(mysqli_query($conn, $employee_count))[0];
$clcount = mysqli_fetch_array(mysqli_query($conn, $client_count))[0];
$brcount = mysqli_fetch_array(mysqli_query($conn, $branch_count))[0];
$account = mysqli_fetch_array(mysqli_query($conn, $account_count))[0];
$cicount = mysqli_fetch_array(mysqli_query($conn, $city_count))[0];
$headLocation = mysqli_fetch_array(mysqli_query($conn, $head_branch))["branch_city_id"];
$head_branch_city = "SELECT branch_city FROM BRANCH_CITY WHERE branch_city_id=".$headLocation;
$cityName = mysqli_fetch_array(mysqli_query($conn, $head_branch_city))[0];

$conn->close();



?>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>U-TRUST BANK</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <?php include "menu_profile_quick_info.php";?>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <?php include "sidebar.php"?>

                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
                <div class="title_left">
                    <h3>Banking Summary</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">

                      <button class="btn btn-default" type="button"></button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top tiles -->

            <div class="row tile_count">
                <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Employees</span>
                    <div class="count blue"><?php echo $emcount ?></div>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total Clients</span>
                    <div class="count purple"><?php echo $clcount ?></div>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">Total Branches</span>
                    <div class="count green"><?php echo $brcount ?></div>
                </div>

            </div>

            <div class="row tile_count">
                <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Accounts</span>
                    <div class="count blue"><?php echo $account ?></div>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i>Total Cites</span>
                    <div class="count purple"><?php echo $cicount ?></div>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i>Head Office Located At</span>
                    <div class="count green"><?php echo $cityName ?></div>
                </div>

            </div>
            <!-- /top tiles -->
        </div>
        <hr>


        <!-- /page content -->

        <!-- footer content -->
        <footer>

            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
