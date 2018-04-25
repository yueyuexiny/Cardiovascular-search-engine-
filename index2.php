<?php

$pageTitle = "Home";
?>
<?php include 'views/header.php'; ?>
<div style="background-color: #E1E1E1">
    <div class="container">


         <?php include 'views/index/SearchPanel2.php';?>
    </div>
    <div class="container">
        <?php include 'views/index/SearchPanelMain.php'; ?>
    </div>

   <!-- <section id="statistics" class="bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2 class="headings">Statistics</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="title-homepage">
                                    <strong>100 Repositories</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#">
                                    <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="title-homepage">
                                    <strong>2500 DataSets</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <!--<a href="#" class="btn btn-light">Learn More</a>-->
                               <!-- <a href="#">
                                    <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="title-homepage">
                                    <strong>10 Data Types</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#">
                                    <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="title-homepage">
                                    <strong>Another Title</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#">
                                    <span class="glyphicon glyphicon-plus-sign fa-2x glyph-color"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
             <!--   </div>
                <!-- /.col-lg-10 -->
        <!--  </div>
          <!-- /.row -->
        <!-- </div>
         <!-- /.container -->
        <!-- </section>-->
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
*/?>

<?php include dirname(__FILE__) . '/views/footer2.php'; ?>