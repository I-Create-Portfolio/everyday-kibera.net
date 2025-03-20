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
    
    <title>Careers | Everyday Kibera.Net</title>

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
            <strong>Careers</strong>
        </h1>

        <p>
            To thoroughly research and produce local stories, we invite and work with highly qualified individuals who 
            are keen on advancing informed citizenry in the community. They are photographers, reporters, designers 
            developers, and more people who bring together their varied expertise to the Everyday Kibera.Net.
        </p>

        <h1>
            <b>Our Model</b>
        </h1>
        <p>
            We run on a system that is concentrating with mostly young journalists and storytellers.
            This can be journalism students in their late college studies, visual storytellers with multi-media skills, 
            volunteers and interns from international schools (Other African Countries, The Americas, Europe and Asia). 
            Our platfrom provides an opportunity to produce your first by-line internationally. We were specifically 
            created to allow more upcoming journalists to produce local stories they care about that'll be missed by 
            international publications.
        </p>
        <P>
            Currently, the platform is managed by three people who despite no pay have been able to produce 
            compeling local stories. We aim to partner with organisations, learning institutions and media 
            practitioners to assist in steering forth the awakening local journalism.
        </P>
        </p>
        <p>
            The current pool of reporters and photographers are mainly the trainees from the everyday Kibera storytelling platform. 
            The platform organises advanced media training workshops with storytellers from Kibera and the general Nairobi area.
        </p>

        <h1> 
            <b>Come and Help Shape the Future of local journalism</b>
        </h1>

        <p>
            We welcome everyone who's willing to learn and also share their ideas in producing compelling stories. 
            We've always aimed at providing information and guidance to help anyone working with us navigate their daily 
            life and work - whether it’s understanding health risks or getting advice on staying sane and productive at home. 
            This would not be possible without our journalists, data scientists, marketers, designers, engineers, project managers and many, many more.
        </p>
        <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/m.jpg" alt="feature-top"> 
            <figcaption class = "photo_caption">Gordwin Odhiambo/everydaykibera.net</figcaption>
        </div>

        <h1>
            <b>Explore the Opportunities</b>
        </h1>

        <button type="button" class="collapsible">Journalism - Internship and Volunteers</button>
        <div class="content">
            <p>
                We hire expert journalists and allow them the time and resources to create in-depth, independent, original 
                reporting in the public interest. We provide the context and analysis that readers need to better understand 
                what’s happening around them. We have lawyers covering law, doctors covering health, former U.S. Marines
                covering war, and economists and M.B.A.s covering the economy. From our headquarters in New York to Houston 
                and Silicon Valley, from the U.S./Mexico border to Baghdad, we report without fear or favor, and our 
                investigations result in concrete, meaningful action, whether it’s sexual harassment, workplace culture and 
                ethics or government programs and corruption.
            </p>
            </div>

        <button type="button" class="collapsible">Newsroom - Internship and Volunteers</button>
            <div class="content">
             <p>
                Our work has never been more essential — or more exciting. We are trying new things every day, creating new 
                products and experiences, and finding new and compelling ways to tell stories. Our audience, once confined to 
                a single city, now stretches around the globe. But the values that have long shaped The Times — independence, 
                integrity, curiosity, respect, collaboration, excellence— remain immutable. Those values animate our culture, and our culture begins with our people. We seek people with different backgrounds, different skills, different lived experiences. We need experienced journalists and those beginning their careers. We need people in New York and in countries around the world. We need reporters and editors, coders, visual and graphics artists, sound engineers and audience experts.
                If you have the ambition to report the stories that matter, if you want your work to reach an audience unmatched
                in size, loyalty or influence, if you want to help continue our transition from the world’s most celebrated newspaper to the world’s most innovative digital news operation, we need you.</p>
            </div>
        <button type="button" class="collapsible">Product and Design - Internship and Volunteers</button>
            <div class="content">
             <p>
                The product and design team is responsible for imagining, building and maintaining the core set of 
                experiences through which our readers discover and consume our journalism across all platforms
                We are responsible for designing, building and maintaining our iOS and Android applications, our 
                website, our email newsletter templates, our multimedia experiences and tools that help our readers 
                save, follow and otherwise interact with our journalism across these platforms.
            </p>
            </div>
        <button type="button" class="collapsible">Marketing - Internship and Volunteers</button>
            <div class="content">
             <p>
                Marketing plays a key part in extending the journalistic legacy and mission of The Times into the future. 
                Our job is to answer the question, “Why is quality journalism worth paying for?” We create purposeful 
                marketing that demonstrates our mission, how we’re leading the journalism industry and all the ways our 
                readers can subscribe. Above all, we strive to be timely, straightforward and relevant in our marketing — 
                to prove how much we value our readers and subscribers. 
            </p>
            </div>

        <button type="button" class="collapsible">Training Initiatives - Internship and Volunteers</button>
            <div class="content">
             <p>
                We believe that reaching younger minds is critical, and we have worked hand in hand with educational 
                institutions across the country to attract the next generation of readers. We are committed to a number 
                of efforts that teach students about the world and the news media from a young age into adulthood.
             </p>
            </div>
        <p>
            <b>
                Get to know some of the <a href = "team/index.html" target = "blank">people we work with</a>
            </b>
        </p>
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