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

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">RECENT</a>

  <button class="dropdown-btn">EDUCATION
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

  <button class="dropdown-btn">HEALTHCARE
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">HEALTH AND PLANNING</a>
    <a href="#">HEALTHCARE DELIVERY</a>
    <a href="#">POLICY AND GOVERNANCE</a>
  </div>
  <button class="dropdown-btn">POLITICS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">GOVERNANCE</a>
    <a href="#">EQUITY</a>
    <a href="#">SUSTAINABILITY</a>
  </div>
  <button class="dropdown-btn">TECHNOLOGY
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">SMART CITY</a>
    <a href="#">DIGITAL GOVERNANCE</a>
    <a href="#">AI</a>
  </div>
  <button class="dropdown-btn">ARTS
    <i class="fa fa-caret-down"></i>
  </button>

  <button class="dropdown-btn">HOUSING AND HOMELESNESS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">HOUSING AFFORDABILITY</a>
    <a href="#">VULNERABLE POPULATION</a>
    <a href="#">CLIMATE AND HOUSING</a>
  </div>
  <button class="dropdown-btn">SPORTS
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
    <div id="content">
        <h1>
            <strong>For Gen -Z in Kibera, the Fight has just Began</strong>
        </h1>

        <p>        
          On Sunday 11th of August at 2 in the afternoon, the Gen-z sprung into Kibera Town Center for their first ever
          physical meeting.<br>
          5 min read
        </p>

        <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/kiberagenz/tasha.jpg"
                alt="feature-top"> 
                <p class = "caption">Tasha Exclusive<i>Photo by Gordwin Odhiambo / Everyday kibera.net</i></p>
        </div>
        <h5> 
            <b>By Gordwin Odhiambo</b>
        </h5>
          <p>
            The group has been talking and organizing their activities in a WhatsApp group created just a few days at the 
            start of the widespread youth demonstrations a few months ago. They suggested having this gathering to see a way 
            forward after sensing that the demonstrations might fade or even stop because of the recent political activities. 
            Some of them were meeting each other for the first time. Other discussion points included how to be involved in 
            the community in other activities beyond their initial plan.
        </p>
        <p>
          Kibera slums has been a stronghold of Raila Odinga for the past 20 years, and in that period, it has mostly been 
          part of the opposition. This meant that few developments have occurred in the area. On Sundays, the older generation
          usually have a political gathering discussing the trajectory of the country's politics at Kamukunji grounds next to 
          the center. They always discuss in the Luo language - only a sect of people can understand what they are saying. 
        </p>
        <p>
          There is an increased animosity between the generations. While the younger people want fresh ideas in local politics, 
          the older generation are still stuck with the Odingaism; supporting what Raila Odinga suggests. 
          They are not happy with young people doing further demonstrations, especially after Raila initiated the 
          formation of a broadway government that saw four of his political party members appointed to the cabinet. 
          The older generation feels that the demos have bored fruits.
        </p>
        <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/kiberagenz/group.jpg"
                alt="feature-top"> 
                  <p class = "caption">Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et 
                    congue. Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. 
                    <i>Photo by Gordwin Odhiambo / Everyday kibera.net</i>
                  </p>
        </div>
        <p>
          At the center, there was confusion as to who will lead the conversation since it’s a leaderless movement. 
          Samson Agure, a comedian and a talkative person, stepped forth and pointed out issues to be discussed. 
          Among them were why people were leaving the WhatsApp group, what to do next since the demos seem to be over. 
          They let a few people air their views. Ospina, a founder of a community initiative, stepped forth and inquired 
          how many people have the voting cards and how many know the mandate of their leaders. He also suggested that 
          they need to have a strong civic education to empower themselves politically. He finished by strongly 
          recommending some kind of committee on instructorship, not a single person to be responsible for the actions 
          of the group.
        </p>
        <p>Most of them agreed that they are tired, not with the idea of protests but physically and they suggested 
          that If there is going to be further demonstrations they urge everyone to provide a ‘positive vibe’ and 
          influence in one way or the other to those who will be going to the streets.
        </p>
        </p>
          <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/kiberagenz/chair.jpg"
                alt="feature-top"> 
                <p class = "caption">Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. 
                  Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. 
                  <i>Photo by Gordwin Odhiambo / Everyday kibera.net</i></p>
        </div>


      <p>

      David Kinyili, who was the only person who voted 20 years ago for president for Mwai Kibaki observed that President William Ruto is already gearing for the next elections. He talked of how the cabinets were appointed - wide across the country. He reiterated how politicians took advantage of the demos to themselves. ‘If it was not for the demos, Raila couldn’t have left his house,’ Kinyili added. David’s tribe is Kamba and among the people frustrated by the elders' Sunday political gathering while talking in Luo. He’s vying for the next local election to be a chairman of the community. He urged every youth to vote for him.</p>

    <p>Vivian was one of the few ladies available and seconded the idea of having instructors. “While we started as a way to combat some political ideas, there are other ways socially and economically that we can benefit as a group.” She remarked. Tasha, another lady observed that there were a few of them, and she inquired why.</p>


        <div class="feature_article_img">
            <img class="img-responsive top_static_article_img" src="assets/img/kiberagenz/comedy.jpg"
                alt="feature-top"> 

                <p class = "caption">Wisiet sus adipit phasellentum elit condissim consecteturpiscing sapien vivamus et congue. 
                Utvel tris quismod cursus liberos elit nisse curabitur tur parturpis tellenterdum. <i>Photo by Gordwin Odhiambo / Everyday kibera.net</i></p>
        </div>

    </p>

    <p>
        Moses Omondi, a community leader who was among the co starters of the WhatsApp group, though not a Gen-Z appeared for a few minutes during the meeting. He provided a pathway for further activities. He talked of why young people should occupy political, economic and social spaces. “Everything is political and the people you’re seeing engage in politics, you term them by different names like mabani, sangwenya, cartel; they are the ones who lead this community. They have first-hand information of political events around” Moses told the young men to actively engage in social spaces by creating sporting hubs, expose their talents. There were some examples of people who have occupied the spaces, Shady in entertainment, Totti in sports and Ospina in clean-up initiatives. Moses quoted Acts 6:3, </p>

       <p><b> “Brothers and sisters, select from among you seven men of good reputation, full of the Spirit and wisdom, whom we can appoint to this duty.” </b></p>
<p>suggesting that young people should not do things among themselves and that they should listen.</p>

<p>He summarized by urging them to spread influence, power, and glory, giving an example of Kasmuel McOure on his national influence, and how some people are jealous of him. 

The group purported to have the next meeting where they will advance their interests. Some suggested having a political party and others visiting children's homes and having fun activities together. </p>
</p>


         <div class="entity_social">
            <span><i class="fa fa-share-alt"></i><a href="http://www.x.com/share.php?u=http://https://www.youtube.com/watch?v=IIOMdpWfxlk&amp;"title="PAGE-TITLE-HERE">Share</a>
            </span>
        </div>
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