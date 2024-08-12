<?php
class StudTemplate
{
    var $top;
    var $header;
    var $footer;
    function __construct()
    {
        $this->top='
        <!DOCTYPE html>
        <html lang="en">';
        $this->header='
        <!--Header-->
        <head>
        <title>Library Management System</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <!-- for-mobile-apps -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- social media -->
        <link href="../css/font-awesome.css" rel="stylesheet"> 
        <!-- look -->
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--//fonts-->
        </head>
        <body>
        <!-- header -->
        <div class="banner-top">
                    <div class="social-bnr-agileits">
                        <ul class="social-icons3">
                                        <li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
                                        <li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
                                        <li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                    </ul>
                    </div>
                    <div class="contact-bnr-w3-agile">
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:vidyasagarpatil@gmail.com">vidyasagarpatil@gmail.com</a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+91 9372520988</li>	
                            <li class="s-bar">
                                <div class="search">
                                    <input class="search_box" type="checkbox" id="search_box">
                                    <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                                    <div class="search_form">
                                        <form action="#" method="post">
                                            <input type="search" name="Search" placeholder=" " required=" " />
                                            <input type="submit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <div class="w3_navigation">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1><a class="navbar-brand" href="../index.php">Library <span>Management</span><p class="logo_w3l_agile_caption">Manager of book</p></a></h1>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="menu menu--iris">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="menu__item "><a href="sdashboard.php" class="menu__link">Dashboard</a></li>
                                    <li class="menu__item"><a href="requestbook.php" class="menu__link">Request</a></li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
        
                </div>
            </div>
            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <script src="../js/bootstrap.js"></script>
        </body>';
        $this->footer='
        <!-- Footer -->
  <!-- bootstrap js cdn links -->
  <script src="../js/bootstrap.js"></script>
</html>';
    }
}
?>
