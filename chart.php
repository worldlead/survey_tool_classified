<?php
require_once "layouts/header.php";
require_once "db_functions.php";
$conn = connectDB();
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
                                    <a href="index.html">
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

        <main class="main section-color-primary pt-3">
            <div class="container" style="margin-top: 30px; padding: 30px;">
                <div class="row g-4 mb-4">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="property-card-title">Total Buy Price</h3>
                                <h4 class="" id="total_buy_price"></h4>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg> 20%
                                </div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="stats-type mb-1">Total Sell Price</h3>
                                <h4 class="stats-figure" id="total_sell_price"></h4>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                    </svg> 5%
                                </div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="stats-type mb-1">Profit ratio</h3>
                                <h4 class="stats-figure" id="profit_ratio"></h4>
                                <div class="stats-meta">
                                    Open</div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="stats-type mb-1">Contracts</h3>
                                <h4 class="stats-figure">6</h4>
                                <div class="stats-meta">New</div>
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                </div><!--//row-->
                <div class="row g-4 mb-4">
                    <div class="col-6 col-md-6">
                        <div class="widget widget-box box-container">
                            <div class="widget-header text-uppercase">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h3 class="app-card-title">Total</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="mb-3 d-flex">
                                    <select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
                                        <option value="1" selected>This week</option>
                                        <option value="2">Today</option>
                                        <option value="3">This Month</option>
                                        <option value="3">This Year</option>
                                    </select>
                                </div>
                                <div class="chart-container">
                                    <canvas id="canvas-barchart-total"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="widget widget-box box-container">
                            <div class="widget-header text-uppercase">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h3 class="app-card-title">Trend</h3>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="mb-3 d-flex">
                                    <select class="form-select form-select-sm ms-auto d-inline-flex w-auto">
                                        <option value="1" selected>This week</option>
                                        <option value="2">Today</option>
                                        <option value="3">This Month</option>
                                        <option value="3">This Year</option>
                                    </select>
                                </div>
                                <div class="chart-container">
                                    <canvas id="canvas-linechart"></canvas>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>
                </div><!--//container-fluid-->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-lg-12">
                        <div class="widget widget-box box-container">
                            <div class="widget-header text-uppercase">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h3 class="app-card-title">Buy/Sale</h3>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body p-3 p-lg-4">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <?php
                                        $rows = Read_record($conn, "land_info", "");
                                        ?>
                                        <label class="form-label" for="area_select">Select an area</label>
                                        <select class="form-control" id="area_select" style="background-color: aliceblue;">
                                            <?php
                                            foreach ($rows as $row) {
                                                echo "<option value='" . $row['podio_link'] . "'>" . $row['county'] . ", " . $row['state_country'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="chart-container">
                                        <canvas id="canvas-barchart"></canvas>
                                    </div>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
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
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>