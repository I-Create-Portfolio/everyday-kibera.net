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
    <title>Guest Contributers | Everyday Kibera.Net</title>

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

        <h4> 
            <H1>FAQs</H1>
        </h4>

        <button type="button" class="collapsible">What is Everyday Kibera.Net (Everyday Kibera(dot)net )</button>
            <div class="content">
                <P>
                    Everyday Kibera.Net is an independent, non-profit community newspaper providing reliable and thoroughly 
                    verified information on topics often omitted in the mainstream media. 
                    The newspaper is based in Kibera slums and is run by storytelling and news enthusiasts and innovators
                    who bring their varied expertise to the Everyday Kibera.Net.
                </P>
            </div>

        <button type="button" class="collapsible">Can stories from this website be republished?</button>
            <div class="content">
                <p>
                    Yes, if you would like to publish a story from this site, you can contact us. 
                    First, please review our <a href="#code-of-ethics.php" target = "blank">Code of conduct</a> to see if it suits you and that you can adhere to it.
                </P>
            </div>

        <button type="button" class="collapsible">Can your team be hired to do a story for someone else even if not in Kibera?</button>
            <div class="content">
                <p>
                Yes, through our brand agency, EK .Net, you can hire a team. Our brand team includes highly qualified people in
                nearly all areas of media and web production.
                </p>
            </div>

        <button type="button" class="collapsible">How can we partner | Collaborate?</button>
            <div class="content">
                <p>
                    We can partner in a number of ways including story collaboration, production and 
                    fixing and data provision among others.
                </P>    
            </div>

        <button type="button" class="collapsible">Who are the people doing the stories|news? </button>
            <div class="content">
                <p>     
                    You can learn more about, <a href = "team/people.html">our team here.</a>
                </p>
            </div>

            <button type="button" class="collapsible">Do you provide apprennteship | internship | job opportunities?</button>
            <div class="content">
                <p>     
                    Currently, our team is small, and it's still working to bring us on foot. 
                    We encourage people who are voluntarily interested in knowing how we are working to come and be part of us. 
                    These can be students, professionals, experts, NGOs...in various fields of media and storytelling.
                </p>
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