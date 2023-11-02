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
                                    <a href="chart.php" class="btn btn-primary btn-wide color-primary">Go to Charts</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="container">
                <section class="search-form color-primary">
                    <h3 class="hidden">Search</h3>
                    <div class="container">
                        <form action="#" class="form-horisontal">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control selectpicker color-secondary " name="input">
                                            <option value="0">Purpose</option>
                                            <option value="1">Sale</option>
                                            <option value="2">Rent</option>
                                            <option value="3">Sale and Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control color-secondary" placeholder="Country, State, County, City, Neighborhood, Zip, Title, Address, ID..." />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="form-control selectpicker color-secondary" name="input">
                                            <option value="0">Type</option>
                                            <option value="1">House</option>
                                            <option value="2">Flat</option>
                                            <option value="3">Apartment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control  color-secondary" placeholder="Size (m2)" />
                                    </div>
                                </div>
                                <div class="col-md-1 form-group search-btn-box">
                                    <button type="submit" id="search-btn" class="btn btn-search focus-color"><i class="fa fa-search icon-white"></i></button>
                                </div>
                            </div>
                            <div class="row" id='form-addittional' style="display: none;">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control color-secondary" placeholder="Energy efficient" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control  color-secondary" placeholder="Min price ($)" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control  color-secondary" placeholder="Max price ($)" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control color-secondary" placeholder="Rooms" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="search-additional-btn color-secondary" id="search-additional">
                            <i class="icon-caret-down"></i>
                        </a>
                    </div>
                </section>
            </div>
        </header>

        <main class="main section-color-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="h-side top-pad h-side-slim clearfix">
                            <div class="properties-filter">
                                <div class="form-group">
                                    <select class="form-control selectpicker select-small" name="filter" id="search">
                                        <option value="0">Order By</option>
                                        <option value="1">Asc</option>
                                        <option value="2">Desc</option>
                                    </select>
                                </div>
                                <div class="grid-type pull-right">
                                    <a href="#" class="grid active"><i class="fa fa-th"></i></a>
                                    <a href="#" class="list"><i class="fa fa-list"></i></a>
                                </div>
                            </div>
                        </div> <!-- /. content-header -->
                        <div class="properties">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="property-card card">
                                        <div class="property-card-header image-box" style="background-color:aqua">
                                            <div >
                                                <h4 class="text-center" style="margin-top: 40px;">Register New Item</h4>
                                            </div>
                                            <div class="budget"><i class="fa fa-star"></i></div>
                                            <a href="new_land_register.php" class="property-card-hover">
                                                <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                <img src="assets/img/plus.png" alt="" class="center-icon" />
                                                <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                            </a>
                                        </div>

                                        <div class="property-card-tags">
                                            <span class="label label-default label-tag-warning">sale</span>
                                        </div>
                                        <div class="property-card-box card-box card-block">
                                            <h3 class="property-card-title"><a href="listing.html">New</a></h3>
                                            <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                            <div class="property-preview-footer  clearfix">
                                                <div class="property-preview-f-left text-color-primary">
                                                    <span class="property-card-value">
                                                        <i class="fa fa-home"></i>Land
                                                    </span>
                                                    <span class="property-card-value">
                                                        <i class="fa fa-tint"></i>6
                                                    </span>
                                                    <span class="property-card-value">
                                                        <i class="fa fa-square-o"></i>350m
                                                    </span>
                                                    <span class="property-card-value">
                                                        <i class="fa fa-eur"></i>20 000
                                                    </span>
                                                </div>
                                            </div>
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
                                            <div class="property-card-header image-box">
                                                <img src="assets/img/patterns/bg-a-farm-l.jpg" alt="" class="" />
                                                <a href='listing.php?podio=<?php echo $place['podio_link']; ?>' class="property-card-hover">
                                                    <img src="assets/img/property-hover-arrow.png" alt="" class="left-icon" />
                                                    <!-- <img src="assets/img/plus.png" alt="" class="center-icon" /> -->
                                                    <img src="assets/img/icon-notice.png" alt="" class="right-icon" />
                                                </a>
                                            </div>
                                            <div class="property-card-tags">
                                                <span class="label label-default label-tag-primary">sale</span>
                                            </div>
                                            <div class="property-card-box card-box card-block">
                                                <h3 class="property-card-title"><a href="listing.php"><?php echo $place['state_country']; ?></a></h3>
                                                <div class="property-card-descr">This is simply dummy text of the printing and typesetting industry. That has been the industry standard ...</div>
                                                <div class="property-preview-footer  clearfix">
                                                    <div class="property-preview-f-left text-color-primary">
                                                        <span class="property-card-value">
                                                            <i class="fa fa-home"></i><?php echo $place['county']; ?>
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-tint"></i><?php echo $place['area']; ?>
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-square-o"></i><?php echo $place['apn']; ?>
                                                        </span>
                                                        <span class="property-card-value">
                                                            <i class="fa fa-eur"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                            </div><!-- /.properties -->
                            <nav class="text-center">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div> <!-- /.properties-->
                    </div><!-- /.center-content -->
                    <div class="col-md-3 sidebar-right">
                        <div class="widget widget-box  box-container ">
                            <div class="widget-header text-uppercaser">
                                <h2>Filter</h2>
                            </div>
                            <div class="form-additional npad">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="County" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="APN" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Podio Link" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-wide color-primary" type='button'>Refresh results</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget  widget-agent widget-agentslist">
                            <div class="widget-box">
                                <h2 class="widget-header text-uppercase">
                                    Latest Listings
                                </h2>
                            </div>
                            <div class="properties-list-small">
                                <div class="property">
                                    <a href="listing.html" class="image image-hoveffect image-cover-div">
                                        <img src="assets/img/news/stock.jpg" alt="" />
                                    </a><!-- /.image -->
                                    <div class="body">
                                        <div class="title">
                                            <h3>
                                                <a href="listing.html">Modern backyard with pool</a>
                                            </h3>
                                        </div><!-- /.title -->
                                        <div class="location">Palo Alto CA</div><!-- /.location -->
                                        <div class="price text-color-primary">$2 300 000</div><!-- /.price -->
                                    </div><!-- /.wrapper -->
                                </div>
                                <div class="property">
                                    <a href="listing.html" class="image image-hoveffect image-cover-div">
                                        <img src="assets/img/news/stock.jpg" alt="" />
                                    </a><!-- /.image -->
                                    <div class="body">
                                        <div class="title">
                                            <h3>
                                                <a href="listing.html">Modern bed room</a>
                                            </h3>
                                        </div><!-- /.title -->
                                        <div class="location">Palo Alto CA</div><!-- /.location -->
                                        <div class="price text-color-primary">$2 300 000</div><!-- /.price -->
                                    </div><!-- /.wrapper -->
                                </div>
                                <div class="property">
                                    <a href="listing.html" class="image image-hoveffect image-cover-div">
                                        <img src="assets/img/news/stock.jpg" alt="" />
                                    </a><!-- /.image -->
                                    <div class="body">
                                        <div class="title">
                                            <h3>
                                                <a href="listing.html">Tropicalm villa</a>
                                            </h3>
                                        </div><!-- /.title -->
                                        <div class="location">Palo Alto CA</div><!-- /.location -->
                                        <div class="price text-color-primary">$2 300 000</div><!-- /.price -->
                                    </div><!-- /.wrapper -->
                                </div>
                                <div class="property">
                                    <a href="listing.html" class="image image-hoveffect image-cover-div">
                                        <img src="assets/img/news/stock.jpg" alt="" />
                                    </a><!-- /.image -->
                                    <div class="body">
                                        <div class="title">
                                            <h3>
                                                <a href="listing.html">Swimming pool</a>
                                            </h3>
                                        </div><!-- /.title -->
                                        <div class="location">Palo Alto CA</div><!-- /.location -->
                                        <div class="price text-color-primary">$2 300 000</div><!-- /.price -->
                                    </div><!-- /.wrapper -->
                                </div>
                            </div> <!-- /. recent properties -->
                        </div><!-- /. widget recent properties -->
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