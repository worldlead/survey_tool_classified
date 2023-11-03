<?php
require_once "layouts/header.php";
require_once "db_functions.php";
$conn = connectDB();
?>
<style>
    td {
        white-space: pre-wrap;
        word-wrap: break-word;
        max-width: 300px;
    }
</style>

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
                                <div class="col-sm-3" style="float: right; padding-top: 30px;">
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
                                <!-- <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg> 20%
                                </div> -->
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="stats-type mb-1">Total Sell Price</h3>
                                <h4 class="stats-figure" id="total_sell_price"></h4>
                                <!-- <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                    </svg> 5%
                                </div> -->
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="stats-type mb-1">Profit ratio</h3>
                                <h4 class="stats-figure" id="profit_ratio"></h4>
                                <!-- <div class="stats-meta">Open</div> -->
                            </div><!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="widget widget-box box-container">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="stats-type mb-1">Counts</h3>
                                <h4 class="stats-figure" id="count"></h4>
                                <!-- <div class="stats-meta">New</div> -->
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
                                <div class="chart-container">
                                    <canvas id="canvas-linechart"></canvas>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div>
                </div><!--//container-fluid-->
                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-6">
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
                                <div class="row" style="overflow: auto;">
                                    <div class="chart-container" style="min-width: 800px; ">
                                        <canvas id="canvas-barchart"></canvas>
                                    </div>
                                </div>
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
                    <div class="col-6 col-lg-6">
                        <div class="widget widget-box box-container">
                            <div class="widget-header text-uppercase">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h3 class="app-card-title">Notes</h3>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Note</th>
                                        </tr>
                                    </thead>
                                    <tbody id="display_notes">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- /.main-part-->
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