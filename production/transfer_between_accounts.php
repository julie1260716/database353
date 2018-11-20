<?php include "header.php"?>

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
                        <h3>Move Money/Payment </h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <form class="form-horizontal form-label-left" novalidate>
<!--                                    <span class="section">Move Money/Payment</span>-->

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="from">From Account <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12" id="from">
                                            <select class="form-control" id="level">
<!--                                                <option>Choose option</option>-->
                                                <option value="1" selected>1 - Staff</option>
                                                <option value="2">2 - Manager</option>
                                                <option value="3">3 - President</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="to">To Account <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12" id="to">
                                            <select class="form-control" id="level">
                                                <!--                                                <option>Choose option</option>-->
                                                <option value="1" selected>1 - Staff</option>
                                                <option value="2">2 - Manager</option>
                                                <option value="3">3 - President</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount">Amount <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" id="amount" name="amount" required="required" data-validate-minmax="0,1000" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comment">Comment <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="comment" required="required" name="comment" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                            <button id="send" type="submit" class="btn btn-success">Submit</button>
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

<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<script src="../vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
