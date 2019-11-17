<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/') ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/') ?>css/bootstrap.min.css">
  <style>

  /*    [ Header ]    */
.main-header{
  position: relative;
  padding-top: 130px;
  background-image: url('<?php echo base_url('bootstrap/') ?>/header-bg.png');
  background-size: cover;
  background-position: bottom right;
  background-repeat: no-repeat;
}

.main-header.main-2{
  background-image: url('<?php echo base_url('bootstrap/') ?>/header-bg2.png');
}

.main-header .header-content {
  text-align: left;
  padding-bottom: 170px;
}

.main-header .header-content .title{
  color: #fff;
  font-size: 42px;
  font-weight: 700;
}

.main-header .header-content .text{
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  margin: 15px 0;
  line-height: 28px;
}

.main-header .image{
  -webkit-animation-name: translateY;
          animation-name: translateY;
  -webkit-animation-duration: 4s;
          animation-duration: 4s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
}

.main-header.main-2 .image{
  -webkit-animation-name: scale;
          animation-name: scale;
}
</style>
  <script src="<?php echo base_url('bootstrap/') ?>js/animated.min.js"></script>
</head>
<body>
  <link rel="shortcut icon" href="<?php echo base_url() ?>iconn.ico" type="image/x-icon">

  <!-- Start Navigation Bar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">

  <!-- Navbar Logo -->
  <!-- <a class="navbar-brand" href="<?php echo base_url() ?>"> -->
  <a class="navbar-brand" href="#beranda">
        <img src="<?php echo base_url('bootstrap/') ?>logo.png" alt="Logo" style="width:190px;">
      </a>    
  	
<!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-icon"><i class="fas fa-bars"></i></span>
      </button>

<!-- Header Navbar Links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="#beranda">Beranda</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#promo">Promo</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#kenapa">Bergabung</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#tentang">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pembayaran">Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hubungi">Hubungi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>auth"><p class="section-title"><span style="color: #fff000;">MASUK</span></p></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation Bar -->    

  <!-- Start Header Section -->
      <!-- MENU BERANDA -->
  <section id="beranda"> 
  <section class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5">
          <div class="header-content">

            <!-- Header Title -->
            <h1 class="title" data-aos="fade-down" data-aos-delay="200">Tagihan DC</h1>

            <!-- Header Text -->
            <p class="text">Web Penyedia Pembayaran berbagai macam Tagihan dengan Harga Terjangkau</p>

            <!-- Header Button -->
            <a href="#promo" class="btn-one" class="scroll-down absolute-center">CEK PROMO KUY</a>
          </div>
        </div>

        <div class="col-14 col-lg-7 d-none d-lg-block"><br><br>
          <div class="image">
          
            <!-- Header Image -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img class="img-fluid" src="<?php echo base_url('bootstrap/') ?>atas.png" alt="header" style="width:805px;"/>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>

  <!-- End Header Section -->    

</body>
</html>