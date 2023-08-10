<?php
session_start();
include 'user/assets/inc/koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="uploadsnews/1472179686_angga.1.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <title>SiAsta</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="user/assets/css/fontawesome.css">
  <link rel="stylesheet" href="user/assets/css/template.css">
  <link rel="stylesheet" href="user/assets/css/owl.css">
  <link rel="stylesheet" href="user/assets/css/lightbox.css">
  <link rel="stylesheet" href="user/assets/css/template.css">

  <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a class="main-logo" href="about.php"><img src="user/assets/images/logo.png" width="80" alt="60"></a> <!-- logo -->
      <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>

    </div>
    <nav id="menu" class="main-nav" role="navigation">

      <ul class="main-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class="has-submenu"><a href="#">IN HERE</a>
          <ul class="sub-menu">
            <li><a href="ekstra.php">Ekstrakulikuler</a></li>
            <li><a href="news.php">News</a></li>
          </ul>
        <li><a href="product.php">Student Products</a></li>
        <li><a href="user/login.php">Login</a></li>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="user/assets/images/vidiobg.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Welcome To School Information System</h6>
        <h2><a class="main-logo" href="about.php"><img src="user/assets/images/logo.png" position="center" width="425" alt=""></a></h2> <!-- ***** Logo Tengah ***** -->
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Siasta</h4>
              </div>
              <div class="content-hide">
                <p>SiAsta adalah sebuah sistem informasi sekolah berbasis website sebagai solusi informasi terpadu untuk sekolah, yang memiliki modul terintegrasi yang dapat diakses oleh seluruh warga Asta Arkananta.</p>
                <div class="scroll-to-section"><a href="about.php">More Info.</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>In Here</h4>
              </div>
              <div class="content-hide">
                <p>Website SiAsta ini selain sebagai bahan memenuhi tugas mapel PKK Prod website ini juga sebagai wadah bagi siswa Asta untuk mendapatkan pengumuman atau berita yang akan disajikan pada halaman news dan berbagai macam ekstra yang ada di SMKN 8 Malang disajikan dalam halaman Ekstra. Semoga Website ini berguna dan bermanfaat bagi warga Asta Arkananta.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Product Student</h4>
              </div>
              <div class="content-hide">
                <p>Product Student atau Produk Siswa merupakan tempat untuk para siswa Asta yang memiliki produk untuk dipamerkan dengan tujuan di perjual belikan kepada seluruh warga Asta.</p>
                <div class="scroll-to-section"><a href="product.php">Read More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright Siasta 2022
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

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
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
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




    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>