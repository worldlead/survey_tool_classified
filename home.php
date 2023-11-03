<?php
require_once "layouts/header.php";
require_once "db_functions.php";

?>
<script type="text/javascript">
    window.onload = function() {
        // Check if the query parameter is present
        var showAlert = <?php echo isset($_GET['showAlert']) ? 'true' : 'false'; ?>;
        if (showAlert) {
            alert("Survey Link sent successfully!");
        }
    };
</script>

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
                                    <a href="chart.php" class="btn btn-primary btn-wide color-primary">Go to Charts</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </header>

        <main class="main section-color-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties" style="margin-top: 50px;">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="property-card card">
                                        <div class="property-card-header image-box" style="background-color:aqua">
                                            <div>
                                                <h4 class="text-center" style="margin-top: 40px;">Register New Item</h4>
                                            </div>
                                            <div class="budget"><i class="fa fa-star"></i></div>
                                            <a href="new_land_register.php" class="property-card-hover">

                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $conn = connectDB();
                                $places = Read_record($conn, "land_info", "");
                                foreach ($places as $place) {


                                ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="property-card card">
                                            <div class="property-card-box card-box card-block">
                                                <h6 class="property-card-title">State:&nbsp;<?php echo $place['state_country']; ?></h6>
                                                <h6 class="property-card-title">County:&nbsp;<?php echo $place['county']; ?></h6>
                                                <h6 class="property-card-title">Area:&nbsp;<?php echo $place['area']; ?> Acres</h6>
                                                <h6 class="property-card-title">APN:&nbsp;<?php echo $place['apn']; ?></h6>
                                                <p class="property-card-title">Podio Link:&nbsp;<?php echo $place['podio_link']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div><!-- /.properties -->
                            <div class="row">
                                <div class="col-sm-4" style="float: right;">
                                    <a href="send_url.php?send=true" class="btn btn-primary btn-wide color-primary" name="send_url" value="send_url" style="width: 50%;">Send Survey Link</a>
                                </div>
                            </div>
                        </div> <!-- /.properties-->
                    </div><!-- /.center-content -->
                </div>
            </div>
        </main><!-- /.main-part-->
        <!-- <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a> -->
    </div>
    <?php include "layouts/footer.php" ?>