<?php $urlpage= basename($_SERVER['PHP_SELF']);
$active='';

?>
<div class="appBottomMenu">
 

    
   
  
   <?php if(isset($_SESSION['frontuserid'])){?>
   <div class="item <?php if($urlpage=='index'){echo'active';}?>"> <a href="index">
    <p> <i class="icon ion-md-home"></i> <span>Home</span> </p>
    </a> </div>
    <div class="item <?php if($urlpage=='gamedashboard.php'){echo'active';}?>"> <a href="gamedashboard.php">
    <p> <i class="icon ion-md-star"></i> <span>WinGO</span> </p>
    </a> </div>
     <div class="item <?php if($urlpage=='myaccount.php'){echo'active';}?>"> <a href="myaccount.php">
    <p> <i class="icon ion-md-person"></i> <span>My Account</span> </p>
    </a> </div>
     
    
    
   
    <?php }else{?>
    <div class="item <?php if($urlpage=='index.php'){echo'active';}?>"> <a href="index.php">
    <p> <i class="icon ion-md-home"></i> <span>Home</span> </p>
    </a> </div>
     <div class="item <?php if($urlpage=='search.php'){echo'active';}?>"> 
    <a href="search.php">
    <p> <i class="icon ion-md-search"></i> <span>Search</span> </p>
    </a> </div>
  <div class="item <?php if($urlpage=='login.php' || $urlpage=='signup.php' || $urlpage=='forgot-password.php'){echo'active';}?>"> <a href="login.php" class="icon toggleSidebar">
    <p> <i class="icon ion-md-person"></i> <span>Login/Register </span> </p>
    </a> </div>
    <?php }?>
</div>