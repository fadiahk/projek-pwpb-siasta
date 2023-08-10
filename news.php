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
  <link rel="stylesheet" href="user/assets/css/template.css">
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
        <li><a href="user/login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- Script -->
  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id='tabs'>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-8">
                    <h4>News Asta Arkananta</h4>
                    <p>segala pengumuman mengenai kegiatan, hal perihal mengenai SMKN 8 Malang yang menarik perhatian dan penting untuk disampaikan atau dimuat dalam media massa agar diketahui warga Asta Arkananta.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="owl-carousel owl-theme">

          <?php
          $no = 1;
          $news = mysqli_query($koneksi, "SELECT * FROM news INNER JOIN user on news.id_user = user.id_user;");
          if (mysqli_num_rows($news) > 0) {
            while ($item = mysqli_fetch_array($news)) {
          ?>
              <div class="item">
                <?php
                if ($item['img_news'] != null || $item['img_news'] != '-') {
                ?>
                  <img src="user/uploadsnews/<?php echo $item['img_news']; ?>" alt="Course #<?php echo $no++; ?>">
                <?php
                }
                ?>
                <div class="down-content">
                  <h4><?= $item['judul_news']; ?></h4>
                  <p><?= $item['isi_news']; ?></p>
                  <div class="author-image">
                    <?php
                    if ($item['img_user'] != null || $item['img_user'] != '-') {
                    ?>
                      <img src="user/uploadsuser/<?php echo $item['img_user']; ?>" alt="Author <?php echo $item['id_user']; ?>">
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright SiAsta 2022
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