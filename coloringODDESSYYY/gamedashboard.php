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
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/wingo.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<style>
.appContent3 {
	background-image: url("/icon_game.jpg");
	border-color: #DAA520 !important;
	padding:18px;
   background-color: #DAA520 !important;
	font-size:16px;
	background-repeat: no-repeat;
  background-size: 400px 100px;
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


<!-- App Header -->
<div class="">
    
  <div class="appContent3 text-white">
      <div class="row">
        <div class="column text1">
      <center></div>
     <div onclick="window.location.href='#'" class="column">
        
     <center>   <b><a style="color:white;" data-toggle="modal" href="#rule" data-backdrop="static" data-keyboard="false"> &emsp;&emsp;<i class="icon ion-md-paper"></i> Read Rule</a></b></div>
      
      
     
    </div>
    <div class="row">
        <div class="column text1">
      <center><n><div  style="font-size:18px;">Available Balance:
      <br>₹ <span id="balance"><?php echo number_format(wallet($con,'amount',$userid), 2); ?></span></div></div>
     <div class="column">
        
     <center> <br>  <a style="color:black;" href="recharge.php" class="btn1 btn-sm btn-success m-0">Recharge</a> </div>
      
    
    </div>
  </div>
</div>
<!-- searchBox --> 

<!-- * searchBox --> 
<!-- * App Header --> 

<!-- App Capsule -->
<div class="mb-5">
  <div class="long mb-3">      
      <!-- listview -->
      <ul class="nav nav-tabs size4" id="myTab3" role="tablist">
        <li class="nav-item"> 
<a class="nav-link active" id="home-tab3" data-toggle="tab" href="#parity" role="tab" onClick="tabname('parity');getResultbyCategory('parity','parity');">Sepent</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="profile-tab3" data-toggle="tab" href="#sapre" role="tab" onClick="tabname('sapre');getResultbyCategory('sapre','sapre');">Parity</a>
         </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#bcone" role="tab" onClick="tabname('bcone');getResultbyCategory('bcone','bcone');">Sapre</a> 
        </li>
        <li class="nav-item"> 
<a class="nav-link" id="contact-tab3" data-toggle="tab" href="#emerd" role="tab" onClick="tabname('emerd');getResultbyCategory('emerd','emerd');">Bcone</a> 
        </li>
      </ul>
      <!--=====================game area============================-->
      <div class="appContent1 bg-light mt-n1">
      <div class="layout">
        <div class="gameidtimer"> 
      <h8 class="mb-8"><i class="icon ion-md-trophy"></i> Period ID</h2>
      <h5>
      <span class="showload">
      <div class="spinnner-border text-danger" role="status">
                    </div></span>
             <span id="gameid" class="none"><?php echo sprintf("%03d",gameid($con));?></span>
             <input type="hidden" id="futureid" name="futureid" value="<?php echo sprintf("%03d",gameid($con));?>">
             </h5>
      </div>
      <div class="gameidtimer text-right"> 
      <h7 class="mb-2">Count Down</h6>
       <h5 class="gbutton2" id="demo"></h5> <button type="button"  style="color:black;" href="javascript:void(0);" onClick="reloadbtn(3243);" onclick="getResultbyCategory(parity,parity)" class="gbutton1 btn7"><i class="fa fa-spinner fa-spin"></i> loading</button>
      
     
      </div>
      </div>
       <section class="home">
       
        <div class="row">
            <div class="home-text">
          <i style="color:black;font-size:20px;" class="fa fa-volume-up left"></i>
                 <p class="animate-text right">
                        
                <span style="color:black;"> Congratulations to ******8180 <span1 style="color:red;">Winning 150.4K</span1></span>
        
                <span  style="color:black;"> Congratulations to ******2012 <span1 style="color:red;">Winning 189.1K</span1></span>
               
                <span style="color:black;" > Congratulations to ******4775 <span1 style="color:red;">Winning 125.5K</span1></span>
               
                <span style="color:black;" > Congratulations to ******3659 <span1 style="color:red;">Winning 154.8K</span1></span>
               
                <span style="color:black;" >  Congratulations to ******1676 <span1 style="color:red;">Winning 26.7K</span1></span>
                 
                <span style="color:black;" > Congratulations to ******9926 <span1 style="color:red;">Winning 189.8K</span1></span>
                  
                <span style="color:black;" > Congratulations to ******1415 <span1 style="color:red;">Winning 151.6K</span1></span>
                   
                <span style="color:black;" > Congratulations to ******5997 <span1 style="color:red;">Winning 12.8K</span1></span>
                     
                <span style="color:black;"> Congratulations to ******8637 <span1 style="color:red;">Winning 105.6K</span1></span>
                    
                <span  style="color:black;"> Congratulations to ******6916 <span1 style="color:red;">Winning 16.5K</span1></span>
                 
            
                 </p>
            </div>
       
     </div>
 </section>
 
      <div class="bg-light  layout text-center mt-2">
      <div class="divsize4">
      <button type="button" class="btn btn-sm btn-success gbutton none btn6" onClick="betbutton('#1DCC70','button','Green');">Join Green</button>
      </div>
       <div class="divsize4">
      <button type="button" class="btn btn-sm btn-danger gbutton none btn6" onClick="betbutton('#FF0000','button','Red');">Join Red</button>
      </div>
      <div class="divsize4">
      <button type="button" class="btn btn-sm btn-violet gbutton none btn6" onClick="betbutton('#9c27b0','button','Violet');">Join Violet</button>
      </div>
     
     
      </div>
      
      
     <div class="container-fluid">
        <div class="layout text-center bg-light  d-flex justify-content-center">
      
      
      <div class="divsize2">
          
          
      <button type="button" class="btn btn-sm btn-danger gbutton none btn3" onClick="betbutton('#FF0000','button','0');">0</button>
      </div>&emsp;
      <div class="divsize2">
      <button type="numbutton" class="btn btn-sm btn-success gbutton none btn5" onClick="betbutton('#008000','button','1');">1</button>
      </div>&emsp;
      
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-danger gbutton none btn5" onClick="betbutton('#FF0000','button','2');">2</button>
      </div>&emsp;
      
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-success gbutton none btn5" onClick="betbutton('#008000','button','3');">3</button>
      </div>&emsp;
      
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-danger gbutton none btn5" onClick="betbutton('#FF0000','button','4');">4</button>
      </div>
      
      </div>
        <div class="layout text-center bg-light d-flex justify-content-center">
      
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-success gbutton none btn4" onClick="betbutton('#008000','button','5');">5 </button>
      </div>&emsp;
      
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-danger gbutton none btn5" onClick="betbutton('#FF0000','button','6');"> 6</button>
      </div>&emsp;
      
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-success gbutton none btn5" onClick="betbutton('#008000','button','7');">7 </button>
      </div>&emsp;
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-danger gbutton none btn5" onClick="betbutton('#FF0000','button','8');"> 8</button>
      </div>&emsp;
      <div class="divsize2">
      <button type="button" class="btn btn-sm btn-success gbutton none btn5" onClick="betbutton('#008000','button','9');"> 9</button>
      </div>
      </div>
      </div>
      
      </div>
      </div>
      <!--=====================game area end============================-->
      
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
</div>
<!-- appCapsule -->
<div class="appBottomMenu">
 

    
   
  
      <div class="item "> <a href="promo-share">
    <p> <i class="fa fa-user-plus"></i> <span>Reffer & Earn</span> </p>
    </a> </div>
    <div class="item active"> <a href="gamedashboard.php">
    <p> <i class="icon ion-md-star"></i> <span>WinGO</span> </p>
    </a> </div>
     <div class="item "> <a href="myaccount.php">
    <p> <i class="icon ion-md-person"></i> <span>My Account</span> </p>
    </a> </div>
     
    
    
   
    </div>
<div id="rule" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <h2 style="color:White" class="modal-header1"> Read Carefully</h2>
      <div class="modal-body responsive"> <p style="font-size:10px">3 minutes 1 issue, 2 minutes and 30 seconds to order, 30 seconds to show the lottery result. It opens all day. The total number of trade is 480 issues</p>

<p style="font-size:10px">If you spend 100 to trade, after deducting 2 service fee, your contract amount is 98:</p>

<p style="font-size:10px">1. JOIN GREEN: if the result shows 1,3,7,9, you will get (98*2) 196</p>

<p style="font-size:10px">If the result shows 5, you will get (98*1.5) 147</p>

<p style="font-size:10px">2. JOIN RED: if the result shows 2,4,6,8, you will get (98*2) 196; If the result shows 0, you will get (98*1.5) 147</p>

<p style="font-size:10px">3. JOIN VIOLET: if the result shows 0 or 5, you will get (98*4.5) 441</p>

<p style="font-size:10px">4. SELECT NUMBER: if the result is the same as the number you selected, you will get (98*9) 882</p> </div>
      <div class="modal-footer"> 
      <a type="button" class="pull-left" data-dismiss="modal"><strong>CLOSE</strong></a> 
      </div>
    </div>
  </div>
</div>

<div id="payment" class="modal fade paymentform" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header paymentheader" id="paymenttitle"> 
      <h4 class="modal-title" id="chn"></h4>
       </div>
 <form action="#" method="post" id="bettingForm" autocomplete="off">
      <div class="modal-body mt-1" id="loadform">
     <div class="row">
                    <div class="col-12">
                    <center><h3 class="mb-1">Contract Money</h3>
                    
                        <label class="btn btn-secondary active" onClick="contract(10);">
                          <input class="contract" type="radio" name="contract" id="hoursofoperation" value="10" checked >
                           10 </label>
                        <label class="btn btn-secondary" onClick="contract(100);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="100">
                           100 </label>
                          <label class="btn btn-secondary" onClick="contract(1000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="1000">
                           1000 </label>
                         
                      
                      </center>
                      
                   <input type="hidden" id="contractmoney" name="contractmoney" value="10">   
                      
                   <br>
      <div class="def-number-input number-input">
  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); addvalue();" class="minus"></button>
  <input class="quantity" min="1" name="amount" id="amount" value="1" type="number" onKeyUp="addvalue();">
  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); addvalue();" class="plus"></button>
