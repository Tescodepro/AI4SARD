<?php
include 'config/database.php';
if(!isset($_GET['id'])) {
    header("Location: about.php");
}

$id = $_GET['id'];
$teams = mysqli_query($connect, "SELECT * FROM teams WHERE id = '$id' ");
$team_row = mysqli_fetch_array($teams);

                
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>AI4SARD - Home</title>
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
                            <h1 class="bread-title">About</h1>
                            <div class="inner-wrapper">
                                <span> <?php echo $team_row['name']; ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <div class="use-case-details-area rts-section-gapTop">
        <div class="container section-seperatorBottom rts-section-gapBottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-left-area">
                        <span class="pre-title-bg">About</span>
                        <h4 class="title">
                        <?php echo $team_row['name']; ?>
                        </h4><h6><?php echo $team_row['position']; ?></h6>
                        <p class="disc">
                        <?php echo $team_row['bio']; ?>
                        </p>
                        <a href="#" class="rts-btn btn-primary">Start Writing <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--50 mt_sm--50 ">
                    <div class="thumbnail-case-top mt-5">
                        <?php  if($team_row['image'] == null) {
                            echo '<img src="assets/images/team/placeholder.png" alt="team">';
                           }else{
                            $image = $team_row['image'];
                            echo '<img src="assets/images/team/'.$image.'" alt="team">';
                           } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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