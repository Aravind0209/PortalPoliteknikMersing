<?php

//MAIN
$website = $route->get_website();
$route = $route->request;
date_default_timezone_set("Asia/Kuala_Lumpur");

//class
require_once __DIR__.'/class/aduan.class.php';

$aduans = new AduanController();


$list = $aduans->get_aduan();



?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Polytechnic Mersing </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $website;?>assets/img/logo/mersing-logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= $website;?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/ticker-style.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/style.css">
    <link rel="stylesheet" href="<?= $website;?>assets/css/style2.css">

 
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?= $website;?>assets/img/logo/mersing-logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->


<header>
<?php include('admin-header.php'); ?>

</header>
<main>
<div class="container" style="margin-top: 100px;">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th style="background-color: #7E0C0E; color: white;">Aduan</th>
                <th style="background-color: #7E0C0E; color: white;">Email</th>
                <th style="background-color: #7E0C0E; color: white;">Date</th>

              </tr>
            </thead>
             <?php foreach($list as $data): ?>
            <tbody>
              <tr>
                <td><?=$data['aduan']; ?></td>
                <td><?=$data['email']; ?></td>
                <td><?=$data['added_date']; ?></td>
              </tr>
            </tbody>

             <?php endforeach; ?>
          </table>
    </div>

</main>
<?php include('footer.php');?>
<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->


   <script>



    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
        
        
    function closeNotice() {
  document.getElementById("notice_this").style.display = "none";
}   
    </script>

    <script src="<?= $website;?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= $website;?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= $website;?>/assets/js/popper.min.js"></script>
    <script src="<?= $website;?>/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= $website;?>/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= $website;?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= $website;?>/assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?= $website;?>/assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= $website;?>/assets/js/wow.min.js"></script>
    <script src="<?= $website;?>/assets/js/animated.headline.js"></script>
    <script src="<?= $website;?>/assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= $website;?>/assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?= $website;?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= $website;?>/assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="<?= $website;?>/assets/js/contact.js"></script>
    <script src="<?= $website;?>/assets/js/jquery.form.js"></script>
    <script src="<?= $website;?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?= $website;?>/assets/js/mail-script.js"></script>
    <script src="<?= $website;?>/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="<?= $website;?>/assets/js/plugins.js"></script>
    <script src="<?= $website;?>/assets/js/main.js"></script>
    
</body>
</html>