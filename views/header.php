<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php echo isset($pageTitle)&& $pageTitle!=" " ? $pageTitle . " | " : "CardioVascular | "; ?> CardioVascular Data Discovery Index</title>
        <meta name="description" content="DataMed is a prototype biomedical data search engine. Its goal is to discover data sets across data repositories or data aggregators. In the future it will allow searching outside these boundaries. DataMed supports the NIH-endorsed FAIR principles of Findability, Accessibility, Interoperability and Reusability of datasets with current functionality assisting in finding datasets and providing access information about them.">
        <meta name="author" content="CardioVascular Core Development Team.">
        <meta name="keywords" content="will be replaced,
                                        by new keywords
                                        ">

        <link href="./img/favicon.ico" type="image/x-icon"  rel="shortcut icon" >

        <!-- Styles -->
        <link href="./vendor/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./vendor/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
        <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">-->
        <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="./css/header.css" rel="stylesheet">
        <link href="./css/expand.css" rel="stylesheet">
        <link href="./css/custom.css" rel="stylesheet">


        <!-- Scripts -->

        <!-- <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>-->
        <script src="https://d3js.org/d3-format.v1.min.js"></script>

        <script src="./vendor/jquery/jquery-1.11.3.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>


        <script src="./vendor/d3/d3.v3.min.js"></script>
        <script src="./js/jsapi.js"></script>

        <!--[if lt IE 9]>
        <script src="./js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="./js/html5shiv.min.js"></script>
        <script src="./js/respond.min.js"></script>
        <![endif]-->

        <script src="./js/js.cookie.js"></script>
        <script src="./js/main.js"></script>
        <script src="./js/jquery.mobile.custom.min.js"></script>

        <!---For sign in using Google account-->
<!--  <meta name="google-signin-scope" content="profile email">-->
<!--  <meta name="google-signin-client_id" content="829717013649-0j7el8re8ka2d5tgqm87c5msek06kgmu.apps.googleusercontent.com">-->


        <script src="./js/platform.js" async defer></script>
        <script type="text/javascript" src="./js/loadingoverlay.min.js"></script>
        <script type="text/javascript" src="./js/global.scripts.js"></script>


        <script src="./vendor/d3/d3.layout.cloud.js"></script>
        <script src="./vendor/d3/d3-tip.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->




        <script src="./js/js.cookie.js"></script>
        <script src="./js/main.js"></script>
        <script src="./js/jquery.mobile.custom.min.js"></script>
        <script src="./js/custom.js"></script>
        <script type="text/javascript">
            function resizeIframe(obj){
                obj.style.height = 0;
                obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
            }
        </script>

        <!--        <!---For sign in using Google account-->
<!--        <meta name="google-signin-scope" content="profile email">-->
<!--        <meta name="google-signin-client_id" content="829717013649-0j7el8re8ka2d5tgqm87c5msek06kgmu.apps.googleusercontent.com">-->
<!--        <script src="./js/platform.js" async defer></script>-->
<!--        <script type="text/javascript" src="./js/loadingoverlay.min.js"></script>-->
<!--        <script type="text/javascript" src="./js/global.scripts.js"></script>-->
<!---->
<!---->
<!--        <script src="./vendor/d3/d3.layout.cloud.js"></script>-->
<!--        <script src="./vendor/d3/d3-tip.js"></script>-->

<!--        <!--Google Analytics-->
<!--        <script>-->
<!--            (function (i, s, o, g, r, a, m) {-->
<!--                i['GoogleAnalyticsObject'] = r;-->
<!--                i[r] = i[r] || function () {-->
<!--                    (i[r].q = i[r].q || []).push(arguments)-->
<!--                }, i[r].l = 1 * new Date();-->
<!--                a = s.createElement(o),-->
<!--                        m = s.getElementsByTagName(o)[0];-->
<!--                a.async = 1;-->
<!--                a.src = g;-->
<!--                m.parentNode.insertBefore(a, m)-->
<!--            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');-->
<!---->
<!--            ga('create', 'UA-80500704-1', 'auto');-->
<!--            ga('send', 'pageview');-->
<!--        </script>-->
<!---->
<!--        <!--Usability Tracking-->
<!--        <script src="./js/client.min.js"></script>-->
    </head>

<?php include "navigation_bar.php"; ?>
