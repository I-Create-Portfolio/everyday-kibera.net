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
    <title>Article Details</title>


    <script type="text/javascript" src="jquery/jquery.js"></script>

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


<?php include ("includes/header.php"); ?>

<div id="container1">
  <div class="content-wrapper">
    <div id="content">

        <h1>
            <strong>Harris and Walz Sharpen Attacks on Republicans</strong>
        </h1>

        <p>
        
        Vice President Kamala Harris introduced her running mate, Gov. Tim Walz of Minnesota, who delivered cutting arguments against Donald Trump and JD Vance.</br>

        5 min read

        </p>

        <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/m.jpg"
                alt="feature-top"> 

                <p class = "caption">Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. <i>Photo by Gordwin Odhiambo / Everyday kibera.net</i></p>
        </div>
        <h4> 

            <b>By Gordwin Odhiambo, Peter Otieno</b>

        </h4>
      <p>

        Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. Semperligula curabitae tellentesque nulla trices vestas ristibulum id justo auctor facinia. Natisdonec consequat nibh pellus.

        </p>
      <p>

        <p>

        Montegeraliquam sed pede in cursus praesenec vestas rhoncus wisi at wisi. Condisseloborttis enim et ipsum mauristie id felit adipiscipit ac auctortorttitor sempor. Vitantesqueat sempus non sed et mus sit vivamus purus netus hendiment. Pretiuma diam et id tempus dolor por wisi sed volutpat facilisi.

        </p>
        <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/m.jpg"
                alt="feature-top"> 

                <p class = "caption">Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. <i>Photo by Gordwin Odhiambo / Everyday kibera.net</i></p>
        </div>
      <p>

        Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. Semperligula curabitae tellentesque nulla trices vestas ristibulum id justo auctor facinia. Natisdonec consequat nibh pellus.

        </p>
      <p>

      Vestibusodio euisque id elerisus lacus tincidunt sit malesuada lacus pellus parturpiscing. Pellenterdumat maecenatoque cras a magna nibh et quis diam ames et. Laoremvolutpat ac dolor eget eget temper lacus vestibus velit lacus venean. Magnaipsum tellus morbi leo aliquat nulla convallis pellentesque.

    </p>


         <div class="entity_social">
            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
            <span><i class="fa fa-love-o"></i>4 <a href="#">Comments</a> </span>
        </div>



      


    </div>
     <div id="content-comment">
    
        
        <div id="rightPane">
    
            <div id="rightPaneTop">Comments</div>
    
                  <div class="commentBox">
    
                    <div class="commentLogs">
    
                        <div id="container" class="comments">
                                
    
                        </div>
    
                    </div>
    
                    <div class="commentForm">
    
                        <label for="userNameField">Type Your Comment</label><br>
    
                        <input type="text" id="userNameField" class="userNameField" placeholder="Your Name"/>
    
                        <textarea id="userComment" class="userComment" placeholder="Type your comment here"></textarea>
    
                        <button id="addComnt" class="commentBtn">Post</button>
    
                    </div>
    
                    <script type="text/javascript" src="js/scs_js.js"></script>
    
                    </div>
    
                </div>
    
            </div>
    <div class="category_article_wrapper"></div>

  </div>

<?php include ("includes/footer.php"); ?>

</div>


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