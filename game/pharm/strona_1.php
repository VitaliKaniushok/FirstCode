<?php 
include ( 'language.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $lang[ 'title'];?>
    </title>
    <link rel="alternate" href="http://vitali-shok.pl/Example/Smile.html" hreflang="x-default" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper container">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only"><?php echo $lang['navigation']?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right social">
                        <li>
                            <a href="http://facebook.com">
                                <img src="images/facebook.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="http://youtube.com">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="http://twitter.com">
                                <img src="images/twitter.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="http://instagram.com">
                                <img src="images/instagram.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <ul class="nav navbar-nav navbar-right language">
                        <li>
                            <a href="Strona_1.php?lang=be">
                                <img src="images/belarusSphere.png" alt="">
                                <br>Belarus
                            </a>
                        </li>
                        <li>
                            <a href="Strona_1.php?lang=pl">
                                <img src="images/polandSphere.png" alt="">
                                <br>Poland
                            </a>
                        </li>
                        <li>
                            <a href="Strona_1.php?lang=ru">
                                <img src="images/russiaSphere.png" alt="">
                                <br>Russia
                            </a>
                        </li>
                        <li>
                            <a href="Strona_1.php?lang=en">
                                <img src="images/unitedKingdomSphere.png" alt="">
                                <br>England
                            </a>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <ul class="nav navbar-nav navbar-left  col-md-8 col-sm-12 menu">
                        <li>
                            <a href="#">
                                <?php echo $lang[ 'cooperation'];?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php echo $lang[ 'our_help'];?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php echo $lang[ 'us_help'];?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php echo $lang[ 'supporting'];?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <?php echo $lang[ 'projects'];?>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="row one">
            <div class="col-md-6 col-sm-6 block">
                <div id="aktywnosci">
                    <h2><?php echo $lang['aktivity'];?></h2>
                    <p>
                        <?php echo $lang[ 'lorem_1'];?>
                    </p>
                    <button type="button" class="btn">
                        <?php echo $lang[ 'more'];?> <span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 block">
                <div id="historie" class="text-center">
                    <div class="hist">
                        <h2><?php echo $lang['history'];?></h2>
                        <p>
                            <?php echo $lang[ 'lorem_2'];?>
                        </p>
                        <button type="button" class="btn .btn-play">
                            <?php echo $lang[ 'see'];?> <span class="glyphicon glyphicon-play"></span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div class="row two">
            <div class="col-md-4 col-sm-4 block">
                <div id="wspolpraca">
                    <h2><?php echo $lang['cooperation'];?></h2>
                    <p>
                        <?php echo $lang[ 'lorem_3'];?>
                    </p>
                    <button type="button" class="btn">
                        <?php echo $lang[ 'more'];?> <span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 block">
                <div id="rada">
                    <h2><?php echo $lang['advice'];?></h2>
                    <p>
                        <?php echo $lang[ 'lorem_4'];?>
                    </p>
                    <button type="button" class="btn">
                        <?php echo $lang[ 'more'];?> <span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 block">
                <div id="jakPomoc">
                    <h2><?php echo $lang['us_help'];?></h2>
                    <p>
                        <?php echo $lang[ 'lorem_5'];?>
                    </p>
                    <button type="button" class="btn">
                        <?php echo $lang[ 'more'];?> <span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row three">
            <div class="col-md-6 col-sm-6 block">
                <div id="badania">
                    <h2><?php echo $lang['survey'];?></h2>
                    <p>
                        <?php echo $lang[ 'lorem_6'];?>
                    </p>
                    <button type="button" class="btn">
                        <?php echo $lang[ 'more'];?> <span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 block">
                <div id="wspieranie">
                    <h2><?php echo $lang['supporting'];?></h2>
                    <p>
                        <?php echo $lang[ 'lorem_7'];?>
                    </p>
                    <img src="images/wspieranie.png" alt="" class="img-responsive">
                    <button type="button" class="btn">
                        <?php echo $lang[ 'more'];?> <span class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="down">
            <ul class="nav nav-pills">
                <li>
                    <a href="#">
                        <?php echo $lang[ 'right'];?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $lang[ 'privacy'];?>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills col-md-8 ">
                <li>
                    <a href="#">
                        <?php echo $lang[ 'foundation'];?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $lang[ 'stock'];?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $lang[ 'our_help'];?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $lang[ 'supporting'];?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $lang[ 'projects'];?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $lang[ 'contact'];?>
                    </a>
                </li>
            </ul>
            <img class="footer-logo pull-right" src="images/footer-logo.png" alt="">
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>