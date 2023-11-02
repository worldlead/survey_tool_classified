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
                                    <li><a href="#"><i class="fa fa-list"></i> My listings</a></li>
                                    <li><a href="#"><i class="fa fa-star"></i> My favorites</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> My inquiries </a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> My profile</a></li>
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
                                <div class="col-sm-6" style="float: right; padding-top: 30px;">
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
                    <div class="col-md-4">
                        <div class="properties">
                            <div class="row">
                                <div class="col-12">
                                    <div class="property-card card">
                                        <div class="property-card-header image-box">
                                            <img src="" alt="" class="" />
                                            <div class="budget"><i class="fa fa-star"></i></div>
                                            <a href="" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <!-- <img src="assets/img/plus.png" alt="" class="center-icon" /> -->
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.properties -->
                        </div> <!-- /.properties-->
                    </div><!-- /.center-content -->
                    <div class="col-md-8">
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
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.widget-form-->
                    </div>
                    <!-- /.right side bar -->
                </div>
            </div>
        </main><!-- /.main-part-->

        <footer class="footer">
            <div class="container footer-mask">
                <div class="container footer-contant">
                    <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="logo"><a href="#"><img src="assets/img/logo_white.png" alt="" /></a></div>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="title">
                                <h4>Contact</h4>
                            </div>
                            <ul class="list list-contact  list-news">
                                <li>ClassifiedPlace,
                                    Ilica 345,
                                    HR-10000 Zagreb</li>
                                <li><i class="fa fa-phone"></i> +385 (0)1 123 321</li>
                                <li><i class="fa fa-phone"></i> +385 (0)1 123 322</li>
                                <li><i class="fa fa-envelope"></i> info@my-website.com</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6  hidden-sm hidden-xs">
                            <div class="title">
                                <h4>News</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="title">
                                <h4>Opening hours</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- /.footer-content -->
                <div class="footer-bottom">
                    <div class="container text-right">
                        <span class=""><a href="#">WINTER &#169; 2016</a></span>
                    </div>
                </div><!-- /.footer-bottom -->
            </div>
        </footer>

        <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
    </div>
    <?php include "layouts/footer.php" ?>