<?php include "header.php";

$id = $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "353p";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM EMPLOYEE WHERE employee_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$conn->close();

?>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php include "upper.php"?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Employee Management</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Update Employee</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left input_mask" method="post" action="update_employee_sql.php">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" readonly="readonly" id="inputSuccess2" value="<?php echo $_GET["employee_name"]?>" name="name">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess3" readonly="readonly" value ="<?php echo $_GET["id"]?>" placeholder="Name" name="id">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" value="<?php echo $row['employee_email']?>" name="email">
                                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone" value="<?php echo $row['employee_phone']?>" name="telephone">
                                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Reset Password</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="password" class="form-control" value ="<?php echo $row['employee_password']?>" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Reset Title</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" value="<?php echo $row['employee_title']?>" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Home Address</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" value="<?php echo $row['employee_address']?>" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Level</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="level">
                                                <option value="Staff" selected>Staff</option>
                                                <option value="Manager">Manager</option>
                                                <option value="General Manager of Investment">General Manager of Investment</option>
                                                <option value="General Manager of Insurance">General Manager of Insurance</option>
                                                <option value="General Manager of Banking">General Manager of Banking</option>
                                                <option value="President">President</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Employee Payroll</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" value="<?php echo $row['employee_payroll']?>" name="payroll">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="sick days" value="<?php echo $row['employee_sick_days']?>" name="sick_days">
                                        <span class="fa fa-frown-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess3" placeholder="holidays" value="<?php echo $row['employee_holidays']?>" name="holiday">
                                        <span class="fa fa-fighter-jet form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="branch_id" value="<?php echo $row['employee_branch_id']?>" name="branch_id">
                                        <span class="fa fa-frown-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="date" class="form-control" id="inputSuccess5" placeholder="Start Date" value="<?php echo $row['employee_start_date']?>" name="start_date">
                                        <span class="fa fa-fighter-jet form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-primary">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success" name="UpdateButton">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include "footer_intro.php"?>
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
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="../vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="../vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
