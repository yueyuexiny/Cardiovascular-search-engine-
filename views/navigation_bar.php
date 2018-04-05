<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header col-md-3">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-left navbar-brand hidden-xs"><img src="./imgAHA/logoTop.jpg"></a>
                    <a href="index.php" class="navbar-left navbar-brand text-center clearfix hidden-md hidden-lg hidden-sm vissible-xs"><img src="./imgAHA/logo-cardiovascularDDI-sm.jpg"></a>
                </div>
                <div class="collapse navbar-collapse col-md-9 pull-right" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (basename(filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_STRING), '.php') != 'index'): ?>
                            <li role="presentation" class="active"><a href="index.php">Home</a></li>
                        <?php endif; ?>
                        <li role="presentation" class="active"><a href="./about.php">About</a></li>
                        <!--<li role="presentation" class="active"><a href="https://biocaddie.org/contact" target='_blank'>Contact</a></li>-->

                        <li class="active">

                            <a href="feedback.php" class="dropdown-toggle dropdown" role="presentation" aria-haspopup="true"
                               aria-expanded="false">
                                Feedback<!--<span class="caret"></span>-->
                            </a>

                           <!-- <ul class="dropdown-menu dropdown">
                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle"
                                                                         data-toggle="dropdown">Report an issue</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://github.com/biocaddie/prototype_issues/issues" target="_blank">GitHub</a>
                                        </li>
                                        <li><a href="./about.php">Contact Us</a></li>
                                    </ul>
                                </li>

                                <li><a href="./questionnaire.php">Questionnaire</a></li>
                            </ul>-->
                        </li>
                        <!--<li class="active"><a href="./submit_repository.php"><span data-toggle="tooltip" data-placement="bottom"
                                                                                   title="Get your repository indexed">Submit<span></span></a>
                        </li>-->

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
