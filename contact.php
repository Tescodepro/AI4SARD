<?php
include 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
  <title>AI4SARD - Contact Us</title>
  <!-- bootstrap min css -->
  <link rel="stylesheet preload" href="assets/css/plugins/fontawesome-6.css" as="style">
  <link rel="stylesheet preload" href="assets/css/plugins/unicons.css" as="style">
  <link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style">
  <link rel="stylesheet preload" href="assets/css/vendor/magnific-popup.css" as="style">
  <link rel="stylesheet preload" href="assets/css/vendor/metismenu.css" as="style">
  <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">
  <!-- custom css style -->
  <link rel="stylesheet preload" href="assets/css/style.css" as="style">
</head>

<body class="inner-page">

  <!-- rts header area five -->
  <?php
  include 'layout/menu.php';
  ?>
  <!-- rts header area five end -->

  <!-- rts breadcrumb area start-->
  <div class="rts-bread-crumb-area bg_image">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-inne">
            <div class="title-area">
              <h1 class="bread-title">Contact Us</h1>
              <div class="inner-wrapper">
                <a href="index.php">Home</a>/
                <a href="" class="active">Contact </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts breadcrumb area end -->

  <!-- rts contact form are start -->
  <div class="rts-contact-form-area rts-section-gap">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4 col-md-12">
          <div id="form-messages"></div>
          <!-- left contact form -->
          <form id="contact-form" class="contact-page-form" action="https://themewant.com/products/html/openup/mailer.php" method="post">
            <h3 class="title">Get In Touch</h3>
            <!-- ingle input start -->
            <div class="single-input">
              <label for="name">Your Name</label>
              <input id="name" name="name" type="text" placeholder="Enter you full name" required>
              <i class="fa-regular fa-user"></i>
            </div>
            <!-- single input end -->
            <!-- ingle input start -->
            <div class="single-input">
              <label for="email">Your Email Address</label>
              <input id="email" name="email" type="email" placeholder="openup@info.com">
              <i class="fa-light fa-envelope"></i>
            </div>
            <!-- single input end -->
            <!-- ingle input start -->
            <div class="single-input">
              <label for="textarea">Enter Your Message</label>
              <textarea name="message" id="textarea" placeholder="Write here your details message"></textarea>
              <i class="fa-light fa-marker"></i>
            </div>
            <!-- single input end -->
            <button class="rts-btn btn-primary">Send Message</button>
          </form>
          <!-- left contact form end -->
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-5 col-md-12">
          <center>
            <h3 class="title">Contact Information</h3>
          </center>
          <div class="map-area-start">
            <div class="col-md-12 text-center">
              <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                  <p>Kwara State University, Malete, Kwara State, Nigeria</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                  <p>+ 2347 0690 896 07</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                  <p>contact@gmail.com</p>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- rts contact form are end -->



  <?php
  include 'layout/footer.php';
  ?>



  <div id="anywhere-home" class="">
  </div>


  <!-- header style two -->
  <?php
  include 'layout/mobile-menu.php';
  ?>
  <!-- header style two End -->


  <!-- rts backto top start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
      </path>
    </svg>
  </div>
  <!-- rts backto top end -->


  <script src="assets/js/vendor/jquery.min.js" defer></script>
  <script src="assets/js/vendor/metismenu.js" defer></script>
  <script src="assets/js/vendor/imagesloaded.pkgd.min.js" defer></script>
  <script src="assets/js/vendor/isotope.pkgd.min.js" defer></script>
  <script src="assets/js/vendor/magnific-popup.js" defer></script>
  <script src="assets/js/plugins/bootstrap.min.js" defer></script>
  <script src="assets/js/plugins/swiper.js" defer></script>
  <script src="assets/js/plugins/contact.form.js" defer></script>
  <script src="assets/js/main.js" defer></script>
</body>

</html>