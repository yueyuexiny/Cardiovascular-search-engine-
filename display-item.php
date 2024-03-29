<?php
require_once dirname(__FILE__) .'/config/config.php';
require_once dirname(__FILE__) . '/Model/SingleItemDisplayService.php';
require_once dirname(__FILE__) . '/views/search_panel.php';
require_once dirname(__FILE__) . '/views/display_item/result.php';
require_once dirname(__FILE__) . '/views/display_item/similar_datasets.php';
require_once dirname(__FILE__) . '/views/display_item/RelatedPublications.php';
require_once dirname(__FILE__) . '/views/display_item/PubmedGrant.php';
require_once dirname(__FILE__) . '/views/feedback.php';

$service = new SingleItemDisplayService();
$pageTitle = $service->getDisplayItemData()['title'][1];

/* Track user's activity*/
//require_once dirname(__FILE__) .'/Model/DBController.php';
//require_once dirname(__FILE__) . '/Model/WriteMysqlLog.php';
date_default_timezone_set('America/Chicago');


/*$log_date= date("Y-m-d H:i:s");
$message=$service->getRepositoryName().' : '.$service->getItemId();
$user_email=isset($_SESSION['email'])?$_SESSION['email']:null;
$objDBController = new DBController();
$dbconn=$objDBController->getConn();
$referral=@$_SERVER["HTTP_REFERER"];
write_mysql_log($dbconn,$log_date,$message,$user_email,session_id(),$referral);

*/
/*For the go back button*/
$query = $service->getQuery();
$repo_status = 'unchecked';
$data_status = 'checked';
if (@$_SERVER["HTTP_REFERER"]) {
    $backLink = $_SERVER["HTTP_REFERER"];
} else {
    $backLink = "javascript:history.go(-1);";
}

?>
<?php include dirname(__FILE__) . '/views/header.php'; ?>

<!--<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php /*echo partialSearchPanel($service); */?>
        </div>

        <div class="col-lg-12">
            <?php /*include dirname(__FILE__) . '/views/breadcrumb.php'; */?>
            </div>

        <div class="col-lg-9">
            <?php /*echo partialResult($service); */?>
        </div>

        <div class="col-lg-3">            
            <?php /*//echo partialSimilarDatasets($service); */?>
            <?php /*//echo partialRelatedPublications($service); */?>
            <?php /*//echo partialGrant($service); */?>
            <?php /*echo partialFeedback(); */?>
        </div>
    </div>
</div>-->

        <div class="container-fluid full_panel_bg">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo partialSearchPanel($service); ?>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php include dirname(__FILE__) . '/views/breadcrumb.php'; ?>
            </div>

            <div class="col-lg-9">
                <?php echo partialResult($service); ?>
            </div>

            <div class="col-lg-3">
                <?php //echo partialSimilarDatasets($service); ?>
                <?php //echo partialRelatedPublications($service); ?>
                <?php //echo partialGrant($service); ?>
                <?php echo partialFeedback(); ?>
            </div>
        </div>
    </div>

<?php include dirname(__FILE__) . '/views/footer.php'; ?>