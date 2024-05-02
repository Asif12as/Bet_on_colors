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
<?php include 'head.php';?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://telegram.dog/mintos_mind" class="float" target="_blank">
<i class="fa fa-telegram my-float"></i>
</a>
<style>
.float{
	position:fixed;
	width:40px;
	height:40px;
	bottom:40px;
	right:0px;
	background-color:#1811CF;
	color:#FFFFFF;
	border-radius:50px;
	text-align:center;
  font-size:35px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;

   top:70%;
}

.my-float{
    	color:#FFFFFF;
	margin-top:3px;
}


div1 {
    overflow: hidden;
    position: relative;
    display: flex;
    height: 32px;
    margin-top: 16px;
    margin-bottom: -16px;
    margin-left: 10px;
}

li1 {
    color: #000000;
    font-weight: 500;
   margin-left: -35px;
   
    height: 45px;
    margin-bottom: 45px;
    display: block;
}

.words { 
    font-size: 15px;
    
    animation: words 10s cubic-bezier(0.23, 1, 0.32, 1.2) infinite; 
}

@keyframes words {
    0% {
         margin-top: -360px; 
        }
    5% {
         margin-top: -270px; 
        }
    25% {
         margin-top: -270px; 
        }
    30% {
         margin-top: -180px; 
        }
    50% {
         margin-top: -180px; 
        }
    55% {
         margin-top: -90px; 
        }
    75% {
         margin-top: -90px; 
        }
    80% {
         margin-top: 0px; 
        }
    99.99% {
         margin-top: 0px; 
        }
    100% {
         margin-top: -270px; 
        }
}


