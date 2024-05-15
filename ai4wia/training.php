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
  <title>AI4SARD - Training</title>
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
  <div class="rts-contact-form-area rts-section-gap pt--190">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-12 col-md-12">
          <h3 class="title">Training Material</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">S/NO</th>
                <th scope="col">Title</th>
                <th scope="col">Speaker</th>
                <th scope="col">Slide</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $count = 1;
              $trainings = mysqli_query($connect, "SELECT * FROM trainings");
              while ($team_row = mysqli_fetch_array($trainings)) {
                ?>
                <tr>
                  <th scope="row"> <?php echo $count++; ?></th>
                  <td><?php echo $team_row['title']; ?></td>
                  <td><?php echo $team_row['speaker']; ?></td>
                  <td><a href="files/<?php echo $team_row['materials']; ?>" class="btn btn-success" target="_blank"
                      rel="noopener noreferrer">Downlaod Slide</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
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