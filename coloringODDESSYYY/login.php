<?php
ob_start();
session_start();

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<script type="text/javascript">
  function preventBack(){window.history.forward()};
  setTimeout("preventBack()",0);
     window.onunload=function(){null;}
     </script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
<link rel="stylesheet" href="assets/css/login.css">

</head>

<body>


<!-- * Page loading --> 

<!-- App Header -->

<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1">
   <div class="row1">
  <div class="column1"><br><br>
     <h3>Login</h3></div>  
      
      <div class="column1"><br><br>
    <h2>|</h2></div> 
    
    <div class="column1 "><br><br>
     <p style="font-size: 16px; padding-left: 10px; padding-top: 10px;"> <a style="color: #666C76" href="signup.php">Register</a></p></div></div>
   <form action="#" id="loginForm" method="post" class="card-body" autocomplete="off">
  
  <div style="border: 1px solid #EDEDED; margin-left: -20px; margin-right: -20px; padding-left: 20px; padding-right: 20px; padding: 20px;">
 <!-- <center> <h4 style="color:white">Login Form</h4></center> --><br>
      <div class="inner-addon left-addon">
      <i style="font-size: 30px; margin-top: -5px;" class="icon ion-md-person" class="icon ion-md-phone-portrait"></i>
        <input style="padding-left: 60px;" type="tel" id="login_mobile" name="login_mobile" class="form-control textbox"  placeholder="Mobile Number" onKeyPress="return isNumber(event)"  maxlength="10">
      </div><hr style="color: #EDEDED;">
      <div class="inner-addon left-addon">
      <i style="font-size: 30px; margin-top: -5px;"  class="icon ion-md-lock">&nbsp;</i>
        <input style="padding-left: 60px;" type="password" id="login_password" name="login_password" class="form-control textbox"   placeholder="Password">
      </div>
      </div>
      <a style="color:blue; font-size:12px; margin-top: 8px;" class="right" href="forgot-password.php">Forgot The Password?</a> 
      
      <input type="hidden" name="action" value="login">
      
      
      
          <div class="text-center mt-3" style="padding-top: 45px;">
        <button type="submit" class="btn" style="width:80%;border: white; border-radius: 5px; height:55px; font-weight: 400; font-size: 17px; background-color: #DAA520; color: white;">Login Immediately</button>  <br>
      
        <a href="index.php"  class="btn" style="width:80%;border: white; border-radius: 5px; height:55px; background-color: #707070; font-weight: 400; font-size: 17px; color: white;"> Back Home</a>
        </div>
      
     
       
        
      </div>
    </form>
  </div>
</div>

<!-- <br>
  <div><center>
      
         <span style="color: white;">Hello Viewer, Im Mohit Soni, if You Want To</span><br>
      <span style="color: red;">Buy Source Code OR Create Own Website</span>
  <br> <span style="color: white;">Then, Contact Me On Whatsapp</span><br> <br>
      <a href="https://wa.me/+91" style="padding-left: 10px;padding-right: 10px;padding-top: 5px;padding-bottom: 5px;background-color: #1DCC70;color: black;font-size: 16px;"><i class="fa fa-whatsapp"> Whatsapp</i></a>  
      
       </center>
      
      </div> -->

<!-- 
<div class="row1 vcard">
    <center><h5 style="color:white;margin-bottom:-20px;" >Why Choose us?</h5></center><hr>
  <div class="column1"><br>
      <a  style="color:white;" > <center><span style="font-size:12px;"><i style="color:white;font-size:30px;" class="fa fa-shirtsinbulk "></i><br>100% Legal<br>& Secure<span></center></a></div>  
      
      <div class="column1"><br>
    <a  style="color:white;">  <center><span style="font-size:12px;"> <i style="color:white;font-size:30px;" class="icon ion-md-wallet"></i><br>Reliable Wallet <br>like PayTM<span></center></a></div> 
    
    <div class="column1"><br>
      <a  style="color:white;"><center><span style="font-size:12px;"> <i style="color:white;font-size:30px;" class="fa fa-google-wallet"></i><br>Instant <br>Withdrawal<span></center></a></div>
        <div class="column1"><br>
      <a  style="color:white;"><center><span style="font-size:12px;"> <i style="color:white;font-size:30px;" class="fa fa-headphones"></i><br>24X7 Customer<br>Support<span></center></a></div>
   </div> -->
<!-- <br><br><br>
<a href="/colourprediction.apk"><img alt="app download" src="download.png" width="100%&quot;" height="100%">
        </a> -->
<!-- appCapsule -->


<div id="registertoast" class="modal fade" role="dialog">
    
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content ">
      <div class="modal-body">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span></button>
        <div class="text-center" id="regtoast">          
        </div>
      </div>
    </div>
  </div>
</div>
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
document.addEventListener("keydown", function (event) {
    if (event.ctrlKey) {
        event.preventDefault();
    }   
});	
</script>
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/account.js"></script>

</body>
</html>