.btn6 {
    border-radius: 20px 20px 20px 20px;
    border: 0px solid white;
padding: 100px 100px;
    transition: 0.5s;
    
}
.btn7 {

 background-color: #FFD700;
   padding-bottom: 4px;
  padding-top: 4px;
  padding-left: 15px;
  padding-right: 15px;
    transition: 0.5s;
    
}
.btn5 {
    border-radius: 30px 30px 30px 30px;
    border: 0px solid white;

    transition: 0.5s;
    
}
.btn3 {
    border-radius: 30px 30px 30px 30px;
    border: 0px solid white;

    transition: 0.5s;
    background-image: linear-gradient(#FF3324, #9c27b0);
}
.btn4 {
    border-radius: 30px 30px 30px 30px;
    border: 0px solid white;

    transition: 0.5s;
    background-image: linear-gradient(#1DCC70, #9c27b0);
}
.text1 {
  padding-top: 10px;
}
.btn1 {
   background-color: #FFD700;
    border-radius: 15px 15px 15px 15px;
    border: 1px solid white;
  padding-bottom: 4px;
  padding-top: 4px;
  padding-left: 25px;
  padding-right: 25px;
    transition: 0.5s;
    
}
.vcard1 {
    border: 0px solid white;
transition: 0.5s;
  padding-bottom: 0px;
  padding-top: 0px;
  padding-left: 5px;
  padding-right: 5px;
  box-shadow:2px;
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

.appHeader1 {
	background-color: #fff !important;
	border-color: #fff !important;
}
.modal-header1  {
	background-image: url("bg.jpg");
	border-color: #2196f3 !important;
	padding:18px;

	font-size:16px;
}
.appContent3 {
	background-image: url("bg.jpg");
	border-color: #2196f3 !important;
	padding:18px;

	font-size:16px;
}
.user-block img {
	width: 40px;
	height: 40px;
	float: left;
	margin-right:10px;
	background:#333;
}

.gap {
  
  column-gap: 1px;
}

.img-circle {
	border-radius: 50%;
}
.reaload {
	box-shadow:none;
}
.ion-md-refresh {
	font-size:26px !important;
}
.responsive {
	height:300px;
	overflow-x: auto;
}
.bottom-three {
     margin-bottom: 3cm;
  }
.vcard {
	box-shadow:none;
}
h5{ color:#888; font-size:20px; font-weight:normal;}
h5 span{ color:#333; font-size:22px;}
.divsize4 .btn{padding: 0 10px; width:100px;}
.left-addon input {
    padding-left: 20px;
}
.right{
    float:right;
}

.left{
    float:left;
}

.error {
    top: 45px;
}
.containerrecord{border-bottom: solid 2px #565EFF;}
.recordlink{
    font-size: 26px;
    color: #333;
	border-bottom: solid 2px #565EFF ;
}
.recordlink .title{font-size: 14px;
font-weight: 500;}
#alert h4{font-size: 1rem;}
#alert p{font-size: 13px; margin-top:25px;}
#alert .modal-content{border-radius:3px}
#alert .modal-dialog{padding:30px; margin-top:200px;}
#payment .modal-dialog{padding:10px;margin-top:60px;}
#loader .modal-dialog{padding:30px; margin-top:200px;}
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
    background-image: url("bg.jpg");
	background-color: #2196f3 !important;
	border-color: #2196f3 !important;
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
    	background-image: url("bg.jpg");
}
.card {
    border: 1px solid #E5E9F2;
    border-radius: 3px;
    padding: 0px;
}
.right{
    float:right;
}
.card .card-title {
    margin-bottom: 7px;
}
h3{ font-weight:normal; font-size:20px;}
h4{ font-weight:normal; font-size:18px; color:#858585;}
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
  font-size: 20px;
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

<body><b>
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>
<div class="appHeader1">
  <div class="left"> <a href="#" onClick="goBack();" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
    <div class="pageTitle"> My Sepent Records</div>
  </div>
  
  
</div>
<!--   <ul style="margin-bottom:-15px;" class="nav nav-tabs size2" id="myTab3" role="tablist">
        <li class="nav-item"> 
<a class="nav-link active" id="home-tab3" data-toggle="tab" href="#level1" role="tab">Waitig Order</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="profile-tab3" data-toggle="tab" href="#level2" role="tab">Order History</a>
         </li>
        
      </ul>
         <div class="mt-1" style="margin-bottom:-30px;">
        <div class="tab-content" id="myTabContent">
     <div class="tab-pane fade active show" id="level1" role="tabpanel">
         
         test
         
         </div>
          <div class="tab-pane fade" id="level2" role="tabpanel">
              
              test 2
              
              </div> </div></div> -->
<div class="mb-5">
 
   
      
      <div class="mt-1 pb-5">
      <div class="tab-content" id="myTabContent">
      <!--=========================tab-1========================================-->
        <div class="tab-pane fade active show" id="parity" role="tabpanel"></div>
       <!--=========================tab-1 end========================================-->
       <!--=========================tab-2========================================-->
        <div class="tab-pane fade" id="sapre" role="tabpanel"></div>
        <!--=========================tab-2 end========================================-->
        <!--=========================tab-3========================================-->
        <div class="tab-pane fade" id="bcone" role="tabpanel"></div>
        <!--=========================tab-3 end========================================-->
        <!--=========================tab-4========================================-->
        <div class="tab-pane fade" id="emerd" role="tabpanel"></div>
        <!--=========================tab-4 end========================================-->
      </div>
      </div>
  </div>

<!-- appCapsule -->
<?php include("include/footer.php");?>




<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
<script src="assets/js/betting.js"></script>


 <script>
let btnSend = document.querySelector('button');
let message = document.querySelector('h1');
btnSend.addEventListener('click', () =>{
    btnSend.innerText = 'Wait...';
    setTimeout(()=>{
        btnSend.style.display = "none";
    },4000);
});
</script>
 
<script>
$(document).ready(function () {
   
var x = setInterval(function() { 
start_count_down(); 
  $('#closbtnloader').click(); 
}, 1e3);
getResultbyCategory2('parity','parity');

$('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
});
function start_count_down() { 
$(".showload").hide();
$(".none").show();
var countDownDate = Date.parse(new Date) / 1e3;
  var now = new Date().getTime();
  var distance = 180 - countDownDate % 180;
  //alert(distance);
  var i = distance / 60,
   n = distance % 60,
   o = n / 10,
   s = n % 10;
  var minutes = Math.floor(i);
  var seconds = ('0'+Math.floor(n)).slice(-2);
  document.getElementById("demo").innerHTML = "<span class='timer'>0"+Math.floor(minutes)+"</span>" + "<span>:</span>" +"<span class='timer'>"+seconds+"</span>";
document.getElementById("counter").value = distance;
if(distance==180 || distance==179 || distance==178 || distance==177 || distance==176){
generateGameid();
getResultbyCategory2('parity','parity');
getResultbyCategory2('sapre','sapre');
getResultbyCategory2('bcone','bcone');
getResultbyCategory2('emerd','emerd');
}
if(distance<=30)
{
$(".gbutton").prop('disabled', true);
$(".gbutton1").prop('hidden', false);
}else{ 
$(".gbutton").prop('disabled', false);
$(".gbutton1").prop('hidden', true);
	}
if(distance>=177)
{
$(".gbutton2").prop('hidden', true);
$(".gbutton1").prop('hidden', false);
}else{ 
$(".gbutton2").prop('hidden', false);
$(".gbutton1").prop('hidden', true);
	}
}

function generateGameid()
{
var futureid=$('#futureid').val();
	$.ajax({
    type: "Post",
    data:"futureid=" + futureid + "& type=" + "generate" ,
    url: "periodid-generation.php",
    success: function (html) {
     //alert(html);
	 var arr = html.split('~');
	 //alert(arr[1]);
	 document.getElementById("gameid").innerHTML=arr[0];
	 document.getElementById("inputgameid").value=arr[0];
	 document.getElementById("futureid").value=arr[0];
      return false;
      },
      error: function (e) {}
      });
	}
	
	function betbutton(color,type,name)
{
	$.ajax({
    type: "Post",
    data:"type=" + type+ "& name=" + name ,
    url: "betform.php",
    success: function (html) {
		
	 document.getElementById("loadform").innerHTML=html;
      return false;
      },
      error: function (e) {}
      });

	if(type=='number'){
	$(".paymentheader").css("background-color", color);
	document.getElementById('chn').innerHTML = 'Select '+name;

		}else{
	$(".paymentheader").css("background-color", color);
	document.getElementById('chn').innerHTML = 'Select '+name;
	}
	$('#payment').modal({backdrop: 'static', keyboard: false})  
     $('#payment').modal('show');
     document.getElementById('type').value = type;
	 document.getElementById('value').value = name;

	}
//=====================amount calculation======================	
function contract(abc){ //alert(abc);
var amount =$("#amount").val();
document.getElementById('contractmoney').value = abc;
var addvalue=abc*amount;
document.getElementById('showamount').innerHTML = addvalue;
document.getElementById('finalamount').value = addvalue;

};	
function addvalue()
{ 
var amount =$("#amount").val();
var contractmoney =$("#contractmoney").val();
var addvalue=contractmoney*amount;
document.getElementById('showamount').innerHTML = addvalue;
document.getElementById('finalamount').value = addvalue;
	}

function tabname(tabname){
document.getElementById('tab').value = tabname;	
	}	

//=====================amount calculation======================
//====================== get Result==============================

function getResultbyCategory2(category,containerid)
{ 
$.ajax({
    type: "Post",
    data:"category=" + category,
    url: "getResultbyCategory2.php",
    success: function (html) {
	 document.getElementById(containerid).innerHTML=html;
	 waitlist('parity',<?php echo $userid;?>,'paritywait');
	 waitlist('sapre',<?php echo $userid;?>,'saprewait');
	 waitlist('bcone',<?php echo $userid;?>,'bconewait');
	 waitlist('emerd',<?php echo $userid;?>,'emerdwait');
	 if(category=='parity'){
	  $('#parityt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordparityt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='sapre'){
	  $('#sapret').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordsapret').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='bcone'){
	  $('#bconet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordbconet').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
	 else if(category=='emerd'){
	  $('#emerdt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	$('#myrecordemerdt').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
	 }
      return false;
      },
      error: function (e) {}
      });
	 
	}

$(document).ready(function () {
	waitlist('parity',<?php echo $userid;?>,'paritywait');
});
  function reloadbtn(id){
    $('#loader').modal({backdrop: 'static', keyboard: false})  
 $('#loader').modal('show');

$.ajax({
    type: "Post",
    data:"userid=" + id,
    url: "getwalletbalance.php",
    success: function (html) {
	 
			document.getElementById('balance').innerHTML =html;
      return false;
      },
      error: function (e) {}
      });
	
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

</body>
</html>