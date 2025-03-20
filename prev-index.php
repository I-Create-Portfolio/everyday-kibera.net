<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: register/login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: register/login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Everyday Kibera.Net - Recent News</title>

    <!-- favicon -->
    <link href="assets/img/favicon.png" rel=icon>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">
    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
    
<?php include ("includes/prev-header.php"); ?>
<!-- header_section_wrapper -->

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <figure>
                        <img class="img-responsive top_static_article_img" src="assets/img/m.jpg" alt="feature-top">
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="feature_article_title">
                    <h1>
                        <!-- feature_article_title -->
                        <a href="comment.php" target="_self">World Cup or Finishing High School - Hard choice for Nekesa</a>
                    </h1>
                </div>
                    <!-- feature_article_details -->
                    <div class="feature_article_content">
                        <p>
                            In a move to address mounting concerns about security on Android, Google and Samsung are
                            now issuingIn a move to address mounting concerns about security on Android, Google and Samsung are
                            now issuing.
                            In a move to address mounting concerns about security on Android, Google and Samsung are
                            now issuing.
                        </p>
                    </div>
                </div>  
                
            <!-- Right Side feature article -->
            <div class="col-md-5">
                <div class="feature_static_wrapper">

                    <!-- right_side_feature_article_img -->
                    <div class="feature_article_img">
                        <img class="img-responsive" src="assets/img/kiberagenz/tasha.jpg" alt="feature-top">
                        
                    </div>

                    <!-- right_side_feature_article_headline -->
                    <div class="feature_article_inner">
                        
                        <div class="feature_article_title">
                            <h1><a href="gen-z.php" target="_self">For Gen -Z in Kibera, the fight has just bagan</a></h1>
                        </div>
                    </div>

                </div>

            </div>
            <!-- col-md-5 -->

            <hr class = "line">

            <div class="col-md-5">
                <div class="feature_static_last_wrapper">

                     <!-- feature_article_img -->
                    <div class="feature_article_img">
                        <img class="img-responsive" src="assets/img/owiti/07545.jpg" alt="feature-top">
                       
                    </div>

                     <!-- feature_article_headline -->
                    <div class="feature_article_inner">

                        <div class="feature_article_title">
                            <h1><a href="07545.07545" target="_self">Waiting For the Floods Again</a></h1>
                        </div>
                
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->

<hr class = "line">

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="category_section gadget">

     <!-- category headline -->
    <div class="article_title header_black">
        <h2><a href="category.html" target="_self">Feature Story</a></h2>
    </div>

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">

                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/owiti/07545.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>

                    <!-- top_article_img -->
                    <div class="category_article_title">
                        <h2>
                            <a href="single.html" target="_self">
                                A good news for gadget users Ds tech comming soon
                            </a>
                        </h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                    <!----article_date------>
                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                        procrastinate B2C users after.
                    </div>
                    <!-- category_article_content -->

                </div>
                <!-- category_article_body -->

                <hr class = "line">

                <div class="category_article_list">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="assets/img/cat-mobi-sm1.jpg" alt="Generic placeholder image">
                                <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="single.html" target="_self">
                                    Apple launches photo-centricwrist watch for Android
                                </a>
                            </h3>
                            <span class="media-date">
                                <a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a>
                            </span>
                        </div>
                    </div>

                    <hr class = "line">

                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="assets/img/cat-mobi-sm3.jpg"
                                             alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="single.html" target="_self">Apple launches photo-centric
                                wrist watch for Android
                                </a>
                            </h3>
                            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>
                        </div>
                    </div>
                </div>
                <!-- category_article_list -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">

                    <div class="top_article_img">
                    <iframe width="315px" height="700px" src="https://www.youtube.com/embed/JQKkopG7joY?si=NhrPrXl3oC-oIdD9" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                        encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen></iframe>
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                    </div>
                    <!-- top_article_img -->
                    <div class="category_article_title">
                        <h2>
                            <a href="single.html" target="_self">
                                Apple launches photo-centric app for iPads and Androidtablets
                            </a>
                        </h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date">
                        <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
                    <!-- article_date -->

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                        procrastinate B2C users after installed base benefits. Dramatically visualize customer directed
                        convergence without revolutionary ROI.
                    </div>
                    <!-- category_article_content -->

                </div>
                <!-- category_article_body -->
            </div>
        </div>
        <!-- row -->

    </div>
    <!-- category_article_wrapper -->

    <hr class = "line">

</div>
<!-- Mobile News Section -->

<div class="category_section tablet">
    <!-- Mobile News Section -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/tab_top1.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->           

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">Sony launce a new Android tablets for new
                            generation </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                        procrastinate B2C users after.
                    </div>
                    <!-- category_article_content -->

                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/tab_top2.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->    

                    <div class="category_article_title">
                        <h2>
                            <a href="single.html" target="_self">
                                Technology market see the new Android tablets 
                            </a>
                        </h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date">
                        <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                        procrastinate B2C users after.
                    </div>
                    <!-- category_article_content -->

                </div>
                <!-- category_article_body -->
            </div>
        </div>

    </div>
    <!-- category_article_wrapper -->
    
</div>

<hr class = "line">
<!-- Tablet News Section -->

