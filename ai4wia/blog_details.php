<?php
include '../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">
  <title>AI4SARD - Blog</title>
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

  <!-- rts contact form are start -->
  <div class="rts-contact-form-area rts-section-gap pt--190" style="margin-top:50px;">
    <div class="container">
      <div class="row g-5">
        <?php
        $count = 1;
        $id = $_GET['id'];
        $blogs = mysqli_query($connect, "SELECT * FROM blogs WHERE id ='$id'");
        while ($team_row = mysqli_fetch_array($blogs)) {
          ?>
          <div class="row top-blog-details-start align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb--30">
                            <div class="title-area">
                                <h2 class="title">
                                    <?php echo $team_row['title'] ?>
                                </h2>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="authore-bd-area">
                                <div class="sub-area">
                                    <p>Blog</p>
                                    <span class="deg">Blog Content</span>
                                </div>
                                <div class="sub-area">
                                    <p>Purplish</p>
                                    <span class="deg"><?php echo (new DateTime($team_row['created_at']))->format('F j, Y, g:i A'); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 mt--30">
                            <div class="main-image-big">
                                <img src="assets/images/blog/10.jpg" alt="blog-imaeg">
                            </div>
                        </div> -->
                    </div>
                    <div class="para-area-wrapper">
                        <p class="disc">
                            <?php echo $team_row['body'] ?>
                        </p>
                    </div>

        <?php } ?>
        <br><br>
        <div class="col-lg-3"></div>
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
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
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