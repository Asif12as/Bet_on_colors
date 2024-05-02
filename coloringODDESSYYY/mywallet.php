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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="app.def07d02.css">
  <link rel="stylesheet" href="main.def07d02.css">
  <link rel="stylesheet" href="pages__member.def07d02.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="vantjs.def07d02.css">
  <link rel="stylesheet" href="vendor.def07d02.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-154573245-1"></script>

  <style>
    .appHeader1 {
      background-color: #fff !important;
      border-color: #fff !important;
    }

    * {
      box-sizing: border-box;
      margin: 0px;
    }

    a {
      color: black;
    }

    /* Create two equal columns that floats next to each other */
    .column1 {
      padding-left: 15px;
      padding-right: 15px;
      width: calc(100% / 3);
      float: left;
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
      width: calc(100% / 2);
      /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .appContent3 {
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  backdrop-filter: blur(11px);
  -webkit-backdrop-filter: blur(11px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
      padding: 20px;
      padding-top: 23px;
      padding-bottom: 23px;
      font-size: 16px;
      /* box-shadow: 0 4px 8px 0 rgb(0 0 0 / 21%); */
    }

    .user-block .user-img {
      width: 40px;
      height: 40px;
      float: left;
      margin-right: 10px;
      margin-top: -10px;
      background: #333;
    }

    .img-circle {
      border-radius: 50%;
    }

    .accordion .btn-link {
      box-shadow: none;
      padding: 8px !important;
      margin: 0px 0px;
      color: #333 !important;
      font-size: 17px;
      font-weight: normal;
      border-top: solid 1px #ccc;
    }

    .accordion .collapsed {
      border: none;
    }

    .accordion .show {
      border-bottom: solid 1px #ccc;
    }

    .accordion .sub-link {
      box-shadow: none;
      padding: 8px !important;
      color: #333 !important;
      font-size: 14px;
      font-weight: normal;
      display: block;
    }

    .accordion .sub-link:hover {
      color: #00F !important;
    }

    .accordion .btn-link:hover {
      background: #F5F5F5;
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
      font-size: 24px;
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

    .right {
      float: right;
      opacity: 100%;
      font-size: 16px;
      color: white;
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

    .light {
      height: 24px;
      padding: 0px 0px;
      margin: 5px 2px;
      border-radius: 20px;
      width: 24px;
    }

    .light1 {
      height: 26px;
      padding: 0px 0px;
      margin: 5px 2px;
      border-radius: 20px;
      width: 26px;
    }

    [v-cloak] {
      display: none;
    }

    .loading {
      width: 80px;
      height: 100vh;
      margin: 0 auto;
      background: none;
      line-height: 93vh;
    }

    .loading span {
      display: inline-block;
      width: 8px;
      height: 55px;
      border-radius: 3px;
      background: #13d3c9;
      -webkit-animation: load 1s ease infinite;
    }

    @-webkit-keyframes load {

      0%,
      100% {
        height: 40px;
        background: #13d3c9;
      }

      50% {
        height: 70px;
        margin: -15px 0;
        background: #1ee3dc;
      }

      70% {
        height: 65px;
        margin: -15px 0;
        background: #1ee3dc;
      }
    }

    .loading span:nth-child(2) {
      -webkit-animation-delay: 0.2s;
    }

    .loading span:nth-child(3) {
      -webkit-animation-delay: 0.4s;
    }

    .loading span:nth-child(4) {
      -webkit-animation-delay: 0.6s;
    }

    .loading span:nth-child(5) {
      -webkit-animation-delay: 0.8s;
    }

    .loading span:nth-child(6) {
      -webkit-animation-delay: 0.6s;
    }
    .lo-0{
      opacity: 85%;
    }
    body{
      background: url('promo.jpg') fixed;
      height: 100%;
      
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
    }
  </style>
</head>

<body>
  <?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];?>
  <div><br><br>
    <div class="appContent3 text-white">
      <div class="row">
        <div class="col-12 mb-1" style="margin-top: 5px">
          <div class="user-block"> <img class="user-img img-circle img-bordered-lg" src="assets/img/avatar.svg"> </div>

          <b style="color:white; font-weight: 400; font-size:17px"> Member003243</b>



        </div>

        <div class="column"><br><a href="#">
            <center><span style="font-weight:400; font-size:15px; color: white;"> <span style="font-size: 18px;color: white;"> <?php echo number_format(wallet($con,'amount',$userid), 2);?></span><br>Available Balance</span></center>
          </a>
        </div>

        <!--   <div class="column"><br>
    <center><span style="font-weight: 500; font-size:18px;">₹ <span id="bms">0</span><br>Invite Bonus<span></center></div>
 -->
        <div class="column"><br>
          <center><span style="font-weight: 400; font-size:16px;">₹ <span id="bms">0.00</span><br>Integral<span></center>
        </div>
        <br><br><br>
          <div class="text-center mt-3" style="padding-top: 45px; display: flex;
          align-items: center;
          justify-content: center; margin-left: 20%; margin-right: 20%">
        <button onclick="window.location.href='recharge'" class="btn" style="width:80%;border: white; border-radius: 5px; height:55px; font-weight: 400; font-size: 17px; background-color: #00b8a9; color: white;">Recharge</button>  
      
        <a href="withdrawal"  class="btn" style="width:80%;border: white; border-radius: 5px; height:55px; background-color: #00b8a9; font-weight: 400; font-size: 17px; color: white;"> Withdrawal</a>
        </div>
      

      </div>

</body>

</html>
