<?php

require_once __DIR__.'/class/login.class.php';
//MAIN
$website = $route->get_website();
$route = $route->request;


$login = new LoginController();





    if(!empty($_POST['register'])){
    
    $username = $_POST['username'];
        $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $status = $_POST['status'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $phoneno = $_POST['phoneno'];

    
        if($password == $cpassword){
            
            $check = $login->new_register($username,$password,$status,$firstname,$lastname,$email,$phoneno);
            
            if($check){
                $successregister = "1";
            }else{
                $successregister = "0";
            }
            
        }else{
            
            echo "<script>alert('Password not match')</script>";
        }
        
        // if(isset($_POST['referalcode'])){
            
        //     $referalcode = $_POST['referalcode'];
        //     $point->referal($referalcode);
        //     $point->join_referal($referalcode,$email);
        // }
        
        if(($successregister == "1") ){
             
               
              $check = $login->login($username,$password);

             echo "<script>location.href='?view=dashboard'</script>";
        }else if($successregister == "0"){
                
                echo "Email Exist";
        }



        
        
}





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
    <!-- Header Start -->
    <div class="header-area">




  
<div id="notice_this">
    <div class="row">

        <div class="notice-wrapper" >
            
             <a href="?view=index"><img src="<?= $website;?>assets/img/logo/mersing-logo.png" alt="" style="margin-right: 250px; margin-left:200px; "> </a>
            <span class="notice-text">Welcome to Polytechnic Mersing  &nbsp; &nbsp; </span>

          
          </div>
    </div>

</div>


</header>
<main style="margin-bottom: 130px;">


    <div class="" style="padding-top: 50px;margin-left: 500px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="login_form mb-50">
                        <a href="#"><img class="round-image-modal" src="<?= $website;?>assets/img/admin.png" alt="Avatar"></a>
                        <h5 class="mb-3">Register</h5>

                        <form  method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required="">
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" name="status" id="status" value="1" hidden="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="phoneno" id="phoneno" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Repeat Password" required="">
                            </div>
                            <button type="submit" name="register" value="register" class="bkn button" style="width: 100%">Submit</button>
                        </form>
                    </div>
                </div>



                
            </div>
        </div>
    </div>
    <!-- Login Area End -->









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