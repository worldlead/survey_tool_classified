<?php
require_once "layouts/header.php";
require_once "db_functions.php";
?>

<body class="">
    <div id="fb-root"></div>
    <div class="container container-wrapper">
        <header class="header">
            <div class="top-box" data-toggle="sticky-onscroll">
                <div class="container">
                    <div class="top-bar color-primary">
                        <div class="container clearfix">
                            <div class="pull-left">
                                <ul class="login-menu clearfix">
                                    <li><a href="#"><i class="fa fa-power-off"></i> Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="header-inner">
                        <div class="container">
                            <div class="row">
                                <div class="logo pull-left pull-sm-up col-sm-6 col-xs-12  text-left">
                                    <a href="home.php">
                                        <img src="assets/img/logo.png" alt="" />
                                        <img src="assets/img/logo_mini.png" alt="" class="mini-logo" />
                                    </a>
                                </div>
                                <div class="col-sm-3" style="float: right; padding-top: 20px;">
                                    <a href="home.php" class="btn btn-primary btn-wide color-primary">Go to Home</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </header>

        <main class="main section-color-primary">
            <div class="container">
                <div class="row" style="margin-top: 50px;">
                    
                    <div class="col-md-12">
                        <div class="widget  widget-box box-container widget-form form-main" id="form2">
                            <div class="widget-header">
                                <h2>Register</h2>
                            </div>
                            <form action="land_add.php" method="post" class="form-additional">
                                
                                <div class="control-group">
                                    <label class="control-label">State</label>
                                    <div class="controls">
                                        <input type="text" name="state" value="" class="form-control" id="inputState" placeholder="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">County</label>
                                    <div class="controls">
                                        <input type="text" name="county" value="" class="form-control" id="inputCounty" placeholder="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Area</label>
                                    <div class="controls">
                                        <input type="text" name="area" value="" class="form-control" id="inputArea" placeholder="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputAPN">APN</label>
                                    <div class="controls">
                                        <input type="text" name="apn" value="" class="form-control" id="inputAPN" placeholder="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Podio Link</label>
                                    <div class="controls">
                                        <input type="text" name="podio_link" value="" class="form-control" id="inputLink" placeholder="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn btn-danger">Register</button>
                                       
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.widget-form-->
                    </div>
                    <!-- /.right side bar -->
                </div>
            </div>
        </main><!-- /.main-part-->

        

        <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
    </div>
    <?php include "layouts/footer.php" ?>