<?php include "header.php";
// Create connection
$servername = "localhost";
$username = "root";
$password = "password";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, '353s');

$sql = "SELECT * FROM BRANCH";
$result = mysqli_query($conn, $sql);

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
                            <small>Branch List</small>
                        </h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>All Branches</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">
                                    Clicking branch id shows individual branch that you can update information.
                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Location</th>
                                        <th>City</th>
                                        <th>Telephone</th>
                                        <th>Fax</th>
                                        <th>Opening date</th>
                                        <th>Branch Manager</th>
                                        <th>Head Office</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        $link = "update_branch.php?branch_id=" . $row['branch_id'];
                                        echo "<td><a href='$link'>" . $row['branch_id'] . "</td>";
                                        echo "<td>" . $row['branch_location'] . "</td>";
                                        $sql = "SELECT branch_city FROM BRANCH_CITY WHERE branch_city_id =".$row['branch_city_id'];
                                        $result3 = mysqli_query($conn, $sql);
                                        echo "<td>" . mysqli_fetch_array($result3)['branch_city'] . "</td>";
//                                        echo "<td>" . $row['branch_city_id'] . "</td>";
                                        echo "<td>" . $row['branch_phone'] . "</td>";
                                        echo "<td>" . $row['branch_fax'] . "</td>";
                                        echo "<td>" . $row['branch_opening_date'] . "</td>";
                                        $sql = "SELECT employee_name FROM EMPLOYEE WHERE employee_id =".$row['branch_manager'];
                                        $result2 = mysqli_query($conn, $sql);
                                        $manager_name = mysqli_fetch_array($result2)['employee_name'];
                                        if (empty($manager_name)){
                                            echo "<td> Pending</td>";
                                        }else{
                                            echo "<td>" . $manager_name . "</td>";
                                        }
                                        //Visulize the office
                                        if($row['branch_is_head_office']==1){
                                            echo "<td>YES</td>";
                                        }else{
                                            echo "<td>NO</td>";
                                        }
                                        echo "</tr>";
                                    }
                                    $conn->close();
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