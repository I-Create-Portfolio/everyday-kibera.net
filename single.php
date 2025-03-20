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
    <title>Single</title>

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

    <script type = "text/javascript" >
            function preventBack()
                {window.history.forward();}
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
<?php include ("includes/header.php"); ?>

<!-- header_section_wrapper -->

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="single.html" target="_self">10 galleries to visit in Kibera</a>
        </h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
        <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
    </div>
    <!-- entity_meta -->
    <!-- rating -->

    <div class="entity_social">
        
        <span class="share_ic">Share</span>
        </a>
        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a href="#" class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
        <!--Linkedin-->
        <a href="#" class="icons-sm rss-ic"><i class="fa fa-linkedin"> </i></a>
        <span class="arrow">&raquo;</span>
    </div>
    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="assets/img/category_img_top.jpg" alt="-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I
            will give you a complete account of the system, and expound the actual teachings of the great explorer of
            the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
            because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
            consequences that are extremely painful. </p>
    </div>
    <!-- entity_content -->

</div>
<!-- entity_wrapper -->


<!-- entity_wrapper -->

<div class="category_article_wrapper">
    <!-- entity_title -->
    <!-- entity_social -->

    <div class="row">
        <div class="col-md-7">
            <div id="d-news-carousal" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="assets/img/category_img9.jpg" alt="Chania">
                    </div>
                    <!--_news_item-->
                    <div class="item">
                        <img class="img-responsive" src="assets/img/category_img13.jpg" alt="Chania">
                    </div>
                    <!--_news_item-->
                    <div class="item">
                        <img class="img-responsive" src="assets/img/category_img14.jpg" alt="Chania">
                    </div>
                    <!--_news_item-->
                    <div class="item">
                        <img class="img-responsive" src="assets/img/category_img15.jpg" alt="Chania">
                    </div>
                    <!--_news_item-->

                    <!-- Left and right controls -->
                    <div class="control-wrapper">
                        <a class="left carousel-control" href="#d-news-carousal" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
                        <a class="right carousel-control" href="#d-news-carousal" role="button"
                           data-slide="next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                    </div>

                </div>
                <!--carousel-inner-->

            </div>
            <!--carousel-->

        </div>
        <!-- col-md-7 -->

        <div class="col-md-5">
            <div class="right_category_image">
                <img class="img-responsive" src="assets/img/category_img10.jpg" alt="-top">
            </div>
            <!--carousel-->

            <div class="right_category_image">
                <img class="img-responsive" src="assets/img/category_img11.jpg" alt="-top">
            </div>
            <!--carousel-->

        </div>
        <!-- col-md-5 -->

    </div>
    <!-- row -->

    <div class="entity_content">
        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I
            will give you a complete account of the system, and expound the actual teachings of the great explorer of
            the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
            because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
            consequences that are extremely painful. </p>
    </div>
    <!--entity_content-->

</div>
<!-- entity_wrapper -->

<div class="entity_wrapper">

    <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/h5Jni-vy_5M"></iframe>
    </div>
    <!-- entity_social -->

    <div class="entity_content">
        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I
            will give you a complete account of the system, and expound the actual teachings of the great explorer of
            the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
            because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
            consequences that are extremely painful. </p>
    </div>
    <!--entity_content-->

</div>
<!-- entity_wrapper -->

<div class="entity_wrapper">
    <!-- entity_title -->

    
    <!-- entity_meta -->

    <div class="entity_thumb">
        <img class="img-responsive" src="assets/img/category_img12.jpg" alt="-top">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I
            will give you a complete account of the system, and expound the actual teachings of the great explorer of
            the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
            because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
            consequences that are extremely painful. </p>
    </div>
    <!-- entity_content -->

</div>
<!-- entity_wrapper -->
<!-- entity_wrapper -->

<nav aria-label="Page navigation" class="pagination_section">
    <ul class="pagination">
        <li>
            <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next" class="active"> <span aria-hidden="true">&raquo;</span> </a>
        </li>
    </ul>
</nav>
<!-- navigation -->
</div>
<!-- col-md-8 -->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title">
        <h2><a href="#">Popular Articles</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right1.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Canon launches photo centric 00214 Model supper shutter camera</a>
            </h3> <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt">.</i>share</a>
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right2.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Samsung galaxy note are the supper mobile of all products.</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>.</a> Share
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right3.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>.</a> Shares
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="assets/img/pop_right4.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Kodak Hi-Speed shutter double shot camera comming soon</a>
            </h3>
            <span class="media-date"><a href="#">10Aug- 2015</a>,  by: <a href="#">Eric joan</a></span>

            <div class="widget_article_social">
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-share-alt"></i>.</a> Share
                </span> 
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>4</a> Comments
                </span>
            </div>
        </div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<!-- Popular News -->

</div>
<!-- col-md-4 -->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- entity_section -->

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