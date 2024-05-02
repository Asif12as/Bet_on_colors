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
<title>colorplay</title>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>


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

.appContent3 {
    background-image: url("icon_game.jpg");
	background-color: #DAA520 !important;
	border-color: #DAA520 !important;
	padding:20px;
	font-size:16px;
}
  body {
	-ms-user-select:text;
	user-select:text;
	-moz-user-select:text;
	-webkit-user-select:text


}
.appHeader1 {
    	background-image: url("icon_game.jpg");
}
.card {
    border: 1px solid #E5E9F2;
    border-radius: 3px;
    padding: 0px;
}
.card .card-title {
    margin-bottom: 7px;
}
h4 {text-align: center;}
p {text-align: center; font-size:16px;}
h5{ font-weight:500; font-size:24px; color:Black;}
.card-body{ padding:.6rem;}
td{ padding:3px;}
.btn-sm {
    height: 26px;
    padding: 0px 12px;
}
.form-control{box-shadow:none; border-bottom:#ccc solid 1px; margin-bottom:3px;}
#alert h4{font-size: 1rem; font-weight:bold; color:#333;}
#alert p{font-size: 13px; margin-top:20px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:20px; margin-top:130px;}

label{ display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0 10px;
  color: #291F53;
  margin-bottom: 0px;
  font-size: 18px;
}
#bonus .modal-dialog{margin-top:100px;}
#bonus .modal-footer{ border:none;}
.dropdown-menu{ background:#fff;top: -15px;
left: -145px; border:none;
border-radius:0px;
-webkit-box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);}
.appHeader1 .right{right:20px;
    	
}
.dropdown-item {
    padding: .75rem 1.5rem;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: right;
  width: 50%;
  padding: 0px;
   /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<body>
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
?>
<div class="appHeader1">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle"> Share</div>
  </div>
  </div>

    <div> 
    <br> <br>
          <h4>High Profit With No Risk</h4>
          <p>Invite Your Friends To Get More.<p>
          <!--  <img src="images/share.gif" style="width:100%;height:100%;"> --></div>
             <br><hr><hr>
      <div class=""><center><img src="https://chart.googleapis.com/chart?cht=qr&chs=192x192&chl=https://wincolor.shop/signup.php?code=<?php echo user($con,'owncode',$userid);?>"> </center>     <center><h5><?php echo user($con,'owncode',$userid);?></h5></center> <label>My Invite Code</label><br>

</b></div>
<div class="text-boxes">
    <div class="text-box HTMLBox">
     
      <textarea id="HTMLBox" readonly >https://wincolor.shop/signup?code=<?php echo user($con,'owncode',$userid);?>
      </textarea>
      <button id="HTMLButton">Copy Invite Link</button>
      <a style="font-size:18px;color:green;width:95%;" href="whatsapp://send?text=💫 Wincolor Predicition 💫  %0a%0a



https://wincolor.shop/signup.php?code=<?php echo user($con,'owncode',$userid);?>   %0a%0a

👉 sɪɢɴᴜᴘ ʙᴏɴᴜs - 20RS     %0a
👉 24/7 ᴡɪᴛʜᴅʀᴀᴡᴀʟ ✅             %0a
👉 ᴡɪᴛʜᴅʀᴀᴡᴀʟ ᴊᴜsᴛ ɪɴ 10 ᴍɪɴ ᴍᴀxɪᴍᴜᴍ %0a
👉 Mɪɴɪᴍᴜᴍ ʀᴇᴄʜᴀʀɢᴇ ₹300 %0a
👉 Mɪɴɪᴍᴜᴍ ᴡɪᴛʜᴅʀᴀᴡᴀʟ ₹350  %0a
👉 Rᴇғᴇʀʀᴀʟ ʙᴏɴᴜs ₹150  %0a
👉 sᴜɢɢᴇsᴛɪᴏɴs 90% ᴡᴏʀᴋ  %0a
👉 Rᴇғᴇʀʀᴀʟ ᴄᴏᴍᴍɪssɪᴏɴ ᴀᴠᴀɪʟᴀʙʟᴇ  %0a
👉ʟᴇᴠᴇʟ 1 - [5%]  ʟᴇᴠᴇʟ - 2[2%]  %0a
👉ᴅᴀɪʟʏ 5 Forecast %0a  %0a


Don't Recommdate to contract money without any forecast and suggestions  🤑🤑   %0a%0a

ᴅᴏɴ'ᴛ ᴍɪss ᴛʜɪs ᴄʜᴀɴᴄᴇ...ᴛʀʏ ᴏɴᴄᴇ !!! %0a%0a

💢 𝐃𝐢𝐫𝐞𝐜𝐭 𝐚𝐩𝐩 𝐝𝐨𝐰𝐧𝐥𝐨𝐚𝐝 𝐥𝐢𝐧𝐤💢  %0a

   https://wincolor.shop/wincolor.apk    %0a

❤️𝐓𝐞𝐥𝐢𝐠𝐫𝐚𝐦 𝐠𝐫𝐨𝐮𝐩 𝐥𝐢𝐧𝐤𝐬   %0a
     
https://t.me/" class="btn btn-link"> <i class="fa fa-share-alt" style="font-size:20px;"></i>
            &nbsp;&nbsp; Share Link </a>
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
<script src="assets/js/bonus.js"></script>
  <script>
  // HTML BOx JS Code
    let HTMLBox = document.getElementById("HTMLBox");
    let HTMLButton = document.getElementById("HTMLButton");

    HTMLButton.onclick = function() {
      HTMLBox.select();
      document.execCommand("copy");
      HTMLButton.innerText = "Codes Copied"
    }

    // CSS Box Js Code
      let CSSBox = document.getElementById("CSSBox");
      let CSSButton = document.getElementById("CSSButton");

      CSSButton.onclick = function() {
        CSSBox.select();
        document.execCommand("copy");
        CSSButton.innerText = "Codes Copied"
      }
    // JavaScript BOx JS Code
      let JSBox = document.getElementById("JSBox");
      let JSButton = document.getElementById("JSButton");

      JSButton.onclick = function() {
        JSBox.select();
        document.execCommand("copy");
        JSButton.innerText = "Codes Copied"
      }
  </script>
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
</body>
</html>
 