<div class="category_section mobile">
   
    <!----article_title------>
    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                        <img class="img-responsive" src="assets/img/cat-mobi-left-1.jpg" alt="feature-top">
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        <P> Photo Gordwin Odhiambo</P>
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag">Health Highlites</span>

                <div class="category_article_title">
                    <h2>
                        <a href="single.html" target="_self">
                            Airbnb launches photo-centric app for iPads and Androidtablets.
                        </a>
                    </h2>
                </div>

                <!----category_article_title------>
                <div class="category_article_date">
                    <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                </div>

                <!----category_article_date------>
                <div class="category_article_content">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate
                    B2C users after installed base benefits. Dramatically visualize customer directed convergence
                    without revolutionary ROI.
                </div>
                <!----category_article_content------>

            </div>
        </div>
    </div>

    <p class="divider"></p>
</div>
<!-- Gadget News Section -->

<hr class = "line">

<div class="category_section camera">
    <div class="article_title header_orange">

        <!-- article_title -->
        <h2>
            <a href="category.html" target="_self">Local Technology</a>
        </h2>
    </div>

    <div class="category_article_wrapper">
        <!-- row -->
    </div>
    <!-- category_article_wrapper -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-5">
                <div class="top_article_img">
                    <a href="single.html" target="_self">
                        <img class="img-responsive" src="assets/img/cam_left3.jpg" alt="feature-top">
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                    </a>
                </div>
            </div>

            <div class="col-md-7">
                <div class="category_article_title">
                    <h2><a href="single.php" target="_self">Is Smartphones Encouraging a Lazy Workforce in Kibera?</a></h2>
                </div>
                <!-- category_article_title -->

                <div class="article_date">
                    <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                </div>

                <div class="category_article_content">
                    News outlets push vertical video to the homepage
                </div>
                <!-- category_article_content -->

                <div class="media_social">
                    <span>
                        <a href="#">
                            <i class="fa fa-share-alt"></i>424
                        </a> Shares
                    </span>
                    <span>
                        <a href="#">
                            <i class="fa fa-comments-o"></i>4
                            </a> Comments
                    </span>
                </div>

            </div>
           
        </div>
   
    </div>
    <!-- category_article_wrapper -->
</div>
<!-- Camera News Section -->

<hr class = "line">

<div class="category_section design">
    <div class="article_title">
        <h2>
            <a href="category.html">Art and Design</a>
        </h2>
    </div>
    <!-- row -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            
                                <img class="img-responsive" src="assets/img/futs.jpg" alt="feature-top">
                                <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                            
                        </a>
                    </div>
                    <!-- top_article_img -->
                    <div class="category_article_title">
                        <h2>
                            <a href="single.html" target="_self">My Time is Now - Futwax Daniel</a>
                        </h2>
                    </div>

                    <div class="category_article_date">
                        <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>

                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </div>
                    <!-- category_article_content -->
                </div>
                <!-- category_article_body -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/design_top2.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->
                    <div class="category_article_title">
                        <h2>
                            <a href="single.html" target="_self">Kibera's First Woman Water Engineer </a>
                        </h2>
                    </div>

                    <div class="category_article_date">
                        <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
             
                    <div class="category_article_content">
                        Collaboratively administrate empowered markets via plug-and-play networks.
                    </div>
                    <!-- category_article_content -->
                </div>
                <!-- category_article_body -->

            </div>
        </div>


    <hr class = "line">

    </div>
    <!-- category_article_wrapper -->

    <div class="category_article_wrapper">
        <div class="row">

        </div>
        <!-- top_article_img -->

    </div>
   
</div>

</div>
<!-- Left Section -->

<?php include ("includes/popular-articles.php"); ?>
<!-- Popular News -->

<div class = "vl"></div>

 <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image">
            </a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">The Scourge of Nairobi River</a>
            </h3>
            <span class="media-date">
                <a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a>
            </span>
        </div>
    </div>

<hr class = "line">

 <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">The Top Ten in Kibera This Week</a>
            </h3>
            <span class="media-date">
                <a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a>
            </span>
        </div>
</div>
<!-- Advertisement -->

<hr class = "line">

<!-- Reviews News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
</div>
<!-- Advertisement -->

<hr class = "line">

<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title">
        <h2>
            <a href="#"> Editorial</a>
        </h2>
        <h2>
            Maybe we really are done with news?
        </h2>
    </div>

    <div class="widget_body">
        <img class="img-responsive left" src="assets/img/editor.jpg" alt="Generic placeholder image">

        <p>
            “We’re in a cultural moment that, quite positively, is marked by an enhanced focus on mental 
            health and openly confronting personal struggles. News can be too much.” Matt Carlson.
        </p>

        <p>
            Years of year-end predictions reveal a journalism industry battered about by change. Past 
            predictions chronicle the bumpy adaptation to economic precarity, unstable alliances with platforms,
            so many technology innovations, real physical threats, and a host of other developments that are often 
            challenges and sometimes opportunities.
        </p>

        <button class="btn pink">Read more</button>

    </div>
</div>

<!-- Editor News -->
<hr class = "line">

<div class="widget m30">
    <div class="widget_title">
        <h2>
            <a href="#">Readers Corner</a>
        </h2>
    </div>
    <div class="widget_body">
        <img class="img-responsive left" src="assets/img/reader.jpg" alt="Generic placeholder image">

        <p>
            Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.
        </p>

        <button class="btn pink">Read more</button>

    </div>
</div>

<hr class = "line">
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/podcast.jpg" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form action="#" method="post" class="form-horizontal">
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                    <h2>Sign up for the latest stories</h2>
                </label>

                <div class="col-sm-3">
                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->
<?php include ("includes/footer.php"); ?>

<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="assets/js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="assets/js/script.js"></script>
</body>
</html>