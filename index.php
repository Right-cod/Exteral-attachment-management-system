<?php
session_start();
 
// Destroying session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Attachment Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
   
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
        
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="#" class="nav-link text-left"><h2>Attachement Management System</h2></a>
                </li>

           
                <li>
                  <a href="#stud" class="nav-link text-left">Students</a>
                </li>
                <li>
                  <a href="#Instituition" class="nav-link text-left">Instituition</a>
                </li>
                <li>
                    <a href="#Industrial" class="nav-link text-left">Industrial</a>
                  </li>
                  <li>
                    <a href="./admin/index.php" class="nav-link text-left">Cordinator</a>
                  </li>
              </ul>                                                                           
            </nav>

          </div>
    
         
        </div>
      </div>

    </header>

    
    <div class="hero-slide owl-carousel site-blocks-cover">
   
<div class="intro-section" style="background-image: url('images/blog_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
              <h1>Industrial Assessment</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('images/course_5.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
              <h1>Students</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="intro-section" style="background-image: url('images/blog_2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
              <h1>Institution Assessement</h1>
            </div>
          </div>
        </div>
      </div>

    </div>
    

    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Management Portals</span>
            </h2>
          </div>
        </div>
        <div class="row">
       
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
   <div id="stud">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Students</h2>
                <p>Students update e-logbook, Update Reports,View feedback,Login into Your account </p>
                <p><a href="student" class="btn btn-primary px-4 rounded-0">Sign In</a></p>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
             <div id="Instituition">
            <div class="feature-1 border">
               <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
             
              <div class="feature-1-content">
                <h2>Instituition</h2>
                <p>Track assessment e-logbook,Mark submitted weekly reports,post feedback,Assess Students</p>
                <p><a href="instituition" class="btn btn-primary px-4 rounded-0">Sign In</a></p>
              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
             <div id="Industrial">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Industrial</h2>
                <p>Track e-logbook,Post feedback,Assess Students perfomance,Sign In into Account</p>
                <p><a href="industrial" class="btn btn-primary px-4 rounded-0">Sign In</a></p>
              </div>
            </div> 
          </div>
          </div>
        </div>
      </div>
    </div>


    

 
    

   

    <div class="footer">
      <div class="container">
    

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
<!--<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>-->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>