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
    
    <title>Code of Ethics | Everyday Kibera.Net</title>

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
            <strong>Code of Ethics</strong>
        </h1>
        <p>
            This code is designed to set out our expectations and aspirations for the conduct of our stories contributors.
        </p>

        <h1>
            <b>Let the Truth Speak</b>
        </h1>
        <p>
            Our quest is to thorougly reseach and present factul information based on independent judgment.
        </p>

        <h1>
        <b>Sources protection, Solitation, Story bribing</b>
        </h1>
        
        <P>
            Our team should not offer or provide contacts of current or prospective sources unknowingly from us and the source to other persons who might 
            be interested. Please inquire if it's necessary. 
        </P>
        <p>No story will be accepted if we have learned that it is out of solicitation or bribing.</p>
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