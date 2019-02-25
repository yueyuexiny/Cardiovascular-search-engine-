<?php
require_once  'config/config.php';

$pageTitle = "Feedback";

include 'views/header.php'; ?>


<div class="container" style="margin-top: 30px" id="content" role="main">
	<div class="row">
    		<div class="col">
        <div class="panel panel-default" style="text-align: center;height: 300px;padding-top: 100px">
            <div class="panel-body">
                <em class="fa fa-envelope fa-4x"></em><br>
                <a href="./about.php" class="hyperlink"> <em>Contact Us</em></a>

            </div>
        </div>
		</div>

    

 <!--   <div class="col-md-3">
        <div class="panel panel-default" style="text-align: center;height: 300px;padding-top: 100px">
            <div class="panel-body">
                <em class="fa fa-sticky-note fa-4x"></em><br>
                <a href="./questionnaire.php" class="hyperlink"><em> Questionnaire</em>
                </a>
            </div>
        </div>
    </div>-->  

    		<div class="col">
        <div class="panel panel-default" style="text-align: center;height: 300px;padding-top: 100px">
            <div class="panel-body">
                <em class="fa fa-github fa-4x"></em><br>
                <a href="https://github.com/UTHealth-CCB/AHA/issues" target="_blank" class="hyperlink"><em> Report an issue on GitHub</em>
                </a>
            </div>
        </div>
    		</div>
    </div>
</div>

<?php include 'views/footer.php'; ?>
