<?php
require_once dirname(__FILE__) . '/../../config/datasources.php';
$dataTypes = getDatatypes();
$repo = getRepositoryIDMapping();
?>
<div class="jumbotron hidden-sm hidden-xs jumbo_pad" style="background-color: #E1E1E1;padding-left: 8em;padding-right: 8em">
    <!--<h4 class="display-3 text-center">Get Started</h4>
    <h4 class="jumbo_title text-center">Search Over
        <span class="dataset_number"><?php /*echo sizeof($repo); */ ?></span>Repositories</h4>-->

    <form action='./search.php' method='get' autocomplete='off' id="search-form" style="line-height: normal">
    <div class="input-group">
        <input type="text" class="form-controlMain" autocomplete='off'
               placeholder="For example: acute myocardial infarction" name='query' id='query' autofocus="">
        <span class="input-group-addon hidden"><i class="fa fa-spinner fa-spin"></i></span>
        <div class="input-group-btn">
            <button class="btn btn-warning" type='submit' value='submit' id="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <div class="form-inline hidden" style="margin-top:10px;">
        <label class="radio-inline">
            <input name="searchtype" id="radio1" value="data" type="radio" checked>
            <span class="search-text-md">Search for data set</span>
        </label>
        <!--<label class="radio-inline">
            <input name="searchtype" id="radio2" value="repository" type="radio">
            <span class="search-text-md">Search for repository</span>
        </label>-->
        <!--<div class="pull-right hidden-xs">
            <a href="advanced.php" class="hyperlink">Advanced Search</a>
            <a href="help.php" class="hyperlink">help</a>
        </div>
        <div class="text-center visible-xs" style="margin-top: 10px">
            <a href="advanced.php" class="hyperlink">Advanced Search</a>
            <a href="help.php" class="hyperlink">help</a>
        </div>-->
    </div>
    <br>
    </form>

</div>
<div class="jumbotron hidden-md hidden-lg hidden-xl" style="background-color: #C33233">
    <form action='./search.php' method='get' autocomplete='off' id="search-form" style="line-height: normal">
        <div class="input-group">
            <input type="text" class="form-controlMain" autocomplete='off'
                   placeholder="Please type search words" name='query' id='query' autofocus="">
            <span class="input-group-addon hidden"><i class="fa fa-spinner fa-spin"></i></span>
            <div class="input-group-btn">
                <button class="btn btn-warning" type='submit' value='submit' id="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="form-inline" style="margin-top:10px;">
            <label class="radio-inline">
                <input name="searchtype" id="radio1" value="data" type="radio" checked>
                <span class="search-text-md">Search for data set</span>
            </label>
        </div>
        <br>
    </form>
</div>
