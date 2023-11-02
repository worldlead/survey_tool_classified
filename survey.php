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
                                <a href="#">
                                    <img src="assets/img/logo.png" alt="" />
                                    <img src="assets/img/logo_mini.png" alt="" class="mini-logo" />
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </header>
        <main class="main section-color-primary">
            <div class="container">
                <section class="top-title">
                    <ul class="breadcrumb">
                        <li class="item"><a href="#"> Home </a></li>
                        <li class="item"> Listing Preview </li>
                    </ul>
                    <h1 class="h-side-title page-title page-title-big text-color-primary">Black Field</h1>
                </section> <!-- /. content-header -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="widget widget-box box-container widget-property">
                            <div class="property-slider-box">
                                <div id="property-slider" class="property-slider carousel slide" data-ride="carousel">
                                    <!-- Content -->
                                    <div class="carousel-inner" role="listbox">
                                        <!-- Slide 1 -->
                                        <div class="item active">
                                            <img src="assets/img/patterns/bg-a-farm-l.jpg" alt="Sunset over beach" />
                                        </div>
                                        <!-- Slide 2 -->
                                        <div class="item">
                                            <img src="assets/img/patterns/bg-lavender.jpg" alt="Rob Roy Glacier" />
                                        </div>
                                        <!-- Slide 3 -->
                                        <div class="item">
                                            <img src="assets/img/patterns/full-bg-road.jpg" alt="Longtail boats at Phi Phi" />
                                        </div>
                                    </div>
                                    <!-- Previous/Next controls -->
                                    <a class="left carousel-control" href="#property-slider" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#property-slider" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div class="widget-header widget-title text-uppercase">
                                    <h2>Listing Description</h2>
                                </div>
                                <div class="widget-content wide-p">
                                    <p class='clearfix'>
                                        <img src="assets/img/3_bed_floor_plan.png" class="pull-right-img" alt="" />
                                        This is simply dummy text of the printing and typesetting industry. That has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages. This is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /. widget-body -->
                    </div><!-- /.center-content -->
                    <div class="col-md-3">
                        <div class="widget widget-box box-container widget-overview hidden-sm  hidden-xs">
                            <?php 
                            if (!isset($_GET['validator'])) {
                            ?>
                            <div class="widget-header text-uppercase">
                                <h2>Overview</h2>
                                <h4>Survey Ended.</h4>
                            </div>
                            <?php } elseif (isset($_GET['validator'])) {
                                $conn = connectDB();
                                $validator = $_GET['validator'];
                                $stmt = $conn->query("SELECT email, podio_link FROM survey_tokens WHERE token = '" . $validator . "'");
                                $res = $stmt->fetch();
                                $stmt = $conn->query("SELECT * FROM land_info WHERE podio_link = '" . $res['podio_link']."'");
			                    $row = $stmt->fetch();
                            ?>
                                <ul class="list-overview">
                                    <li>
                                        <span class="list-overview-option">Purpose: </span>
                                        <span class="list-overview-value"><span class="label label-default label-tag-primary">sale</span></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">State: </span>
                                        <span class="list-overview-value"><?php echo $row['state_country']; ?></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">County: </span>
                                        <span class="list-overview-value"><?php echo $row['county']; ?></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Area: </span>
                                        <span class="list-overview-value"><?php echo $row['area']; ?></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">APN: </span>
                                        <span class="list-overview-value"> <?php echo $row['apn']; ?></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Podio Link: </span>
                                        <span class="list-overview-value"><a href="<?php echo $row['podio_link']; ?>"><?php echo $row['podio_link']; ?></a></span>
                                    </li>
                                    <li>
                                        <span class="list-overview-option">Views Counter: </span>
                                        <span class="list-overview-value">15119</span>
                                    </li>
                                </ul>
                        </div>

                        <div class="widget widget-form" id="form">

                            <form action="survey_store.php" method="post">
                                <?php
                                insert_csrf_token();
                                ?>
                                <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                                <div class="box-container widget-body">
                                    <div class="widget-header text-uppercaser">
                                        <h2>Attend the survey</h2>
                                    </div>
                                    <div class="form-additional">
                                        <div class="form-group">
                                            <input type="text" name='buy_price' class="form-control" placeholder="Buy Price" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="sell_price" class="form-control" placeholder="Sell Price" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="notes" class="form-control" placeholder="Notes" required>
                                        </div>

                                        <div class="form-group form-group-submit">
                                            <input type="submit" name='address' class="btn btn-primary btn-wide color-primary btn-property" value="Send" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                    </div>
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
    <?php include "layouts/footer.php"; ?>