<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<style>
.appHeader1 {
	background-color: #fff !important;
	border-color: #fff !important;
}

* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
    width: 33%,33%,33%;
 padding-left: 30px;
 padding-right: 30px;
   /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
      margin-bottom: -0.50cm;
}
/* Create two equal columns that floats next to each other */
.column {
  float: center;
  width: 50%,50%,50%;
 padding-left: 50px;
   /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.appContent3 {
    	background-image: url("/icon_game.jpg");
	border-color: #DAA520 !important;
	padding:18px;
   background-color: #DAA520 !important;
	padding:20px;
	font-size:16px;
}
.user-block img {
	width: 40px;
	height: 40px;
	float: left;
	margin-right:10px;
		margin-top:-10px;
	background:#333;
}
.img-circle {
	border-radius: 50%;
}
.accordion .btn-link {
	box-shadow:none;
	padding:8px !important;
	margin:0px 0px;
	color: #333 !important;
	font-size: 17px;
	font-weight: normal;
	border-top:solid 1px #ccc;
}
.accordion .collapsed {
	border:none;
}
.accordion .show {
	border-bottom:solid 1px #ccc;
}
.accordion .sub-link {
	box-shadow:none;
	padding:8px !important;
	color: #333 !important;
	font-size: 14px;
	font-weight: normal;
	display:block;
}
.accordion .sub-link:hover {
color:#00F !important;
}
.accordion .btn-link:hover {
	background:#F5F5F5;
}
.accordion .btn-link {
	position: relative;
}
.btn3 {
   background-color: #FFD700;
    border-radius: 15px 15px 15px 15px;
    border: 1px solid white;
  padding-bottom: 4px;
  padding-top: 4px;
  padding-left: 25px;
  padding-right: 25px;
    transition: 0.5s;
    
}
 .accordion .btn-link::after {
 content: "\f105";
 color: #333;
 top: 8px;
 right: 9px;
 position: absolute;
 font-family: "FontAwesome";
 font-size:24px;
}
.btn1 {
    border-radius: 15px 0px 15px 0px;
    border: 2px solid white;
  padding-bottom: 4px;
  padding-top: 4px;
  padding-left: 25px;
  padding-right: 25px;
    transition: 0.5s;
    
}
.right{
    float:right;
}
.btn2 {
    border-radius: 5px 05px 5px 5px;
    border: 2px solid white;
  padding-bottom: 4px;
  padding-top: 4px;
  padding-left: 30px;
  padding-right: 30px;
    transition: 0.5s;
    
}

 .accordion .btn-link[aria-expanded="true"]::after {
 content: "\f106";
}
.light{
    height: 24px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 24px;}
.light1{
    height: 26px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 26px;}

.btn1 {
   background-color: #ffd600f7;
    
    border: 2px solid white;
  padding-bottom: 4px;
  padding-top: 4px;
  padding-left: 25px;
  padding-right: 25px;
    transition: 0.5s;
    
}
</style>
</head>

<body>
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>
<!-- Page loading -->
<div class="loading" id="loading">
  <div class="spinner-grow"></div>
</div>
<!-- * Page loading --> 

<!-- App Header -->
<div >
  <div class="appContent3 text-white">
    <div class="row">
          <div class="col-12 mb-1">
         <div class="user-block"> <img class="img-circle img-bordered-lg" src="assets/img/avatar.svg"> </div>
  
        <b style="color:white; font-size:18px">User ID : 18000<?php echo user($con,'id',$userid);?></b>
           
    
    
         <a class="right" href="resetpassword.php"><i class="fa fa-gear" style="color:white; font-size:30px"></i></a>
      
        </div>
        
      <div class="column"><br>
      <center><span style="font-weight: 500; font-size:18px;">₹ <?php echo number_format(wallet($con,'amount',$userid), 2);?><br>My Balance<span></center></div>
      
  <div class="column"><br>
      <center><span style="font-weight: 500; font-size:18px;">₹ <span id="bms"><?php echo (bonus($con,'amount',$userid));?></span><br>Invite Bonus<span></center></div>
      <div class="column">
        
     <center> <br>  <a  href="https://t.me/" target="_blank"  style="color:white;"  class="btn1 btn-sm btn-success m-0">Support</a> </div>
     
     <div class="column">
        
     <center> <br>  <a  href="promo-share.php"  style="color:white;"  class="btn1 btn-sm btn-success m-0" !important;>Refer</a> </div>
      </div>
    
 
  
  </div>
    </div>   
     
    <div class="row1">
  <div class="column1 vcard"><br>
      <a href="recharge.php" style="color:black;" > <center><span style="font-size:14px;"><i style="color:#b6421f;font-size:27px;" class="fa fa-credit-card"></i><br>Recharge<span></center></a></div>  
      
      <div class="column1 vcard"><br>
    <a href="withdrawal.php" style="color:black;">  <center><span style="font-size:14px;"> <i style="color:#b6421f;font-size:27px;" class="icon ion-md-wallet"></i><br>Withdraw<span></center></a></div> 
    
    <div class="column1 vcard"><br>
      <a href="order.php" style="color:black;"><center><span style="font-size:14px;"> <i style="color:#b6421f;font-size:27px;" class="fa fa-google-wallet"></i><br>All Orders<span></center></a></div></div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div class="appContent1 mb-5">
    
  <div class="contentBox long mb-3">
    <div class="contentBox-body card-body"> 
      
      <!-- listview -->
      
      <div class="accordion" id="accordionExample">
          <div class="card-header">
            <h2 class="mb-0"> 
             <a href="https://t.me/" class="btn btn-link collapsed" target="blank"><i class="fa fa-telegram text-primary" style="font-size:20px;"></i>
            &nbsp;&nbsp; Join Telegram Group </a>  </h2>
          </div><br>
          
          
      <div class="card-header">
            <h2 class="mb-0"> <a href="transactions.php" class="btn btn-link collapsed"><i class="fa fa-exchange" style="font-size:16px color:#b6421f;" !important></i>
            &nbsp;&nbsp; Transactions </a> </h2>
          </div><br>
     <div class="card-header">
            <h2 class="mb-0"> <a href="events.php" class="btn btn-link collapsed"><i class="fa fa-info-circle" style="font-size:16px color:#b6421f;" !important></i>
            &nbsp;&nbsp; Events and Offers </a> </h2>
          </div><br>
          
          <div class="card-header">
            
          <!--  <h2 class="mb-0"> <a href="https://youtu.be/5pjgZHinKsc" target="blank" class="btn btn-link collapsed"><i class="fa fa-trophy" style="font-size:16px"></i>
            &nbsp;&nbsp;How to play game </a> </h2>
          </div><br>-->
          
          <div class="card-header">
            
            <h2 class="mb-0"> <a href="withdrawalrecord.php" class="btn btn-link collapsed"><i class="fa fa-list-alt" style="font-size:16px"></i>
            &nbsp;&nbsp; Withdrawal History </a> </h2>
          </div><br>
          
          
       <div class="card-header">
            
            <h2 class="mb-0"> <a href="promotion.php" class="btn btn-link collapsed"><i class="fa fa-user-plus" style="font-size:16px"></i>
            &nbsp;&nbsp; Reffer &amp; Earn  </a> </h2>
          </div><br>   

     <!--   <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> <i class="fa fa-google-wallet" style="font-size:16px"></i>
            &nbsp;&nbsp; Wallet  </a> </h2>
        </div><br>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <a href="recharge.php" class="sub-link"> <i class="fa fa-credit-card" style="font-size:16px"></i>
            &nbsp;&nbsp; Recharge  </a> 
         
         <a href="withdrawal.php" class="sub-link"> <i class="fa fa-rupee" style="font-size:16px"></i>
            &ensp;&ensp; Withdrawal  </a> 
         
         <a href="transactions.php" class="sub-link"> <i class="fa fa-exchange" style="font-size:16px"></i>
            &nbsp;&nbsp; Transactions  </a> <br> 
        </div>
        -->
        <div class="card-header">
            
            <h2 class="mb-0"> <a href="manage_bankcard.php" class="btn btn-link collapsed"><i class="fa fa-credit-card" style="font-size:16px"></i>
            &nbsp;&nbsp; Manage Accounts </a> </h2>
          </div><br>
          
          <div class="card-header">
            <h2 class="mb-0"> <a target="blank" href="whatsapp://send?text=💫 wincolor 💫  %0a%0a



https://yourdomain.in/signup.php?code=<?php echo user($con,'owncode',$userid);?>   %0a

👉 24/7 ᴡɪᴛʜᴅʀᴀᴡᴀʟ ✅             %0a
👉 ᴡɪᴛʜᴅʀᴀᴡᴀʟ ᴊᴜsᴛ ɪɴ 10 ᴍɪɴ ᴍᴀxɪᴍᴜᴍ %0a
👉 Mɪɴɪᴍᴜᴍ ʀᴇᴄʜᴀʀɢᴇ ₹300 %0a
👉 Mɪɴɪᴍᴜᴍ ᴡɪᴛʜᴅʀᴀᴡᴀʟ ₹350  %0a
👉 Rᴇғᴇʀʀᴀʟ ʙᴏɴᴜs ₹150  %0a
👉 sᴜɢɢᴇsᴛɪᴏɴs 90% ᴡᴏʀᴋ  %0a
👉 Rᴇғᴇʀʀᴀʟ ᴄᴏᴍᴍɪssɪᴏɴ ᴀᴠᴀɪʟᴀʙʟᴇ  %0a
👉ʟᴇᴠᴇʟ 1 - [30%]  ʟᴇᴠᴇʟ - 2[20%]  %0a
👉ᴅᴀɪʟʏ 4 Forecast %0a  %0a


Don't Recommdate to contract money without any forecast and suggestions  🤑🤑   %0a%0a

ᴅᴏɴ'ᴛ ᴍɪss ᴛʜɪs ᴄʜᴀɴᴄᴇ...ᴛʀʏ ᴏɴᴄᴇ !!! %0a%0a

💢 𝐃𝐢𝐫𝐞𝐜𝐭 𝐚𝐩𝐩 𝐝𝐨𝐰𝐧𝐥𝐨𝐚𝐝 𝐥𝐢𝐧𝐤💢  %0a

      %0a

❤️𝐓𝐞𝐥𝐢𝐠𝐫𝐚𝐦 𝐠𝐫𝐨𝐮𝐩 𝐥𝐢𝐧𝐤𝐬   %0a
     
https://t.me/" class="btn btn-link collapsed"> <i class="fa fa-share-alt" style="font-size:16px"></i>
            &nbsp;&nbsp; Share  </a> </h2>
          </div><br>
             <div class="card-header">
            <h2 class="mb-0"> <a href="app.apk" class="btn btn-link collapsed"> <i class="fa fa-android" style="font-size:16px"></i>
            &nbsp;&nbsp; Download App </a> </h2>
          </div><br>
       <!--   <div class="card-header">
            <h2 class="mb-0"> <a href="resetpassword.php" class="btn btn-link collapsed"> <i class="fa fa-edit" style="font-size:16px"></i>
            &nbsp;&nbsp; Change Password  </a> </h2>
          </div><br> -->
        
      <!--  <div class="card-header" id="headingThree">-->
      <!--    <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"> Account Security </a> </h2>-->
      <!--  </div><br>-->
      <!--  <div id="collapsefour" class="collapse">-->
      <!--<a href="resetpassword.php" class="sub-link"> Reset Password </a>-->
      <!--  </div><br>-->
        <div class="card-header" id="headingThree">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive"> <i class="fa fa-info-circle" style="font-size:16px"></i>
            &nbsp;&nbsp; About us  </a> </h2>
           </div><br>
        <div id="collapsefive" class="collapse">
        <a href="privacy.php" class="sub-link"> <i class="fa fa-file-text" style="font-size:16px"></i>
            &nbsp;&nbsp; Privacy Policy  </a> 
        <a href="riskagreement.php" class="sub-link"> <i class="fa fa-file-text" style="font-size:16px"></i>
            &nbsp;&nbsp; Risk Disclosure Agreement  </a> <br>
           
           
        </div>  <div class="card-header">
            <h2 class="mb-0"> <a href="logout.php" class="btn btn-link collapsed"> <i class="fa fa-sign-out" style="font-size:16px"></i>
            &nbsp;&nbsp; Logout </a> </h2>
          </div>
            <!--  <div class="text-center mt-4"> <a href="logout.php" class="btn btn-sm btn-dark" style="width:200px; height:45px; border-radius:13px; background-image: linear-gradient(
#ae18e3, 
#5b1474);">Logout</a> </div> -->
      </div>
      
      <!-- * listview --> 
     
    </div>
  </div>
  
  <!-- app Footer -->
  
  <!-- * app Footer --> 
  
</div>
<!-- appCapsule -->
<?php include("include/footer.php");?>
<!-- Jquery --> 
<script>
	window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
</script>
<script>
/*function check(e)
{
alert(e.keyCode);
}*/
 document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||     e.keyCode === 117 || e.keycode === 17 || e.keycode === 85)) {//ctrl+u Alt+c, Alt+v will also be disabled sadly.
        alert('Chutiya Ho Tum');
    }
    return false;
};
</script>
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
</body>
</html>