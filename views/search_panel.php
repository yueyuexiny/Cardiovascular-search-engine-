<?php

/*
 * Display search panel on the search.php page
 * input: an object of SearchBuilder class
 *
 * */

function partialSearchPanel($searchBuilder)
{

    $repo_status = 'unchecked';
    $data_status = 'checked';
    if ($searchBuilder->getSearchType() == 'repository') {
        $repo_status = 'checked';
        $data_status = 'unchecked';
    }

    $page_name = (basename($_SERVER['PHP_SELF']));
    ?>
    <div class="container"><!-- added this tag>-->
    <div class="jumbotron search-block-2 jumbo_pad">
        <form id="search-form" action='search.php' method='get' autocomplete='off' style="margin: 0">
            <div class="input-group">
                <input value="<?php echo $searchBuilder->getQuery(); ?>" type="text" class="form-controlMain"
                       placeholder="Cardio[All Search Fields] AND  Johnson[Author]" name='query' id='query-other' aria-label="Search through site content">
                <?php if ($page_name == 'search-repository.php') { ?>
                    <input value="<?php if ($searchBuilder->getSelectedRepositories() != NULL) {
                        echo implode(',', $searchBuilder->getSelectedRepositories());
                    } ?>" type="text" class="hidden" name='repository' id='repository'>
                <?php } ?>
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-warning" type='submit' value=''>
                        <em class="fa fa-search"></em>
                    </button>
                </div>

            </div>
            <div class="form-inline" style="padding: 7px 0;">
                <div class="col-md-6 hidden-xs">
                    <label class="radio-inline">
                        <input name="searchtype" id="radio1" value="data" type="radio" <?php print $data_status; ?>>
                        <span class="search-text-md" style="line-height: 21px;">Search for data set</span>
                    </label>
                   <!-- <label class="radio-inline">
                        <input name="searchtype" id="radio2" value="repository"
                               type="radio" <?php print $repo_status; ?>>
                        <span class="search-text-md" style="line-height: 21px;">Search for repository</span>
                    </label>-->
                </div>
               <!-- <div class="text-center visible-xs-block">
                    <label class="radio-inline">
                        <input name="searchtype" id="radio1" value="data" type="radio" <?php print $data_status; ?>>
                        <span class="search-text-md" style="line-height: 21px;">Search for data set</span>
                    </label>
                    <label class="radio-inline">
                        <input name="searchtype" id="radio2" value="repository"
                               type="radio" <?php print $repo_status; ?>>
                        <span class="search-text-md" style="line-height: 21px;">Search for repository</span>
                    </label>
                </div>-->
                    <div class="col-md-12 col-xs-12">
                   <!-- <span class="pull-right hidden-xs">-->
                    <!--<span class="text-center hidden-md hidden-sm hidden-lg visible-xs">-->
                        <span class="pull-right">
                <!--<a href="help.php" class="hyperlink">help</a>
                <a href="advanced.php" class="hyperlink">Advanced Search</a>-->
                            </span>
                   <!-- </span>-->
                   <!-- </span>-->
                </div>
            </div>
            <!-- <div id="search-example" class="search-text-sm">
                 <strong>Search Examples:</strong> (Breast Cancer, Genetic Analysis Software, Gene EGFR, Lung[title] AND Cancer, Cancer AND (Lung[Title] OR Skin[Title]))
             </div>-->
        </form>
    </div>
    </div>
    <?php
}

?>