</div>
<input type="hidden" name="userid" id="userid" class="form-control" value="3243">
      <input type="hidden" name="type" id="type" class="form-control" value="">
    <input type="hidden" name="value" id="value" class="form-control" value="">
      <input type="hidden" name="counter" id="counter" class="form-control" >
      <input type="hidden" name="inputgameid" id="inputgameid" class="form-control" value="20220615454"> 
      <br>
    <center>  <h6 class="mt-2">Total contract money is <span id="showamount">10</span></h6>
      <input type="hidden" name="finalamount" id="finalamount" value="10">
      <div class="custom-control custom-checkbox mt-2">
    <input type="checkbox" checked class="custom-control-input" id="presalerule" name="presalerule">
  <label class="custom-control-label text-muted" for="presalerule">I agree <a data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false">Presale Management Rule</a></label>
                        </div></center>
                    </div>
                    
                </div>
      </div>
      <input type="hidden" name="tab" id="tab" value="parity">
      <div class="modal-footer"> 
   <a type="button" class="pull-left btn btn-sm closebtn" data-dismiss="modal">CANCEL</a>
<button type="submit" class="pull-left btn btn-sm btn-white">CONFIRM</button> 
      </div>
      </form>
    </div>
  </div>
</div>
<div id="alert" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body" id="alertmessage"> </div>
      <div class="text-right pb-1 pr-2">
    <a type="button" class="text-info" data-dismiss="modal">OK</a>
    </div> 
    </div>
  </div>
