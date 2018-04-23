<?php

$pageTitle = "Home";
?>
<?php
require_once dirname(__FILE__) . '../config/datasources.php';
$dataTypes = getDatatypes();
$repo = getRepositoryIDMapping();
?>
<?php include 'views/header.php'; ?>

    <div style="background-color: #E1E1E1">
        <div class="container">
            <?php include 'views/index/carousel.php'; ?>
        </div>
        <div class="container">
            <?php include 'views/index/SearchPanelMain.php'; ?>
        </div>
        <div class="container-fluid" style="background-color:#ffffff">
            <section id="statistics" class="bg-primary">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-10 col-lg-offset-1">
                            <h2 class="headings">Statistics</h2>
                            <hr class="small">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-database fa-stack-1x text-primary"></i>
                            </span>
                                        <h4 class="title-homepage">
                                            <strong><?php echo sizeof($repo); ?> Repositories</strong>
                                        </h4>

                                        <a href="#">
                                            <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cubes fa-stack-1x text-primary"></i>
                            </span>
                                        <h4 class="title-homepage">
                                            <strong>2500 DataSets</strong>
                                        </h4>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tags fa-stack-1x text-primary"></i>
                            </span>
                                        <h4 class="title-homepage">
                                            <strong>10 Data Types</strong>
                                        </h4>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                        </a>
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