<?php 
  include 'user/assets/inc/koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>SIASTA</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a class="main-logo" href="login.html"><img src="user/assets/images/logo.png" width="70" alt="40"></a>
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>

    </div>
    <nav id="menu" class="main-nav" role="navigation">
      
      <ul class="main-menu">
      <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li class="has-submenu"><a href="#section4">IN HERE</a>
        <ul class="sub-menu">
          <li><a href="ekstra.php">Ekstrakulikuler</a></li>
          <li><a href="news.php">News</a></li>
          </ul>
          <li><a href="product.php">Student Products</a></li>
          <li class="has-submenu"><a href=>LOGIN</a>
            <ul class="sub-menu">
              <li><a href="user/login.php">Login</a></li>
              <li><a href="user/register.php">Register</a></li>
              </ul>
</li>
      </ul>
    </nav>
  </header>

    <!-- Script -->

 

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl-carousel.js"></script>
    <script src="user/assets/js/lightbox.js"></script>
    <script src="user/assets/js/tabs.js"></script>
    <script src="user/assets/js/video.js"></script>
    <script src="user/assets/js/slick-slider.js"></script>
    <script src="user/assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>