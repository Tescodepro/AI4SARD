<?php
include 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">
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
                            <h1 class="bread-title">About AI4SARD</h1>
                            <div class="inner-wrapper">
                                <a href="index.php">Home</a>/
                                <a href="" class="active">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumb area end -->

    <!-- about section one -->
    <div class="about-section-one inner-about rts-section-gap">
        <div class="container" style="margin-top: -10px;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-area">
                        <img src="assets/images/about/1.png" alt="thumbanil">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="about-p-right">
                        <div class="title-left-area">
                            <span class="pre-title-bg">About</span>
                            <h3 class="title">
                                Artificial Intelligence <br>for Sustainable Agriculture <br>and Rural Development (AI4SARD)

                            </h3>
                        </div>
                        <div class="inner-content">
                            <p class="disc-l">
                                The AI4SARD is a research network focused on the application of artificial intelligence for sustainable agriculture and rural development.
                            </p>
                            <p class="disc-l">
                                The group, consisting of researchers from diverse research backgrounds, including Agriculture, Mathematics and Statistics, Computer Science, Electrical and Computer Engineering, was established around December 2022.
                            </p>
                            <p class="disc-l">
                                Our goal is to explore and advance the use of responsible AI technologies to support and enhance sustainable agricultural practices in rural areas, with the aim of promoting economic and social development in these regions.
                            </p>
                            <p class="disc-1">
                                We seek to use AI technologies to address challenges facing the agriculture and rural sectors, including but not limited to, precision farming, yield prediction, pest and disease management, resource optimization, and rural socio-economic development. We are open to collaborations in this exciting and important research endeavor. Our group is open to researchers from all disciplines and fields who are interested in applying AI to agriculture and rural development. See below profiles of research team members.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section one end -->

    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-conter-area">
                        <span class="pre-title-bg">Team</span>
                        <h2 class="title">
                            AI4SARD Dedicated Team
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <?php
                $teams = mysqli_query($connect, "SELECT * FROM teams");
                while ($team_row = mysqli_fetch_array($teams)) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="team-area-ab-wrapper">
                            <div class="thumbnail">
                               <?php  if($team_row['image'] == null) {
                                echo '<img src="assets/images/team/placeholder.png" alt="team">';
                               }else{
                                $image = $team_row['image'];
                                echo '<img src="assets/images/team/'.$image.'" alt="team">';
                               } ?>
                            </div>
                            <div class="inner-content">
                                <a href="team_details.php?id=<?php echo $team_row['id']; ?>">
                                    <h5 class="title"><?php echo $team_row['name']; ?></h5>
                                </a>
                                <span><?php echo $team_row['position']; ?></span>
                                <div class="social-icon">
                                    <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-behance"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- rts team area ewnd -->

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