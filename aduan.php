<?php
 date_default_timezone_set("Asia/Kuala_Lumpur"); 
require_once __DIR__.'/class/aduan.class.php';
//MAIN
$website = $route->get_website();
$route = $route->request;


$aduans = new AduanController();





    if(!empty($_POST['submit'])){
    
    $aduan = $_POST['aduan'];
    $email = $_POST['email'];
    $added_date = $_POST['added_date'];



    
        if(!$aduan == ""){
            
            $check = $aduans->new_aduan($aduan,$email,$added_date);
            
            if($check){
                $successregister = "1";
            }else{
                $successregister = "0";
            }


            ?>
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Aduan successfully added.
</div>
            <?php
            
        }else{
            
            echo "<script>alert('Please fill up the aduan before submit!')</script>";
        }




        
        
}





?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Politeknik Mersing </title>
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
            <span class="notice-text">Welcome to Politeknik Mersing  &nbsp; &nbsp; </span>

          
          </div>
    </div>

</div>











</header>
<main style="margin-bottom: 130px;">


    <div class="" style="padding-top: 50px; margin-left: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="login_form mb-50">
                        <a href="#"><img class="round-image-aduan" src="<?= $website;?>assets/img/complain.png" alt="Avatar"></a>
                        <h5 class="mb-3">Aduan</h5>

                        <form id="fs-frm" name="complaint-form" accept-charset="utf-8" action="https://formspree.io/f/xpzkdbdy" method="post">
  <fieldset id="fs-frm-inputs">
    <label for="full-name">Full Name</label>
    <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
    <label for="email-address">Email Address</label>
    <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">
    <label for="telephone">Telephone Number (Optional)</label>
    <input type="telephone" name="telephone" id="telephone" placeholder="011-1111111">
    <label for="complaint">Complaint</label>
    <textarea rows="6" name="complaint" id="complaint" placeholder="Write Your Complain Here" required=""></textarea>
    <input type="hidden" name="_subject" id="email-subject" value="Complaint Form Submission">
  </fieldset>
  <input type="submit" value="File Complaint">
</form><style>/* reset */
#fs-frm input,
#fs-frm select,
#fs-frm textarea,
#fs-frm fieldset,
#fs-frm optgroup,
#fs-frm label,
#fs-frm #card-element:disabled {
  font-family: inherit;
  font-size: 100%;
  color: inherit;
  border: none;
  border-radius: 0;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
}
#fs-frm label,
#fs-frm legend,
#fs-frm ::placeholder {
  font-size: .825rem;
  margin-bottom: .5rem;
  padding-top: .2rem;
  display: flex;
  align-items: baseline;
}

/* border, padding, margin, width */
#fs-frm input,
#fs-frm select,
#fs-frm textarea,
#fs-frm #card-element {
  border: 1px solid rgba(0,0,0,0.2);
  background-color: rgba(255,255,255,0.9);
  padding: .75em 1rem;
  margin-bottom: 1.5rem;
}
#fs-frm input:focus,
#fs-frm select:focus,
#fs-frm textarea:focus {
  background-color: white;
  outline-style: solid;
  outline-width: thin;
  outline-color: gray;
  outline-offset: -1px;
}
#fs-frm [type="text"],
#fs-frm [type="email"] {
  width: 100%;
}
#fs-frm [type="button"],
#fs-frm [type="submit"],
#fs-frm [type="reset"] {
  width: auto;
  cursor: pointer;
  -webkit-appearance: button;
  -moz-appearance: button;
  appearance: button;
}
#fs-frm [type="button"]:focus,
#fs-frm [type="submit"]:focus,
#fs-frm [type="reset"]:focus {
  outline: none;
}
#fs-frm [type="submit"],
#fs-frm [type="reset"] {
  margin-bottom: 0;
}
#fs-frm select {
  text-transform: none;
}

#fs-frm [type="checkbox"] {
  -webkit-appearance: checkbox;
  -moz-appearance: checkbox;
  appearance: checkbox;
  display: inline-block;
  width: auto;
  margin: 0 .5em 0 0 !important;
}

#fs-frm [type="radio"] {
  -webkit-appearance: radio;
  -moz-appearance: radio;
  appearance: radio;
}

/* address, locale */
#fs-frm fieldset.locale input[name="city"],
#fs-frm fieldset.locale select[name="state"],
#fs-frm fieldset.locale input[name="postal-code"] {
  display: inline;
}
#fs-frm fieldset.locale input[name="city"] {
  width: 52%;
}
#fs-frm fieldset.locale select[name="state"],
#fs-frm fieldset.locale input[name="postal-code"] {
  width: 20%;
}
#fs-frm fieldset.locale input[name="city"],
#fs-frm fieldset.locale select[name="state"] {
  margin-right: 3%;
}
</style>


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