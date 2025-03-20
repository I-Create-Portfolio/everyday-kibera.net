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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">RECENT</a>
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">

  <button class="dropdown-btn">EDUCATION
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

  <button class="dropdown-btn">HEALTHCARE
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">HEALTH AND PLANNING</a>
    <a href="#">HEALTHCARE DELIVERY</a>
    <a href="#">POLICY AND GOVERNANCE</a>
  </div>
  <button class="dropdown-btn">POLITICS
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">GOVERNANCE</a>
    <a href="#">EQUITY</a>
    <a href="#">SUSTAINABILITY</a>
  </div>
  <button class="dropdown-btn">TECHNOLOGY
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">SMART CITY</a>
    <a href="#">DIGITAL GOVERNANCE</a>
    <a href="#">AI</a>
  </div>
  <button class="dropdown-btn">ARTS
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>

  <button class="dropdown-btn">HOUSING AND HOMELESNESS
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">HOUSING AFFORDABILITY</a>
    <a href="#">VULNERABLE POPULATION</a>
    <a href="#">CLIMATE AND HOUSING</a>
  </div>
  <button class="dropdown-btn">SPORTS
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">SOCCER</a>
    <a href="#">EVENTS</a>
    <a href="#">OTHER SPORTS</a>
  </div>
</div>

<div id="main">
  
<button class="openbtn" onclick="openNav()">☰ EVERYDAY KIBERA.NET</button><button class = "account"> 
  
<?php  if (isset($_SESSION['username'])) : ?>

<a href=><?php echo $_SESSION['username']; ?></a>

<?php endif ?>

</button>
</div>

<div id="container1">
  <div class="content-wrapper">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">For Gen -Z in Kibera, the Fight has just Began</h2>
    <p class="w3-opacity"><i>We love music</i></p>
    <p class="w3-justify">
      We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <p>        
          On Sunday 11th of August at 2 in the afternoon, the Gen-z sprung into Kibera Town Center for their first ever
          physical meeting.<br>
          5 min read
        </p>

        <div class="entity_social">
            <span><i class="fa fa-share-alt"></i><a href="http://www.x.com/share.php?u=http://https://www.youtube.com/watch?v=IIOMdpWfxlk&amp;"title="PAGE-TITLE-HERE">Share</a>
            </span>
        </div>
        <div id="content-comment">  
        <div id="rightPane">
            <div id="rightPaneTop">
              Point | Comment
            </div>
            <div class="commentBox">
              <div class="commentLogs">
                <div id="container" class="comments"></div>
              </div>
    
              <div class="commentForm">
                <label for="userNameField">Type Your Point | Comment</label><br>
                  <input type="text" id="userNameField" class="userNameField" placeholder="Your Name"/>
                  <textarea id="userComment" class="userComment" placeholder="Type your comment here"></textarea>
                  <button id="addComnt" class="commentBtn">Post</button>
              </div>
                  <script type="text/javascript" src="js/scs_js.js"></script>
              </div>
            </div>
          </div>
      </div>
  </div>
       
    </div>



  <div class="category_article_wrapper"></div>

  </div>

</div>

<?php include ("includes/article-footer.php"); ?>

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