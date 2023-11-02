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
                            <div class="pull-left menu">
                                <nav class="navbar text-color-primary">
                                    <div class="text-right">
                                        <button class="navbar-toggler hidden" type="button" data-toggle="collapse" data-target="#main-menu">
                                            &#9776;
                                        </button>
                                    </div>
                                </nav>
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
                        <li class="item"><a href="http://geniuscript.com/"> Home </a></li>
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
                                        <!-- <img src="assets/img/3_bed_floor_plan.png" class="pull-right-img" alt="" /> -->
                                        This is simply dummy text of the printing and typesetting industry. That has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Layout passages. This is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /. widget-body -->
                        <div class="widget widget-box box-container">
                            <div class="widget-header text-uppercase">
                                <h2>Image gallery</h2>
                            </div>
                            <ul data-target="#modal-gallery" data-toggle="modal-gallery" class="images-gallery clearfix">
                                <li class="col-sm-4">
                                    <a data-gallery="gallery" href="assets/img/patterns/bg-a-farm-l.jpg" title="" download="assets/img/real_estate/modern-bed-room-interior-m.jpg" class="preview show-icon">
                                        <img src="assets/img/preview-icon.png" class="" alt="" />
                                    </a>
                                    <div class="preview-img"><img src="assets/img/patterns/bg-a-farm-l.jpg" data-src="assets/img/real_estate/modern-bed-room-interior-m.jpg" alt="" class="" /></div>
                                </li>
                                <li class="col-sm-4">
                                    <a data-gallery="gallery" href="assets/img/patterns/bg-lavender.jpg" title="" download="assets/img/real_estate/swimming-pool-in-hotel-s.jpg" class="preview show-icon">
                                        <img src="assets/img/preview-icon.png" class="" alt="" />
                                    </a>
                                    <div class="preview-img"><img src="assets/img/patterns/bg-lavender.jpg" data-src="assets/img/real_estate/swimming-pool-in-hotel-s.jpg" alt="" class="" /></div>
                                </li>
                                <li class="col-sm-4">
                                    <a data-gallery="gallery" href="assets/img/patterns/full-bg-road.jpg" title="" download="assets/img/real_estate/modern-villa-s.jpg" class="preview show-icon">
                                        <img src="assets/img/preview-icon.png" class="" alt="" />
                                    </a>
                                    <div class="preview-img"><img src="assets/img/patterns/full-bg-road.jpg" data-src="assets/img/real_estate/outdoor-restaurant.jpg" alt="" class="" /></div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.center-content -->
                    <div class="col-md-3">
                        <div class="widget widget-box box-container widget-overview hidden-sm  hidden-xs">
                            <div class="widget-header text-uppercase">
                                <h2>Overview</h2>
                            </div>
                            <?php 
                            if (isset($_GET['podio'])) {
                            $conn = connectDB();
                            $podioLink = $_GET['podio'];
                            
                            $stmt = $conn->query("SELECT * FROM land_info WHERE podio_link = '" . $podioLink."'");
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
                                    <span class="list-overview-value"><?php echo $row['area']; ?>&nbsp; Acres</span>
                                </li>
                                <li>
                                    <span class="list-overview-option">APN: </span>
                                    <span class="list-overview-value"><?php echo $row['apn']; ?></span>
                                </li>
                                <li>
                                    <span class="list-overview-option">Podio Link: </span>
                                    <span class="list-overview-value"><a href='<?php echo $row['podio_link']; ?>'><?php echo $row['podio_link']; ?></a></span>
                                </li>
                            </ul>
                            <?php } ?>
                        </div><!-- /. widget-OVERVIEW -->
                        <div class="widget widget-box box-container widget-agent mt-3">
                            <form action="send_url.php" method="post">
                                <input type="hidden" value="<?php echo $row['podio_link']; ?>" name="podio_link">
                                <button type="submit" class="btn btn-primary btn-wide color-primary" name="send_url" value="send_url">Send Survey Link</button>
                            </form>

                        </div>
                        <div class="widget widget-box box-container widget-agent mt-3">
                            <div class="media">
                                <div class="agent-logo media-left media-middle">
                                    <a href="profile.html" class="img-circle-cover">
                                        <img src="assets/img/agents/attractive-woman-xs.jpg" alt="" class="img-circle" />
                                    </a>
                                </div>
                                <div class="agent-details media-right media-top">
                                    <a href="profile.html" class="agent-name text-color-primary">Sophia Beckett</a>
                                    <span class="phone">+385 (0)92 12 3 321</span>
                                    <a href="mailto:sophia@estatepoint.com" class="mail text-color-primary">sophia@estatepoint.com</a>
                                </div>
                            </div>
                        </div>
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