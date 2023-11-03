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
                <form action="survey_store.php" method="post">
                    <div class="widget widget-box box-container widget-overview hidden-sm  hidden-xs">
                        <div class="widget-header text-uppercaser">
                            <h2>Information of Places</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                $conn = connectDB();
                                $rows = Read_record($conn, "land_info", "");
                                $firstItem = $rows[0];
                                ?>
                                <label class="form-label" for="area_select">Select an area</label>
                                <select class="form-control" id="area_select" style="background-color: aliceblue;" name="selected_area">
                                    <?php
                                    foreach ($rows as $row) {
                                        echo "<option value='" . $row['podio_link'] . "'>" . $row['county'] . ", " . $row['state_country'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h5 class="property-card-title" id="state"><?php echo "State: " . $firstItem['state_country']; ?></h5>
                                <h5 class="property-card-title" id="county"><?php echo "County: " . $firstItem['county']; ?></h5>
                                <h5 class="property-card-title" id="area"><?php echo "Area: " . $firstItem['area'] . " Acres"; ?></h5>
                                <h5 class="property-card-title" id="apn"><?php echo "APN: " . $firstItem['apn']; ?></h5>
                                <h5 class="property-card-title" id="podio_link"><a href="<?php echo $firstItem['podio_link']; ?>"><?php echo "Podio Link: " . $firstItem['podio_link']; ?></a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="widget  widget-box box-container widget-form form-main" id="form">

                        <?php
                        insert_csrf_token();
                        ?>
                        <input type="hidden" name="validator" value="<?php echo $_GET['validator'] ?? ''; ?>">

                        <div class="widget-header text-uppercaser">
                            <h2>Submit survey results</h2>
                        </div>
                        <div class="form-additional">
                            <div class="form-group">
                                <input type="text" name='buy_price' class="form-control" placeholder="Buy Price" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="sell_price" class="form-control" placeholder="Sell Price" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="note" class="form-control" placeholder="Notes" required>
                            </div>

                            <div class="form-group form-group-submit">
                                <input type="submit" name='address' class="btn btn-primary btn-wide color-primary btn-property" value="Send" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </main><!-- /.main-part-->
        <a class="btn btn-scoll-up color-secondary" id="btn-scroll-up"></a>
    </div>
    <?php include "layouts/footer.php"; ?>
    <script>
        jQuery(function() {

            $("#area_select").on('change', function() {
                $.post('read_land_info.php', { link: $(this).val() }, function(data, status) {
                    record = JSON.parse(data);
                    $("#state").text(`State: ${record[0]['state_country']}`);
                    $("#county").text(`County: ${record[0]['county']}`);
                    $("#area").text(`Area: ${record[0]['area']} Acres`);
                    $("#apn").text(`APN: ${record[0]['apn']}`);
                    $("#podio_link").text(`Podio Link: ${record[0]['podio_link']}`);
                })
            })
        });
    </script>