<body>
<div role="heading" aria-level="1" class="header" id="navbar_main" style="background-color: #E1E1E1">
    <div class="container">
        <div class="navbar" role="navigation">
            <div class="row">
                <div>
                    <button type="button" class="navbar-toggle" aria-label="navbar-toggle" aria-expanded="true" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="align-top col-md-8 col-sm-6">
                        <a href="index.php" class="hidden-sm hidden-xs hidden-md">
                            <img src="./img/homepage_pics/logo_aha_heartdata.png" aria-label="HeartData logo" alt="logo" class="float-left">
                        </a>

                        <a href="#" class="hidden-lg hidden-xl hidden-sm hidden-xs">
                            <img src="./img/homepage_pics/small.png " alt="logo" class="float-left" aria-label="HeartData logo"> 
                            </a>
                            <a href="#" class="hidden-md hidden-lg hidden-xl">
                                <img src="./img/homepage_pics/text.png " alt="logo" class="float-left" aria-label="HeartData small logo">
                            </a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse pull-right align-top col-md-3 col-sm-6 col-xs-12" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <?php if (basename(filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING), '.php') != 'index'): ?>
                            <li role="menuitem"><a href="index.php">Home</a></li>
                        <?php endif; ?>
                        <li role="menuitem"><a href="./about.php">About us</a></li>
                        <li role="menuitem"><a href="feedback.php">Feedback</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
