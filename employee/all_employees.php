<?php include "header.php";
// Create connection
$servername = "localhost";
$username = "root";
$password = "password";
$conn = mysqli_connect($servername, $username, $password);
$sql = "SELECT * FROM EMPLOYEE";
mysqli_select_db($conn, '353s');
$result = mysqli_query($conn, $sql);
$conn->close();
?>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php include "upper.php" ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Management
                            <small>Employee List</small>
                        </h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>All Employees</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                    Clicking username shows individual employee that you can update information.
                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Title</th>
                                        <th>Address</th>
                                        <th>Start date</th>
                                        <th>Phone</th>
                                        <th>Level</th>
                                        <th>Payroll</th>
                                        <th>Sick Days</th>
                                        <th>Holidays</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['employee_id'] . "</td>";
                                        $link = "update_employee.php?employee_name=" . $row['employee_name'] . "&id=" . $row['employee_id'];
                                        echo "<td><a href='$link'>" . $row['employee_name'] . "</td>";
                                        echo "<td>" . $row['employee_email'] . "</td>";
                                        echo "<td>" . $row['employee_title'] . "</td>";
                                        echo "<td>" . $row['employee_address'] . "</td>";
                                        echo "<td>" . $row['employee_start_date'] . "</td>";
                                        echo "<td>" . $row['employee_phone'] . "</td>";
                                        echo "<td>" . $row['employee_level'] . "</td>";
                                        echo "<td>" . $row['employee_payroll'] . "</td>";
                                        echo "<td>" . $row['employee_sick_days'] . "</td>";
                                        echo "<td>" . $row['employee_holidays'] . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


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
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>