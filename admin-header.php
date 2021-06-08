    <div class="header-area">




  
<div id="notice_this">
    <div class="row">

        <div class="notice-wrapper" >
            <span style="font-size:30px;cursor:pointer;color: white; margin-left:60px;" onclick="openNav()">&#9776;</span>
           <a href="#"><img src="<?= $website;?>assets/img/logo/mersing-logo.png" alt="" style="margin-right: 250px; margin-left:50px; "> </a> 
            <span class="notice-text">Welcome to Polytechnic Mersing  &nbsp; &nbsp; </span>

          
          </div>
    </div>

</div>



<div id="mySidenav" class="sidenav">


  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

   <a href="#"><img class="round-image" src="<?= $website;?>assets/img/user.png" alt="Avatar"></a>
    <a href="#" style="text-align: center;">Welcome <?=$_SESSION['firstname']; ?></a>
  <a href="#" >Dashboard</a>
  <a href="?view=logout">Logout</a>
</div>