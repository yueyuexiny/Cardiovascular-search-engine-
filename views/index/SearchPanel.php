<?php
require_once dirname(__FILE__) . '/../../config/datasources.php';
$dataTypes = getDatatypes();
$repo = getRepositoryIDMapping();
?>
<!--Nina added<div class="jumbotron search-block">-->
<!--    <h4 class="display-3 text-center">Get Started</h4>-->
<!--    <h4 class="jumbo_title text-center">Search Over-->
<!--        <span class="dataset_number">--><?php //echo sizeof($repo); ?><!--</span>Repositories</h4>-->
<!--    <form action='./search.php' method='get' autocomplete='off' id="search-form" style="line-height: normal">-->
<!--        <div class="input-group">-->
<!--            <input type="text" class="form-controlMain" autocomplete='off'-->
<!--                   placeholder="Please type search words" name='query' id='query' autofocus="">-->
<!--            <span class="input-group-addon hidden"><i class="fa fa-spinner fa-spin"></i></span>-->
<!--            <div class="input-group-btn">-->
<!--                <button class="btn btn-warning" type='submit' value='submit' id="submit">-->
<!--                    <i class="fa fa-search"></i>-->
<!--                </button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-inline" style="margin-top:10px;">-->
<!--            <label class="radio-inline">-->
<!--                <input name="searchtype" id="radio1" value="data" type="radio" checked>-->
<!--                <span class="search-text-md">Search for data set</span>-->
<!--            </label>-->
<!--            <!--<label class="radio-inline">-->
<!--                <input name="searchtype" id="radio2" value="repository" type="radio">-->
<!--                <span class="search-text-md">Search for repository</span>-->
<!--            </label>-->
<!--            <!--<div class="pull-right hidden-xs">-->
<!--                <a href="advanced.php" class="hyperlink">Advanced Search</a>-->
<!--                <a href="help.php" class="hyperlink">help</a>-->
<!--            </div>-->
<!--            <div class="text-center visible-xs" style="margin-top: 10px">-->
<!--                <a href="advanced.php" class="hyperlink">Advanced Search</a>-->
<!--                <a href="help.php" class="hyperlink">help</a>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <br>-->
<!--    </form>-->
<!---->
<!--    <div id="dialog"></div>-->
<!--</div>-->
<div class="row  hidden-xs hidden-sm" style="display: flex">
    <div class=" col-md-4 col-md-offset-1 col-lg-offset-1 full_panel_bg col-xs-12">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-content">
                        <div>
                            <h2 class="hidden-sm contents text-center">Save research time</h2>
                            <h3 class="visible-sm contents">Save research time</h3>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content">
                        <div class="text-center">
                            <h2 class="hidden-sm contents">Discover new datasets</h2>
                            <h3 class="visible-sm contents">Discover new datasets</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-content text-center">
                        <div>
                            <h2 class="hidden-sm contents">Search all cardiovascular datasets</h2>
                            <h3 class="visible-sm contents">Search all cardiovascular datasets</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-7 hidden-sm hidden-xs" style="padding-left:0">
        <img src="./img/homepage_pics/cardio_ddi.png " class="img-fluid" alt="Cardiovascular Data Discovery Index">
    </div>
</div>
