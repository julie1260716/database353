<?php include "header.php"?>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
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
        <?php include "top_navigation.php"?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Interac e-Transfer - Send Money</h3>
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
<!--Form Regular-->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Send Money <small>different form elements</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sender">Sender <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="sender" required="required" readonly="readonly" value="John Doe" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="recipient">Recipient <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="recipient" name="recipient" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">With
                                        </label>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" checked name="iCheck"> E-mail
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck"> Phone Number
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" class="flat" name="iCheck"> Account Number
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="from" class="control-label col-md-3 col-sm-3 col-xs-12">From Account </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="from" class="form-control col-md-7 col-xs-12" type="text" name="from_account">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount" class="control-label col-md-3 col-sm-3 col-xs-12">Amount <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="amount" class="form-control col-md-7 col-xs-12" required="required" type="text" name="amount">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Message (optional)</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="message" class="form-control col-md-7 col-xs-12" type="text">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<!-- End of Regular Form                -->
<!--                <div class="row">-->
<!---->
<!--                    <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                        <div class="x_panel">-->
<!--                            <div class="x_title">-->
<!--                                <h2>Send Money</h2>-->
<!--                                <div class="clearfix"></div>-->
<!--                            </div>-->
<!--                            <div class="x_content">-->
<!---->
<!---->
<!--                                <!-- Smart Wizard -->-->
<!--                                <p>Send money to a person or business with an email address or mobile number and a bank account at a participating Canadian financial institution.</p>-->
<!--                                <div id="wizard" class="form_wizard wizard_horizontal">-->
<!--                                    <ul class="wizard_steps">-->
<!--                                        <li>-->
<!--                                            <a href="#step-1">-->
<!--                                                <span class="step_no">1</span>-->
<!--                                                <span class="step_descr">-->
<!--                                              Step 1<br />-->
<!--                                              <small>Enter Information</small>-->
<!--                                          </span>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="#step-2">-->
<!--                                                <span class="step_no">2</span>-->
<!--                                                <span class="step_descr">-->
<!--                                              Step 2<br />-->
<!--                                              <small>Verify Information</small>-->
<!--                                          </span>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="#step-3">-->
<!--                                                <span class="step_no">3</span>-->
<!--                                                <span class="step_descr">-->
<!--                                              Step 3<br />-->
<!--                                              <small>Confirmation</small>-->
<!--                                          </span>-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <div id="step-1">-->
<!--                                        <form class="form-horizontal form-label-left" action="http://www.google.ca" method="get">-->
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="from">Sender <span class="required">*</span>-->
<!--                                                </label>-->
<!--                                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                                    <input type="text" id="from" name = "from" value="Jone Doe" required="required" readonly="readonly" class="form-control col-md-7 col-xs-12">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="to">Recipient <span class="required">*</span>-->
<!--                                                </label>-->
<!--                                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                                    <input type="text" id="to" name="to" required="required" class="form-control col-md-7 col-xs-12">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="amount" class="control-label col-md-3 col-sm-3 col-xs-12">Amount <span class="required">*</span></label>-->
<!--                                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                                    <input id="amount" class="form-control col-md-7 col-xs-12" type="text" name="amount">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Message (optional)</label>-->
<!--                                                <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                                    <input id="message" class="form-control col-md-7 col-xs-12" type="text">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                        </form>-->
<!---->
<!--                                    </div>-->
<!--                                    <div id="step-2">-->
<!--                                        <h2 class="StepTitle">Step 2 Content</h2>-->
<!--                                        <p>-->
<!--                                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu-->
<!--                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
<!--                                        </p>-->
<!--                                        <p>-->
<!--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor-->
<!--                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                    <div id="step-3">-->
<!--                                        <h2 class="StepTitle">Step 3 Content</h2>-->
<!--                                        <p>-->
<!--                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore-->
<!--                                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
<!--                                        </p>-->
<!--                                        <p>-->
<!--                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor-->
<!--                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <!-- End SmartWizard Content -->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

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