</div>
<div id="privacy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 style="font-weight:normal;">Privacy Policy</h5> 
              </div>
     <br>
     <p style="padding-left: 10px;"> Note: I have carefully read all contents of this presale management rule, Risk Disclosure Agreement and Risk Agreement and I am agreed to continue with my own risk.</p>
<br>
     
      <div class="modal-footer">
    <a class="pull-center" data-dismiss="modal"><strong>i agree</strong></a>
              </div>
    </div>
  </div>
</div>

  <div id="loader" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content" style="background:transparent; border:none;">
    <div class="text-center pb-1">
  <a type="button" id="closbtnloader" data-dismiss="modal"> <div class="spinner-grow text-success"></div></a></div>
  
    </div>
    </div>
  </div>
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
<script src="assets/js/jquery.dataTables.min.js"></script>
<script>
         const txts=document.querySelector(".animate-text").children,
               txtsLen=txts.length;
           let index=0;
          const textInTimer=3000,
                textOutTimer=2800;

         function animateText() {
            for(let i=0; i<txtsLen; i++){
              txts[i].classList.remove("text-in","text-out");  
            }
            txts[index].classList.add("text-in");

            setTimeout(function(){
                txts[index].classList.add("text-out");              
            },textOutTimer)

            setTimeout(function(){

              if(index == txtsLen-1){
                  index=0;
                }
               else{
                   index++;
                 }
                animateText();
            },textInTimer); 
         }
         
         window.onload=animateText;
   
</script>
 <script>
let btnSend = document.querySelector('button');
let message = document.querySelector('h1');
btnSend.addEventListener('click', () =>{
    btnSend.innerText = 'Please Wait';
    setTimeout(()=>{
        btnSend.style.display = "none";
    },3000);
});
</script>
 
<script>
$(document).ready(function () {
   
var x = setInterval(function() { 
start_count_down(); 
  $('#closbtnloader').click(); 
}, 1e3);
getResultbyCategory('parity','parity');

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
getResultbyCategory('parity','parity');
getResultbyCategory('sapre','sapre');
getResultbyCategory('bcone','bcone');
getResultbyCategory('emerd','emerd');
}
if(distance<=30)
{
$(".gbutton").prop('disabled', true);
}else{ 
$(".gbutton").prop('disabled', false);
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

function getResultbyCategory(category,containerid)
{ 
$.ajax({
    type: "Post",
    data:"category=" + category,
    url: "getResultbyCategory.php",
    success: function (html) {
	 document.getElementById(containerid).innerHTML=html;
	 waitlist('parity',3243,'paritywait');
	 waitlist('sapre',3243,'saprewait');
	 waitlist('bcone',3243,'bconewait');
	 waitlist('emerd',3243,'emerdwait');
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
	waitlist('parity',3243,'paritywait');
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
document.addEventListener("keydown", function (event) {
    if (event.ctrlKey) {
        event.preventDefault();
    }   
});	
</script>
</body>
</html>