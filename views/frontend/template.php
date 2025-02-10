<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png"  href="<?=base_url()?>assets/frontend/img/logoizzatul.png">
  <link rel="manifest" href="<?=base_url()?>assets/frontend/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?=base_url()?>assets/frontend/img/logoizzatul.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>IZZATUL ISLAM KARAWANG</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/linearicons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/animate.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/frontend/css/main.css">
  </head>
  <body>
    <header id="header" id="home">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
            </div>
            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
              <a href="https://wa.me/6289530017036"><span class="lnr lnr-phone-handset"></span> <span class="text">089530017036</span></a>
              <a href="mailto:afriza4192@gmail.com<"><span class="lnr lnr-envelope"></span> <span class="text">  afriza4192@gmail.com</span></a>
            </div>
          </div>
        </div>
    </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex no-padding">
          <div id="logo">
            <a href="<?=site_url('home')?>"><img src="<?=base_url()?>assets/frontend/img/logoizzatul.png" alt="TK IZZATUL ISLAM" title="TK IZZATUL ISLAM" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="active"><a href="<?=site_url('home')?>">Home</a></li>
              <li class="menu-has-children"><a class="text-white">Profil</a>
                <ul>
                  <li><a href="<?=site_url('profil/sejarah')?>">Sejarah TK IZZATUL ISLAM</a></li>
                  <li><a href="<?=site_url('profil/visi_misi')?>">Visi dan Misi</a></li>
                  <li><a href="<?=site_url('profil/struktur')?>">Struktur Organisasi</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a class="text-white" href="#info">Kategori</a>
                <ul>
                  <li><a href="<?=site_url('info/lingkungan')?>">Lingkungan Sekolah</a></li>
                </ul>
              </li>
              <li class="menu-has-children"><a class="text-white" href="#galeri">Galeri</a>
                <ul>
                  <li><a href="<?=site_url('galeri/foto')?>">Galeri Foto</a></li>
                  <li><a href="<?=site_url('galeri/video')?>">Galeri Video</a></li>
                </ul>
              <li><a href="<?=site_url('home/ppdb')?>" class="genric-btn primary small radius">PPDB-Online <script>document.write(new Date().getFullYear());</script></a>
              </li>
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->

    <?=$contents?>

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <a href="<?=site_url('home')?>"><img src="<?=base_url()?>assets/frontend/img/izzatul.png" height="80px" alt="TK IZZATUL ISLAM" title="TK IZZATUL ISLAM" /></a><br><p></p>
              <ul>
                <li><p class="text-white">TK IZZATUL ISLAM KARAWANG <br> Disiplin, Unggul, Terdepan dan Islami</p></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Lokasi Kami</h4>
              <ul class="text-white">
                    <li><i class="fa fa-map-marker fa-lg"></i>Alamat Lengkap Taro sini </li>
                    <li><i class="fa fa-phone fa-lg"></i> No. Telepon taro sini</li>
                    <li><i class="fa fa-envelope fa-lg"></i><a class="text-white" href="mailto:Afriza4192@gmail.com">email sekolah taro sini</a></li>
                    <li><i class="fa fa-clock-o fa-lg"></i> Senin - Jumat<br>08:00 - 12.30</li>
                  </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h4>Maps</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4434416369127!2d107.33847167378177!3d-6.33656146199623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69765555555555%3A0x6594d86fdc1007b1!2sRa%2C%20Tpq%20%26%20Dta%20Izzatul%20Islam!5e0!3m2!1sen!2sid!4v1717057567927!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
          <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> TK IZZATUL ISLAM KARAWANG. All rights reserved.
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="<?=base_url()?>assets/frontend/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/frontend/js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="<?=base_url()?>assets/frontend/js/easing.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/hoverIntent.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/superfish.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/jquery.tabs.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/jquery.nice-select.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/mail-script.js"></script>
    <script src="<?=base_url()?>assets/frontend/js/main.js"></script>
  </body>
</html>
<!-- <iframe src="https://goo.gl/maps/F5VuqzDJButknYXz7" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
