<a?php
include '../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">
  <title>AI4SARD - Gallery</title>
  <!-- bootstrap min css -->
  <link rel="stylesheet preload" href="assets/css/plugins/fontawesome-6.css" as="style">
  <link rel="stylesheet preload" href="assets/css/plugins/unicons.css" as="style">
  <link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style">
  <link rel="stylesheet preload" href="assets/css/vendor/magnific-popup.css" as="style">
  <link rel="stylesheet preload" href="assets/css/vendor/metismenu.css" as="style">
  <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">
  <!-- custom css style -->
  <link rel="stylesheet preload" href="assets/css/style.css" as="style">
  <style>
    /* Center website */
    .main {
      max-width: 1000px;
      margin: auto;
    }

    h1 {
      font-size: 50px;
      word-break: break-all;
    }

    .row {
      margin: 10px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row>.column {
      padding: 8px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      display: none;
      /* Hide all elements by default */
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }

    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }

    .btn-box {
      width: 100%;
      padding: 5px;
      display: flex;
      justify-content:space-around;
    }

    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      /* padding: 12px ; */
      background-color: #52ed3e;
      cursor: pointer;
      width: 20%;
      color:#ffffff;
      font-size:medium;
    }

    .btn:hover {
      background-color: #3EB75E;
    }

    .btn.active {
      background-color: #3EB75E;
      color: white;
    }
  </style>
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
          <h3 class="title">Gallery</h3>

          <div class="main">

            <div id="myBtnContainer" class="btn-box">
              <button class="btn active" onclick="filterSelection('all')"> Show all</button>
              <button class="btn" onclick="filterSelection(' non_cash_revolving_loan')"> Non-cash Revolving Loan</button>
              <button class="btn" onclick="filterSelection('cars')"> International Conference</button>
            </div>

            <!-- Portfolio Gallery Grid -->
            <div class="row">
              <div class="column non_cash_revolving_loan">
                <div class="content">
                
                  <a href="non-cash-revolving-loan_report.php"> <img  src="assets/images/gallery/loan1.jpg" alt="loan1" style="width:100%; border-radius:10px; border: 3px solid #3EB75E; height:200px;"> </a>
                  <h6 style="text-align:center; padding:10px;">Non-cash Revolving Loan</h6>
                </div>
              </div>
              <div class="column non_cash_revolving_loan">
                <div class="content">
                 <a href="non-cash-revolving-loan_report.php"><img  src="assets/images/gallery/loan2.jpg" alt="loan1" style="width:100%; border-radius:10px; border: 3px solid #3EB75E; height:200px;"></a>
                 <h6 style="text-align:center; padding:10px;">Non-cash Revolving Loan</h6>
                </div>
              </div>

              <div class="column cars">
                <div class="content">
                <a href="international-conference_report.php">  <img  src="assets/images/gallery/car1.jpg" alt="Car" style="width:100%; border-radius:10px; border: 3px solid #3EB75E; height:200px;"></a>
                  <h6 style="text-align:center; padding:10px;">International Conference</h6>
                </div>
              </div>
              <div class="column cars">
                <di class="content">
                 <a href="international-conference_report.php"><img  src="assets/images/gallery/car2.jpg" alt="Car" style="width:100%; border-radius:10px; border: 3px solid #3EB75E; height:200px;"></a>
                  <h6 style="text-align:center; padding:10px;">International Conference</h6>
                </div>
              </div>
              
              <!-- END GRID -->
            </div>

            <!-- END MAIN -->
          </div>

        </div>
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
  <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }

  </script>
</body>

</html>