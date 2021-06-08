<?php

require_once __DIR__.'/class/login.class.php';
//MAIN
$website = $route->get_website();
$route = $route->request;


$login = new LoginController();


        if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
    
        
        $check = $login->login($username,$password);
        
        if($check){
          echo "<script>location.href='?view=login'</script>";
        }else{
            echo "error";
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
            <span style="font-size:30px;cursor:pointer;color: white; margin-left:60px;" onclick="openNav()">&#9776;</span>
            <img src="<?= $website;?>assets/img/logo/mersing-logo.png" alt="" style="margin-right: 250px; margin-left:50px; "> 
            <span class="notice-text">Welcome to Politeknik Mersing  &nbsp; &nbsp; </span>

          
          </div>
    </div>

</div>



<div id="mySidenav" class="sidenav">


  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

   <a href="#"><img class="round-image" src="<?= $website;?>assets/img/user.png" alt="Avatar"></a>
    <a href="#" style="text-align: center;">PMJ</a>
  <a href="#" data-toggle="modal" data-target="#aduan">Aduan</a>
  <a href="#grabcontact">Grab Contact</a>
  <a href="#hostel" onclick="closeNav()">Hostel Management</a>
  <a href="https://www.jobstreet.com.my/">Industrial Training</a>
</div>







</header>
<main>


<!-- Modal -->
<div class="modal fade" id="aduan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 200px;">Aduan</h5>
        


        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <a href="#"><img class="round-image-aduan" src="<?= $website;?>assets/img/complain.png" alt="Avatar"></a>
         <br>
         <br>
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
		
		
      </div>
    </div>
  </div>
</div>







    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="<?= $website;?>assets/img/banner/banner1.jpg" alt="">
<!--                                         <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="<?= $website;?>assets/img/banner/banner2.jpg" alt="">
<!--                                         <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
							<!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/banner/banner3.jpg" alt="">
<!--                                         <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
							
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="<?= $website;?>assets/img/banner/banner1.jpg" alt="">
<!--                                         <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                            <!-- Trending Top -->
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="<?= $website;?>assets/img/banner/calendar.jpg" alt="">
        
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg" id="hostel">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>Hostel Management</h3>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-9">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav>                                                 
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Food</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Burgers</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Electric Sticker</a>
                                       
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="whats-news-single mb-40 mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/food/maggipacket.jpg" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="">Maggi Packet</a></h4>
                                                    <span>Opening Hours: 9.00 PM - 1.00 AM</span>
                                                    <p style="font-weight: bolder;">Contact No : 0126738629 </p>
                                                    <p style="font-weight: bolder;">Free Delivery </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/food/maggicup.jpg" alt="" style="width:130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">Maggi Cup</span>
                                                            <p>Opening Hours: 9.00 PM - 1.00 AM</p> 
                                                            <p style="margin-top: 5px;">Contact No: 0126476334</p>
															<p style="font-weight: bolder;">Free Delivery </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/food/roti.jpg" alt=""  style="width:130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">Roti</span>
                                                            <p>Opening Hours: 9.00 PM - 1.00 AM </p> 
                                                            <p style="margin-top: 5px;">Contact No: 0182283792 </p>
															<p style="font-weight: bolder;">Free Delivery </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/food/keropokkentang.jpg" alt="" style="width:130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">Keropok Kentang</span>
                                                           <p>Opening Hours: 9.00 PM - 1.00 AM </p> 
                                                            <p style="margin-top: 5px;">Contact No: 0135346436</p>
															<p style="font-weight: bolder;">Free Delivery </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/food/cookies.jpg" alt="" style="width:130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">Cookies</span>
                                                            <p>Opening Hours: 9.00 PM - 1.00 AM </p> 
                                                            <p style="margin-top: 5px;">Contact No: 0135346436</p>
															<p style="font-weight: bolder;">Free Delivery </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="<?= $website;?>assets/img/food/burger-ramly.jpg" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Burger PMJ</a></h4>
                                                    <span>Opening Hours: 7.00 pM - 11.00 PM</span>
                                                    <p style="font-weight: bolder;">Contact No: 0129308218</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="<?= $website;?>assets/img/food/burger-biasa.jpg" alt="" style="width: 130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">Burger Biasa</span>
                                                            <h4><a href="">RM 2.50</a></h4>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="<?= $website;?>assets/img/food/burger-ramly.jpg" alt="" style="width: 130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">Burger Ayam</span>
                                                            <h4><a href="">RM 3.00</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="<?= $website;?>assets/img/food/nugget-fries.jpg" alt="" style="width: 130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">Nugget & Fries Set</span>
                                                            <h4><a href="">RM 5.50</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card three -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/food/laptopcharger.jpg" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Laptop Charger</a></h4>
													<p style="font-weight: bolder;">RM 1</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/food/extensionwire.jpg" alt="" style="width: 130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">Extension Wire</span>
                                                            <p style="font-weight: bolder;">RM 1</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/food/electrickettle.jpg" alt=""  style="width: 130px; height: 100px;">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">Electric Keetle</span>
															<p style="font-weight: bolder;">RM 1</p>
															
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <!-- Banner 
                <div class="banner-one mt-20 mb-30">
                    <img src="assets/img/gallery/body_card1.png" alt="">
                </div>-->
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                         <span style="margin-top: 10px;">Unique Visitor?></span> 
                            <div class="follow-us d-flex align-items-center">

                                <div class="follow-social" >
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="follow-count">

                                    <span>8,045</span>
                                    <p>Views</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="single-follow mb-45">
                        <div class="single-box">
                         <span style="margin-top: 10px;">ELECTRIC STICKER REGISTRATION<span> 
                            <div class="follow-us d-flex align-items-center">

                                <div class="follow-social" >
                                    <i class="fa fa-dot" aria-hidden="true"></i>
                                </div>
                                <div class="follow-count">

                                <h4><a href="https://form.jotform.com/211516181892456"><button type="register" name="register" value="register" class="bkn button" style="width: 100%">Register</button></a></h4>
                                </div>
                            </div> 
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area pt-50 pb-30 gray-bg" id="grabcontact">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner 
                    <div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src="assets/img/gallery/body_card2.png" alt="">
                        </div>
                    </div>-->
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="small-tittle mb-30">
                                        <h4>Grab Contact</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly2-news-active d-flex">
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="<?= $website;?>assets/img/grab/perodua.png" alt="">
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4><a href="#">PERODUA AXIA</a></h4>
                                                <p>ABANG WAN</p>
                                                <p>018-3777268</p>
                                            </div>
                                        </div> 
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="<?= $website;?>assets/img/grab/proton.png" alt="">
                                            </div>
                                            <div class="weekly2-caption" style="margin-top: 50px;">
                                                <h4><a href="#">PROTON SAGA</a></h4>
                                                <p>MR KOREAN</P>
                                                <p>018-2763126</p>
                                            </div>
                                        </div> 
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img" >
                                                <img src="<?= $website;?>assets/img/grab/perodua.png" alt="">
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4><a href="#">PERODUA MYVI</a></h4>
                                                <p>CIK ANAH</p> 
                                                <p>012-6544629</p>
                                            </div>
                                        </div> 
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="<?= $website;?>assets/img/grab/proton.png" alt="">
                                            </div>
                                            <div class="weekly2-caption" style="margin-top: 50px;">
                                                <h4><a href="#">PROTON SAGA</a></h4>
                                                <p>MR KIT</p>
                                                <p>010-8965409</p>
                                            </div>
                                        </div> 


                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="<?= $website;?>assets/img/grab/proton.png" alt="">
                                            </div>
                                            <div class="weekly2-caption" style="margin-top: 50px;">
                                                <h4><a href="#">PROTON SAGA</a></h4>
                                                <p>MR LIM</p>
                                                <p>012-7917300</p>
                                            </div>
                                        </div> 
                                        </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->

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