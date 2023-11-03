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
                    </section>
                </div>
            </div>

        </header>
        <main class="main section-color-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="widget widget-box box-container widget-overview hidden-sm  hidden-xs">
                            <div class="widget-header text-uppercase">
                                <h2>Overview</h2>
                            </div>
                            <?php
                            if (isset($_GET['podio'])) {
                                $conn = connectDB();
                                $podioLink = $_GET['podio'];

                                $stmt = $conn->query("SELECT * FROM land_info WHERE podio_link = '" . $podioLink . "'");
                                $row = $stmt->fetch();
                            ?>
                                <h3 class="property-card-title">State:&nbsp;<?php echo $row['state_country']; ?></h3>
                                <h3 class="property-card-title">County:&nbsp;<?php echo $row['county']; ?></h3>
                                <h3 class="property-card-title">Area:&nbsp;<?php echo $row['area']; ?></h3>
                                <h3 class="property-card-title">APN:&nbsp;<?php echo $row['apn']; ?></h3>
                                <h3 class="property-card-title">Podio Link:&nbsp;<?php echo $row['podio_link']; ?></h3>

                            <?php } ?>
                        </div><!-- /. widget-OVERVIEW -->
                        <div class="widget widget-box box-container widget-agent mt-3">
                            <form action="send_url.php" method="post">
                                <input type="hidden" value="<?php echo $row['podio_link']; ?>" name="podio_link">
                                <button type="submit" class="btn btn-primary btn-wide color-primary" name="send_url" value="send_url">Send Survey Link</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </main><!-- /.main-part-->
        <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
    </div>
    <?php include "layouts/footer.php"; ?>