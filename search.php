<!DOCTYPE html>
<html>
<head>
<style>
#left-column{
width: 268px; 
	border: none;	
	margin-bottom: 30px;
	scrolling: "auto";
	position: relative; 
}
</style>
</head>
<?php
require_once dirname(__FILE__) . '/config/config.php';
require_once dirname(__FILE__) . '/Model/SearchBuilder.php';
require_once dirname(__FILE__) . '/Model/AutoCorrection.php';
require_once dirname(__FILE__) . '/Model/DuplicateSearch.php';
require_once dirname(__FILE__) . '/Model/ConstructSearchView.php';
require_once dirname(__FILE__) . '/views/search_panel.php';
require_once dirname(__FILE__) . '/views/search/breadcrumb.php';
// Left column
require_once dirname(__FILE__) . '/views/feedback.php';

// Middle column
require_once dirname(__FILE__) . '/views/search/results.php';
require_once dirname(__FILE__) . '/views/search/switch_view.php';
require_once dirname(__FILE__) . '/views/search/pagination.php';
require_once dirname(__FILE__) . '/views/search/result_status.php';
require_once dirname(__FILE__) . '/views/search/sorting.php';
require_once dirname(__FILE__) . '/views/search/duplicate_results.php';
require_once dirname(__FILE__) . '/views/share.php';

// Right column
require_once dirname(__FILE__) . '/views/search/wordcloud.php';
require_once dirname(__FILE__) . '/views/search/partialActivities.php';
require_once dirname(__FILE__) . '/views/search/synonym.php';
require_once dirname(__FILE__) . '/views/search/search_details.php';
//require_once dirname(__FILE__) . '/views/search/survey.php';

$_SESSION['synonym']=null;

$searchBuilder = new SearchBuilder();
$searchBuilder->searchSelectedRepo();
$searchView = new ConstructSearchView($searchBuilder);

$pageTitle = $searchBuilder->getQuery();

?>
<?php include dirname(__FILE__) . '/views/header.php'; ?>

<body>
<!--<div class="container">
    <?php /*echo partialSearchPanel($searchBuilder); */?>
    --><?php /*echo breadcrumb($searchBuilder); */?>
    <div class="container-fluid full_panel_bg">

        <?php echo partialSearchPanel($searchBuilder); ?>
    </div>
    <div class="container">
        <?php echo breadcrumb($searchBuilder); ?>
    <div class="row">
        <!-- Filter Panel -->
        <div class="col-sm-4 col-md-3">
            <?php if ($searchBuilder->getSearchType() == 'data') {
                ?>			                	
                <iframe id="left-column" onload = 'resizeIframe(this)' title="Repositories, accessibility and authorization lists" src="search-filter.php?<?php echo filter_var($_SERVER["QUERY_STRING"], FILTER_SANITIZE_STRING)?>"></iframe>            
            <?php
            }else{
                partialFeedback();
            } ?>
        </div>

        <!--  Search Result Panel -->
        <div id="detailView"></div>
        <div id="summaryView">
            <div class="col-sm-8 col-md-6">
               <!-- Pagination Panel -->
                <?php if ($searchBuilder->getSelectedTotalRows() > 0): ?>
                    <?php echo partialResultsStatus($searchBuilder,$searchView);?>
                    <?php echo partialSwitch($searchView); ?>
                    <div class="clearfix"></div>
                    <?php echo partialPagination($searchBuilder, $searchView);?>
                    <div class="pull-right" style="margin: 10px 0 0 5px;">
                    <?php if ($searchBuilder->getSearchType() == 'data') :?>
                        <?php //partialShare($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>
                    <?php endif; ?>
                    </div>
                    <div class="clearfix"></div>
                    <!--<div style="margin-bottom: 60px">
                    <?php //echo partialSorting($searchBuilder, $searchView); ?>
                        </div>-->
                <?php endif; ?>

                <div class="clearfix"></div>

                <!-- Search Result List -->
                <?php echo partialResults($searchView);?>

                <hr>
                <!-- Pagination Panel ==== */ -->
                <?php if ($searchBuilder->getSelectedTotalRows() > 0): ?>
                    <?php echo partialResultsStatus_down($searchBuilder,$searchView); ?> 
                    <!--partialResultsStatus_down functionality is same with partialResultsStatus, add it for fixing "element id is not unique accessibility review"  -->
                    <div class="clearfix"></div>
                    <?php echo partialPagination_down($searchBuilder,$searchView); ?>
                    <!--partialPagination_down functionality is same with partialPagination, add it for fixing "element id is not unique accessibility review"  -->
                <?php endif; ?>
                <div class="clearfix"></div>
            </div>

            <?php /* ###### Info Panel ###### */ ?>
            <div class="col-md-3 hidden-sm">

               <!-- <?php //if ($searchBuilder->getSearchType() == 'data') {
                    ?>
                    <iframe scrolling="no"  style="width: 268px;height: 260px; border: none;margin-bottom: 30px" src="timeline.php?<?php //echo filter_var($_SERVER["QUERY_STRING"], FILTER_SANITIZE_STRING)?>"></iframe>
                    <?php
                //} ?>-->

                <?php //echo partialWordCloud($searchBuilder); ?>
                <?php echo partialActivities(); ?>
                <?php echo partialSynonym($searchBuilder);?>
                <?php echo partialSearchDetails($searchBuilder); ?>

            </div>
        </div>
    </div>
</div>


</body>
</html>

<?php include dirname(__FILE__) . '/views/footer.php'; ?>