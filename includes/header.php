<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- coment -->
    <?php
        
        $metas = array( 
        'index' => array( 
            'header' => 'Leading Mobile App Design and Development Company | MobiWhiz',
            'keywords' => 'mobile application development company, mobile application developer, mobile applications development, mobile design',
            'description' => 'We develop IPhone & Android apps, Mobile Games for startups and enterprises. Our award winning team of mobile developers and designers will deliver perfection.' 
        ), 
        'services' => array( 
            'header' => 'Leaders in iPhone & iPad, Android Apps and Game Development | MobiWhiz', 
            'keywords' => 'iOS apps, iPhone apps, Android Apps, Mobile Games, Game Development, Web apps, mobile design', 
            'description' => 'Developers of top notch native iOS, Android, and Mobile Game. Our team work with startups and enterprises to create mobile apps that are best in the market.' 
        ), 
        'portfolio' => array( 
            'header' => 'iOS, Android and Mobile Game Portfolio for Startups and Enterprises | MobiWhiz', 
            'keywords' => 'MobiWhiz team have worked on some of the unique ideas and have created award winning mobile apps for startups and enterprises.', 
            'description' => 'Award Winning Portfolio, Android Apps, IPhone and IPad Apps, Mobile Games' 
        ), 
        'approach' => array( 
            'header' => 'Mobile Application Design and Development Process | MobiWhiz', 
            'keywords' => 'App Strategy, App Design, App Development, App Marketing.', 
            'description' => 'MobiWhiz approach starts with a strategy, creating amazing designs with rock solid development and then marketing of your apps and mobile games.' 
        ), 
        'industries' => array( 
            'header' => 'Mobile Apps and Games developed for various Industries | MobiWhiz', 
            'keywords' => 'Mobile Apps and Game Industries, Android Apps, IPhone and IPad Apps, Mobile Games', 
            'description' => 'MobiWhiz have developed mobile apps and games for startups and enterprises in various industries' 
        ), 
        'about' => array( 
            'header' => 'Mobile Apps and Game Development Company, Yardley PA | MobiWhiz', 
            'keywords' => 'We are a team of certified designers and developers with unique skill set to develop mobile apps and game development for top brands.', 
            'description' => 'We are a team of certified designers and developers with unique skill set to develop mobile apps and game development for top brands.' 
        ) , 
        'contact' => array( 
            'header' => 'Talk to Us About Your Project, Yardley PA | MobiWhiz', 
            'keywords' => 'if you are a startup or an enterprise and have a great app Idea, talk to our app strategist to convert your app idea into success.', 
            'description' => 'Mobile Apps and Game Development Company, Yardley PA, Android Apps, IPhone and IPad Apps, Mobile Games' 
        ) 
        );
        $page = $_SERVER['REQUEST_URI'];
        // echo $page."<br>";
        $page = explode('.', $page);
        $page = $page[0];

        //echo in_array($page, $metas);
        //if ( isset( $page ) && in_array($page, $metas) )
        if($page=="" || $page=="/" || $page=="/index")
        {
          ?>
            <title><?php echo $metas['index']['header']; ?></title>
            <meta name="description" content="<?php echo $metas['index']['description']; ?>" >
            <meta name="keywords" content="<?php echo $metas['index']['keywords']; ?>" >
        <?php
        }elseif($page=="/services")
        {
            ?>
          <title><?php echo $metas["services"]['header']; ?></title>
        <meta name="description" content="<?php echo $metas["services"]['description']; ?>" >
        <meta name="keywords" content="<?php echo $metas["services"]['keywords']; ?>" >
        <?php   
        }   

        elseif($page=="/portfolio")
        {
            ?>
           <title><?php echo $metas["portfolio"]['header']; ?></title>
        <meta name="description" content="<?php echo $metas["portfolio"]['description']; ?>" >
        <meta name="keywords" content="<?php echo $metas["portfolio"]['keywords']; ?>" >
        <?php   
        }   

        elseif($page=="/approach")
        {

            ?>
           <title><?php echo $metas["approach"]['header']; ?></title>
        <meta name="description" content="<?php echo $metas["approach"]['description']; ?>" >
        <meta name="keywords" content="<?php echo $metas["approach"]['keywords']; ?>" >
        <?php   
        }   
        elseif($page=="/industries")
        {
            ?>
          <title><?php echo $metas["industries"]['header']; ?></title>
        <meta name="description" content="<?php echo $metas["industries"]['description']; ?>" >
        <meta name="keywords" content="<?php echo $metas["industries"]['keywords']; ?>" >
        <?php   
        }   

        elseif($page=="/about")
        {
            ?>
           <title><?php echo $metas["about"]['header']; ?></title>
        <meta name="description" content="<?php echo $metas["about"]['description']; ?>" >
        <meta name="keywords" content="<?php echo $metas["about"]['keywords']; ?>" >
        <?php   
        }   

        else if($page=="/contact")
        {
            ?>
           <title><?php echo $metas["contact"]['header']; ?></title>
        <meta name="description" content="<?php echo $metas["contact"]['description']; ?>" >
        <meta name="keywords" content="<?php echo $metas["contact"]['keywords']; ?>" >
        <?php   
        }   

        else 
        {
            ?>
             <title><?php echo $metas['index']['header']; ?></title>
            <meta name="description" content="<?php echo $metas['index']['description']; ?>" >
            <meta name="keywords" content="<?php echo $metas['index']['keywords']; ?>" >
        <?php   
        }   
    ?>
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-69242843-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    
    <header>
        <!-- Container start -->
        <div class="container container-nav">
            <!-- Logo div -->
            <div class="col-md-3 logo">
                <a href="index.php"> <img src="images/logo.png" class="img-logo"></a>
            </div>
            <!-- Logo div end -->
            <!-- Navigation start -->
            <div class="col-md-9">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="index.php"> <img src="images/logo-responsive.png" class="logo-responsive"></a>
                            <a href="contact.php" class="button-quote button-quote-responsive">GET FREE QUOTE</a>
                            <!--<a class="navbar-brand" href="#">Brand</a>-->
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-nav2 navbar-right">
                                <li class="bold">
                                    <a href="mailto:info@mobiwhiz.com"><img src="images/msg.png"> info@mobiwhiz.com</a>
                                </li>
                                <li class="bold">
                                    <a href="#"><img src="images/call.png"> (+1)267-933-0030</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right navbar-right2">
                                <!-- <li><a href="index.php">Home</a></li> -->
                                <li><a href="services.php">OUR SERVICES</a></li>
                                <li><a href="portfolio.php">PORTFOLIO</a></li>
                                <li><a href="approach.php">OUR APPROACH</a></li>
                                <li><a href="industries.php">INDUSTRIES</a></li>
                                <li><a href="about.php">ABOUT US</a></li>
                                <li><a href="contact.php" class="button-quote">GET FREE QUOTE</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
            <!-- Navigation End -->
        </div>
        <!-- container  end -->
    </header>
        
