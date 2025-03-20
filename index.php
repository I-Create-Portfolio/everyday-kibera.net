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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1">

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
     
    <script>
      (function qn(){var e,t,n,a,i;e=window,t=document,n="script",a="https://www.datadoghq-browser-agent.com/us1/v5/datadog-rum.js",e=e[i="DD_RUM"]=e[i]||{q:[],onReady:function(t){e.q.push(t)}},(i=t.createElement(n)).async=1,i.src=a,(a=t.getElementsByTagName(n)[0]).parentNode.insertBefore(i,a)})();
      (function Qn(e){var t=e.service,n=e.env,a=e.version,i=e.sessionSampleRate,r=e.deploymentId,o=e.routeName,l=e.tenant;if(window.DD_RUM){var s=function(){var e={clientToken:"pube5bf68ea68edb54c35106f34e32ff07c",applicationId:"7d0602a0-8ef8-4d39-985b-c3188887e5b3",site:"datadoghq.com",service:"".concat(t,"-client"),env:n,version:a,sessionSampleRate:parseInt(i,10),sessionReplaySampleRate:v,trackUserInteractions:!0,trackResources:!0,trackLongTasks:!0,trackViewsManually:!0,defaultPrivacyLevel:"mask-user-input",allowedTracingUrls:m,traceSampleRate:20,useCrossSiteSessionCookie:!0,useSecureSessionCookie:!0};u&&(e=Object.assign(e,h)),window.DD_RUM.init(e);var s="web";u&&(s=window.config&&window.config.OS&&"ANDROID"===window.config.OS.toUpperCase()?"android":"ios");var c={billing:{environment:n,deployment:{id:r}},dvsp:{tenant:l},route:{name:o},webview:p,preloaded:u,appType:s};u&&(c=Object.assign(c,g)),window.DD_RUM.setGlobalContextProperty("nyt",c),window.DD_RUM.startView({name:o});var d=/nyt-a=(.*?)(;|$)/.exec(document.cookie);if(null!==d&&window.DD_RUM.setUser({id:d[1]}),u){var f=(window.asset||{}).url,b=void 0===f?"":f;window.DD_RUM.setGlobalContextProperty("url",b);var y=window.getNativeBridgeCookie("nyt-a");y&&window.DD_RUM.setUser({id:y})}},c=window.vi&&window.vi.webviewEnvironment||{},d=c.isPreloaded,u=void 0!==d&&d,f=c.isInWebview,p=void 0!==f&&f,m=[/https:\/\/samizdat-graphql.*\.nytimes\.com/],g={},h={},v=100;u&&(m=[/[https|http|nytresource]:\/\/.*\.nytimes\.com/,/[https|http|nytresource]:\/\/.*\.nyt\.com/],g={team:"web-platforms"},v=0,h={trackFrustrations:!0,allowFallbackToLocalStorage:!0}),window.DD_RUM.onReady(s),window.__isUnitTestEnv&&(window.__testDataDogOnReady=s)}})({"service":"vi","env":"prd","version":"vi-newsreader@v6700-c281f8f","sessionSampleRate":"1","deploymentId":"aws-491988406224","routeName":"homepage","tenant":"web-platforms"});
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
    
