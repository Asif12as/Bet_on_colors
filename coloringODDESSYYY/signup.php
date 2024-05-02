<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/signup.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="description" content="">
<meta name="keywords" content="" />
<script type="text/javascript">
let currentUrl = location.href;
history.replaceState('', '', 'login.php');
history.pushState('', '', currentUrl);
</script>


</head>

<body>
<?php include("include/connection.php");?>


<!-- App Header -->

<!-- * App Header --> 
<!-- App Capsule -->
<div id="appCapsule">
  <div class="appContent1 mb-2">
  <div class="row1">
  <div class="column1"><br><br>
   <p style="font-size: 16px; padding-left: 10px; padding-top: 10px;"> <a style="color: #666C76" href="login.php">Login</a></p>
  
 </div>  
      
      <div class="column1"><br><br>
    <h2>|</h2></div> 
    
    <div class="column1 "><br><br>
       <h3>Register</h3>
    </div></div>
    
    <form action="#" method="post" id="Register" class="card-body" autocomplete="off">
          <div style="border: 1px solid #EDEDED; margin-left: -20px; margin-right: -20px; padding-left: 20px; padding-right: 20px; padding: 20px;"><span style="font-size: 16px; margin-left: 16px; color: green">India</span>
    <div class="row " style="margin-top: 12px;margin-bottom: -18px;">
                    <div class="col-8">
      <div class="inner-addon left-addon">
         
        <i  class="icon ion-md-phone-portrait"> </i> 
        <input style="padding-left: 60px;" type="tel" name="mobile" id="mobile" onKeyPress="return isNumber(event)" class="form-control textbox" placeholder="Mobile Number" value="" maxlength="10">
      </div>
      </div>
      <div class="col-4 pl-0" style="margin-top: 10px;"><a href="javascript:void(0);" style="width:100%;border: white; padding: 5px; border-radius: 5px; height:0px; font-weight: 400; font-size: 15px; background-color: #DAA520; color: white;" id="reg_otp" onClick="mobileveryfication();">SEND OTP</a></div>
      </div> <hr style="color: #EDEDED;">
  <!--    <div class="inner-addon left-addon">
        <i  class="icon ion-ios-mail"></i>
        <input style="padding-left: 60px;" type="email" name="email" id="email" class="form-control textbox" placeholder="Email ID">
      </div>
      <hr style="color: #EDEDED;"> -->
      <div class="inner-addon left-addon">
        <i  class="icon ion-md-lock"></i>
        <input style="padding-left: 60px;" type="password" name="password" id="password" class="form-control textbox" placeholder="New Password">
      </div><hr style="color: #EDEDED;">
      <div class="inner-addon left-addon" style="margin-bottom: -1px">
        <i  class="icon ion-ios-gift"></i>
        <input style="padding-left: 60px;" type="text" name="rcode" id="rcode" class="form-control textbox" placeholder="Referal Code" value="<?php echo @$_GET['code'];?>">
      </div> </div>
      <input type="hidden" name="action" value="register">
      <div class="form-group row mt-3 mb-3">
                    <div class="col-12">
                        <div style="margin-top: -15px;" class="custom-control custom-checkbox">
    <input type="checkbox" checked class="custom-control-input" id="remember" name="remember">
  <label  style="color:white" class="custom-control-label text-muted" for="remember">I agree <a  style="color: green" data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false">PRIVACY POLICY</a></label>
                        </div>
                    </div>
                    
                </div>
      <div>
       <div class="text-center mt-3" style="padding-top: 15px;">
        <button type="submit" style="width:80%;border: white; border-radius: 5px; height:55px; font-weight: 400; font-size: 17px; background-color: #DAA520; color: white;">Register</button> 
      <br>
        <a href="index.php"  class="btn btn-sm btn-dark" style="width:80%;border: white; border-radius: 5px; height:55px; background-color: #707070; font-weight: 400; font-size: 17px; color: white;"> Back Home</a>
        </div>
      </div> 
    </form>
  </div>
</div>
<!-- appCapsule -->




<div id="registerthanksPopup" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-body">
        <div class="text-center">
          <h5>Thank you !</h5>
          <h6>Your account Registration Successfully.</h6>
          <div class="text-center">
<button type="button" class="btn btn-sm btn-primary" onClick="window.location='/login.php';">OK</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
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
<div id="privacy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 style="font-weight:normal;">Privacy Policy</h5>  <a class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a>
              </div>
      <div class="modal-body responsive">
      <?php echo content($con,"privacy");?>

      </div>
      <div class="modal-footer">
    <a class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a>
              </div>
    </div>
  </div>
</div>
<div id="otpform" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content ">
      <div class="modal-body">
    <button type="button" id="otpclose" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span></button>
       <p><strong>Plese Enter OTP</strong></p>
        <div class="pt-2">
   <form action="#" method="post" id="otpsubmitForm">
  <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter OTP" onKeyPress="return isNumber(event)">
      <input type="hidden" name="type" id="type" value="otpval">
      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary" style="width:264px;"> Submit OTP </button>
        </div>
        </form>          
        </div>
      </div>
    </div>
  </div>
</div>
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