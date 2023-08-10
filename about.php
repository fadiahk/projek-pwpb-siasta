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
  <link rel="stylesheet" href="user/assets/css/flex-slider.css">
  <link rel="stylesheet" href="user/assets/css/fontawesome.css">
  <link rel="stylesheet" href="user/assets/css/templatemo-grad-school.css">
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
      <a class="main-logo" href="about.php"><img src="user/assets/images/logo.png" width="70" alt="40"></a>
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
        <li><a href="user/login.php">Login</a></li>
        </li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <!-- ***** Main Banner Area End ***** -->

  <section class="section why-us pt-5" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
          <br>
          <br>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>About Siasta 8</a></li>
              <li><a href='#tabs-2'>Visi Misi</a></li>
              <li><a href='#tabs-3'>Sejarah Asta Arkananta</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="user/assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>About Siasta 8</h4>
                    <p>Siasta 8 membantu sekolah untuk mengakomodir kegiatan internal sekolah mencangkup informasi sekolah dan merekatkan komunikasi antara pihak sekolah dengan siswa maupun walisiswa. Dengan teknologi informasi dan memanfaatkan perkembangannya, sistem informasi sekolah dapat diselenggarakan lebih efektif, efisien, dan fleksibel. Siasta 8 dikembangkan berdasarkan kebutuhan sekolah dan perkembangan teknologi informasi yang sangat cepat.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="user/assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Visi Misi</h4>
                    <p>Terwujudnya sekolah model bermutu unggul, bersertifikasi lembaga internasional, berkarakter berdasarkan, IMTAQ dan IPTEK, berkompeten dibidang keahlian serta berbudaya Lingkungan.</p>
                    <p>Model artinya memiliki ciri atau gaya sendiri di atas standar sekolah lainya. Unggul artinya memiliki prestasi akademik dan non akademik serta berkompeten dibidangnya.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="user/assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Sejarah Asta Arkananta</h4>
                    <p>SMK Negeri 8 Malang merupakan salah satu Sekolah Menengah Kejuruan Negeri yang berusia relatif masih berusia cukup muda Kota Malang. Sekolah yang terletak pada kawasan Kecamatan Blimbing ini mulai berdiri sejak 3 Juli 2005.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i>Copyright SiAsta 2022 
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