<?php include ("includes/header.php"); ?>
<!-- header_section_wrapper -->

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <figure>
                        <img class="img-responsive top_static_article_img" src="assets/img/m.jpg" alt="feature-top">
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday kibera.Net</figcaption>
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
                        
                            <p>In a move to address mounting concerns about security on Android, Google and Samsung are
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
                <div class = "vl"></div>
                    <!-- right_side_feature_article_img -->
                    <div class="feature_article_img">
                        <img class="img-responsive" src="assets/img/kiberagenz/tasha.jpg" alt="feature-top">
                        
                    </div>

                    <!-- right_side_feature_article_headline -->
                    <div class="feature_article_inner">
                        
                        <div class="feature_article_title">
                            <h1><a href="gen-zz.php" target="_self">For Gen -Z in Kibera, the fight has just Began</a></h1>
                        </div>
                    </div>

                </div>
            </div>
            <!-- col-md-5 -->

            <hr class = "line">

            <div class="col-md-5">
                <div class="feature_static_last_wrapper">

                    <div class = "vl"></div>
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
        <h2>Feature Story<span class="caret"></h2>
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
                                Five profiles and a first-person approach give dignity to the many facets of homelessness
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
                               
                            </a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="single.html" target="_self">
                                    “I’m-not-a-journalist” newspaper columnist writes about community, parenting and letting go
                                </a>
                            </h3>
                            <span class="media-date">
                                <a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a>
                            </span>
                        </div>
                    </div>

                </div>
                <!-- category_article_list -->

            </div>
            <!-- col-md-6 -->

            <div class="col-md-6">
                <div class="category_article_body">

                    <div class="top_article_img">
                    <section class="wow fadeIn example no-padding no-transition homeBanner">
                        <div id="video" class="hidden-xs loaded">
                        <iframe width="350" height="450" src="https://www.youtube.com/embed/EqluD6DHH8c?si=zsQ9U_7R2m_AEcGe" 
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div> 
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                    </div>
                    <div class = "vl"></div>
                    <!-- top_article_img -->
                    <div class="category_article_title">
                        <h2>
                            <a href="single.html" target="_self">
                                Triple Muse: A Line in Waiting, a local Tune in a Public shower
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
                            <img class="img-responsive" src="assets/img/owiti/07530_2.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->           

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">Documentary Film in the Public Interest
                        </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                    <!----article_date------>
                    <!-- article_date -->

                    <div class="category_article_content">
                        “Why’s this so good?” – The badass women edition 
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
                            <img class="img-responsive" src="assets/img/owiti/07530_2.jpg " alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->    
                    
                    <div class = "vl"></div>

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
                        <img class="img-responsive" src="assets/img/owiti/07530_2.jpg" alt="feature-top">
                        <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                    </a>
                </div>
                <!----top_article_img------>
            </div>
            <div class="col-md-6">
                <span class="tag">Health Highlites<span class="caret"></span>

                <div class="category_article_title">
                    <h2>
                        <a href="single.html" target="_self">
                            Daring to bring humor and wonder to serious subjects
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
<!-- Camera News Section -->

<hr class = "line">

<div class="category_section design">
    <div class="article_title">
        <h2>
            <a href="category.html">Art<span class="caret"></a>
        </h2>
    </div>
    <!-- row -->

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="category_article_body">
                    <div class="top_article_img">
                        <a href="single.html" target="_self">
                            <img class="img-responsive" src="assets/img/owiti/07530_2.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->           

                    <div class="category_article_title">
                        <h2><a href="single.html" target="_self">Documentary Film in the Public Interest
                        </a></h2>
                    </div>
                    <!-- category_article_title -->

                    <div class="article_date"><a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a></div>
                    <!----article_date------>

                    <div class="category_article_content">
                        “Why’s this so good?” – The badass women edition 
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
                            <img class="img-responsive" src="assets/img/owiti/07530_2.jpg" alt="feature-top">
                            <figcaption class = "photo_caption">Gordwin Odhiambo/everyday</figcaption>
                        </a>
                    </div>
                    <!-- top_article_img -->
                    
                    <div class = "vl"></div>

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

        <?php include ("sign-up.php"); ?>

    </div>
    <!-- category_article_wrapper -->
   
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
                <a href="single.html" target="_self">
                    When a profile is also about art is also about climate change 
                    is also about grief
                </a>
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
            How to wed personal experience and journalistic discipline
        </h2>
    </div>

    <div class="widget_body">
        <img class="img-responsive left" src="assets/img/editor.jpg" alt="Generic placeholder image">

        <p>
            Some journalistic tenets are almost sacred, among them: The story is not about us.But sometimes, 
            the story is. Or at least the journalist is living the same story as his… 
        </p>

        <p>
            Years of year-end predictions reveal a journalism industry battered about by change. Past 
            predictions chronicle the bumpy adaptation to economic precarity, unstable alliances with platforms,
            so many technology innovations, real physical threats, and a host of other developments that are often 
            challenges and sometimes opportunities.
        </p>
    </div>
</div>

<!-- Editor News -->
<hr class = "line">

<div class="widget m30">
    <div class="widget_body">
        <img class="img-responsive left" src="assets/img/reader.jpg" alt="Generic placeholder image">

        <p>
            Narrative Journalism
        </p>
          <p>
            Years of year-end predictions reveal a journalism industry battered about by change. Past 
            predictions chronicle the bumpy adaptation to economic precarity, unstable alliances with platforms,
            so many technology innovations, real physical threats, and a host of other developments that are often 
            challenges and sometimes opportunities.
        </p>
    </div>
</div>

<hr class = "line">
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
<div class="widget_title">
        <h2>
            <a href="#"> BENCHO Sports Podcast</a>
        </h2>
        <p>
            FANS ACT AS SCOUTS ON BEHALF OF THEIR TEAMS - MELO
        </p>
    </div>
<iframe width="400" height="300" 
src="https://www.youtube.com/embed/5ZgBMcXTPVI?si=5wo9F9koR0g0Hhyn" title="YouTube video player" 
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
</iframe>
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
</html