
<?php $pageTitle = "Home";?>
<?php include 'views/header.php'; ?>

    <div style="background-color: #E1E1E1">
        <div class="container">
            <?php include 'views/index/carousel.php'; ?>
        </div>
        <div class="container">
            <?php include 'views/index/SearchPanelMain.php'; ?>
        </div>
        <div class="container-fluid" style="background-color:#ffffff">
            <section id="statistics" class="bg-primary" aria-label="provide some statistics about the datasets/repositories">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h1 class="headings" aria-label="provides some statistics on the page">Statistics</h1>
                            <hr class="small">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats">
                                <span class="fa-stack fa-4x">
                                <em class="fa fa-circle fa-stack-2x"></em>
                                <em class="fa fa-database fa-stack-1x text-primary"></em>
                            </span>
                                        <div class="title-homepage" aria-label="number of repositories">
                                            <strong>39 Repositories</strong>
                                        </div>

                                        <!--  <a href="#">
                                            <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                        </a>-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <em class="fa fa-circle fa-stack-2x"></em>
                                <em class="fa fa-cubes fa-stack-1x text-primary"></em>
                            </span>
                                        <div class="title-homepage" aria-label="number of datasets">
                                            <strong>41656 DataSets</strong>
                                        </div>
                                        
                                        <!-- <a href="#">
                                            <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                        </a>-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <em class="fa fa-circle fa-stack-2x"></em>
                                <em class="fa fa-tags fa-stack-1x text-primary"></em>
                            </span>
                                        <div class="title-homepage" aria-label="number of data types">
                                            <strong>10 Data Types</strong>
                                        </div>
                                        <!-- <a href="#">
                                            <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


<?php //include dirname(__FILE__) . "/views/index/chart.php"; ?>
<?php //include dirname(__FILE__) . "/views/index/pilotproject.php"; ?>
<?php
/* ==== Page Specific Scripts ====
$scripts = [
    "./vendor/jquery/jquery.typewatch.js",
//     "./js/page.scripts/index.js",
];
*/ ?>


<?php include dirname(__FILE__) . '/views/footer.php'; ?>

