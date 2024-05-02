<?php
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}

include("include/connection.php");
$category=$_POST['category'];
$userid=$_SESSION['frontuserid'];
$today=date('Y-m-d');
if($category=='parity')
{?>
        <div class="table-container">
        <table class="table table-borderless" id="myrecordparityt">
        <thead><tr><th></th></tr></thead>    
    <tbody>
        <div id="paritywait"></div>
    <?php
  $userResultQuery=mysqli_query($con,"select *,(select `result` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultnumber,(select `color` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultcolor from `tbl_userresult` where `userid`='".$userid."' and `tab`='parity' and date(`createdate`)='".$today."' order by id desc limit 480");
  while($userResult=mysqli_fetch_array($userResultQuery)){
	   $post_date1 = $userResult['createdate'];
 $post_date21 = strtotime($post_date1);
  $convert3=date('h:i A',$post_date21);
 $convert4=date('d-m-Y',$post_date21);

	?>
  <tr>
            <td class="pl-3" style="border:1px;">
           	<div class="vcard1">
	    
	      <div class="row">
        <div class="column"  style="display: flex;">
        <strong class="point2">Invest<br>Amount</strong>
<strong class="point2" style="color:<?php if($userResult['status']=='success'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php if($userResult['status']=='success'){echo"+ ₹";}else{echo"₹";};?><?php if($userResult['status']=='success'){echo number_format($userResult['paidamount']);}else{echo number_format($userResult['amount']);};?><br><?php echo ucfirst($userResult['status']);?>
        </strong></div>
     <div class="column" style="display: flex;">
        <p class="point2">Create Time</p>
        <p class="point2"><?php echo $convert3;?><br><?php echo $convert4;?></p>
        </div>
      
     <br>
     <br>
    </div>
     <div class="row">
         <div class="column gap">
         <br>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Period ID</div>
        <div class="point2"><?php echo ($userResult['periodid']);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Status</div>
        <div class="point2" ><?php echo ucfirst($userResult['status']);?></div>
        </div>
       <!-- <div class="mt-1" style="display: flex;">
         <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>-->
          <div class="mt-1" style="display: flex;">
        <div class="point2">Result</div>
        <div class="point2" style="font-size:12px; color:<?php if($userResult['resultcolor']=='green'){echo"#1DCC70";}elseif($userResult['resultcolor']=='green+violet'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php echo $userResult['resultnumber'].' ';
		$tt=explode("+",$userResult['resultcolor']); echo ucwords(implode(" + ",$tt));?></div>
		  
        </div> <div class="mt-1" style="display: flex;">
        <div class="point2">Amount</div>
       <div class="point2"><?php echo number_format($userResult['amount'],2);?></div>
        </div></div>
      <!--  <div class="mt-1" style="display: flex;">
        <div class="point2">Contract Count</div>
        <div class="point2">1</div>
        </div> -->
      
       
        
         <div class="column gap">
           <br>
      
        <div class="mt-1" style="display: flex;">
        <div class="point2">Select</div> 
        <div class="point2" style="color:<?php if($userResult['value']=='Green'){echo"#1DCC70";}elseif($userResult['value']=='Red'){echo"#ff2d55";}else{echo"#3D67B3";}?>;"><?php echo $userResult['value'];?></div>
        </div>
       <div class="mt-1" style="display: flex;">
        <div class="point2">Delivery</div>
        <div class="point2"><?php echo number_format($userResult['paidamount'],2);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Fee</div>
        <div class="point2"><?php echo number_format($userResult['fee'],2);?></div>
        </div>
        <div class="mt-1" style="display: flex;">
        <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>
    
        
                </div></div>
         </div><hr>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
        </div>
        
	
<?php }
else if($category=='sapre')
{?>

      
        <div class="table-container">
        <table class="table table-borderless" id="myrecordsapret">
        <thead><tr><th></th></tr></thead>    
    <tbody>
        <div id="saprewait"></div>
    <?php
  $userResultQuery=mysqli_query($con,"select *,(select `result` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultnumber,(select `color` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultcolor from `tbl_userresult` where `userid`='".$userid."' and `tab`='sapre' and date(`createdate`)='".$today."' order by id desc limit 480");
  while($userResult=mysqli_fetch_array($userResultQuery)){
 $post_date1 = $userResult['createdate'];
 $post_date21 = strtotime($post_date1);
  $convert3=date('h:i A',$post_date21);
 $convert4=date('d-m-Y',$post_date21);

	?>
     <tr>
            <td class="pl-3" style="border:1px;">
           	<div class="vcard1">
	    
	      <div class="row">
        <div class="column"  style="display: flex;">
        <strong class="point2">Invest<br>Amount</strong>
<strong class="point2" style="color:<?php if($userResult['status']=='success'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php if($userResult['status']=='success'){echo"+ ₹";}else{echo"₹";};?><?php if($userResult['status']=='success'){echo number_format($userResult['paidamount']);}else{echo number_format($userResult['amount']);};?><br><?php echo ucfirst($userResult['status']);?>
        </strong></div>
     <div class="column" style="display: flex;">
        <p class="point2">Create Time</p>
        <p class="point2"><?php echo $convert3;?><br><?php echo $convert4;?></p>
        </div>
      
     <br>
     <br>
    </div>
     <div class="row">
         <div class="column gap">
         <br>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Period ID</div>
        <div class="point2"><?php echo ($userResult['periodid']);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Status</div>
        <div class="point2" ><?php echo ucfirst($userResult['status']);?></div>
        </div>
       <!-- <div class="mt-1" style="display: flex;">
         <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>-->
          <div class="mt-1" style="display: flex;">
        <div class="point2">Result</div>
        <div class="point2" style="font-size:12px; color:<?php if($userResult['resultcolor']=='green'){echo"#1DCC70";}elseif($userResult['resultcolor']=='green+violet'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php echo $userResult['resultnumber'].' ';
		$tt=explode("+",$userResult['resultcolor']); echo ucwords(implode(" + ",$tt));?></div>
		  
        </div> <div class="mt-1" style="display: flex;">
        <div class="point2">Amount</div>
       <div class="point2"><?php echo number_format($userResult['amount'],2);?></div>
        </div></div>
      <!--  <div class="mt-1" style="display: flex;">
        <div class="point2">Contract Count</div>
        <div class="point2">1</div>
        </div> -->
      
       
        
         <div class="column gap">
           <br>
      
        <div class="mt-1" style="display: flex;">
        <div class="point2">Select</div> 
        <div class="point2" style="color:<?php if($userResult['value']=='Green'){echo"#1DCC70";}elseif($userResult['value']=='Red'){echo"#ff2d55";}else{echo"#3D67B3";}?>;"><?php echo $userResult['value'];?></div>
        </div>
       <div class="mt-1" style="display: flex;">
        <div class="point2">Delivery</div>
        <div class="point2"><?php echo number_format($userResult['paidamount'],2);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Fee</div>
        <div class="point2"><?php echo number_format($userResult['fee'],2);?></div>
        </div>
        <div class="mt-1" style="display: flex;">
        <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>
    
        
                </div></div>
         </div><hr>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
        </div>

<?php	
}else if($category=='bcone')
{
?>
        <div class="table-container">
        <table class="table table-borderless" id="myrecordbconet">
        <thead><tr><th></th></tr></thead>    
    <tbody>
        <div id="bconewait"></div>
    <?php
  $userResultQuery=mysqli_query($con,"select *,(select `result` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultnumber,(select `color` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultcolor from `tbl_userresult` where `userid`='".$userid."' and `tab`='bcone' and date(`createdate`)='".$today."' order by id desc limit 480");
  while($userResult=mysqli_fetch_array($userResultQuery)){
	 $post_date1 = $userResult['createdate'];
 $post_date21 = strtotime($post_date1);
  $convert3=date('h:i A',$post_date21);
 $convert4=date('d-m-Y',$post_date21);

	?>
    <tr>
            <td class="pl-3" style="border:1px;">
           	<div class="vcard1">
	    
	      <div class="row">
        <div class="column"  style="display: flex;">
        <strong class="point2">Invest<br>Amount</strong>
<strong class="point2" style="color:<?php if($userResult['status']=='success'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php if($userResult['status']=='success'){echo"+ ₹";}else{echo"₹";};?><?php if($userResult['status']=='success'){echo number_format($userResult['paidamount']);}else{echo number_format($userResult['amount']);};?><br><?php echo ucfirst($userResult['status']);?>
        </strong></div>
     <div class="column" style="display: flex;">
        <p class="point2">Create Time</p>
        <p class="point2"><?php echo $convert3;?><br><?php echo $convert4;?></p>
        </div>
      
     <br>
     <br>
    </div>
     <div class="row">
         <div class="column gap">
         <br>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Period ID</div>
        <div class="point2"><?php echo ($userResult['periodid']);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Status</div>
        <div class="point2" ><?php echo ucfirst($userResult['status']);?></div>
        </div>
       <!-- <div class="mt-1" style="display: flex;">
         <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>-->
          <div class="mt-1" style="display: flex;">
        <div class="point2">Result</div>
        <div class="point2" style="font-size:12px; color:<?php if($userResult['resultcolor']=='green'){echo"#1DCC70";}elseif($userResult['resultcolor']=='green+violet'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php echo $userResult['resultnumber'].' ';
		$tt=explode("+",$userResult['resultcolor']); echo ucwords(implode(" + ",$tt));?></div>
		  
        </div> <div class="mt-1" style="display: flex;">
        <div class="point2">Amount</div>
       <div class="point2"><?php echo number_format($userResult['amount'],2);?></div>
        </div></div>
      <!--  <div class="mt-1" style="display: flex;">
        <div class="point2">Contract Count</div>
        <div class="point2">1</div>
        </div> -->
      
       
        
         <div class="column gap">
           <br>
      
        <div class="mt-1" style="display: flex;">
        <div class="point2">Select</div> 
        <div class="point2" style="color:<?php if($userResult['value']=='Green'){echo"#1DCC70";}elseif($userResult['value']=='Red'){echo"#ff2d55";}else{echo"#3D67B3";}?>;"><?php echo $userResult['value'];?></div>
        </div>
       <div class="mt-1" style="display: flex;">
        <div class="point2">Delivery</div>
        <div class="point2"><?php echo number_format($userResult['paidamount'],2);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Fee</div>
        <div class="point2"><?php echo number_format($userResult['fee'],2);?></div>
        </div>
        <div class="mt-1" style="display: flex;">
        <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>
    
        
                </div></div>
         </div><hr>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
        </div>

<?php
 }else if($category=='emerd')
 {
 ?>
 
        <div class="table-container">
        <table class="table table-borderless" id="myrecordemerdt">
        <thead><tr><th></th></tr></thead>    
    <tbody>
        <div id="emerdwait"></div>
    <?php
  $userResultQuery=mysqli_query($con,"select *,(select `result` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultnumber,(select `color` from `tbl_result` where `periodid`=`tbl_userresult`.`periodid` and `tabtype`=`tbl_userresult`.`tab`)as resultcolor from `tbl_userresult` where `userid`='".$userid."' and `tab`='emerd' and date(`createdate`)='".$today."' order by id desc limit 480");
  while($userResult=mysqli_fetch_array($userResultQuery)){
	 $post_date1 = $userResult['createdate'];
 $post_date21 = strtotime($post_date1);
  $convert3=date('h:i A',$post_date21);
 $convert4=date('d-m-Y',$post_date21);

	?>
   <tr>
            <td class="pl-3" style="border:1px;">
           	<div class="vcard1">
	    
	      <div class="row">
        <div class="column"  style="display: flex;">
        <strong class="point2">Invest<br>Amount</strong>
<strong class="point2" style="color:<?php if($userResult['status']=='success'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php if($userResult['status']=='success'){echo"+ ₹";}else{echo"₹";};?><?php if($userResult['status']=='success'){echo number_format($userResult['paidamount']);}else{echo number_format($userResult['amount']);};?><br><?php echo ucfirst($userResult['status']);?>
        </strong></div>
     <div class="column" style="display: flex;">
        <p class="point2">Create Time</p>
        <p class="point2"><?php echo $convert3;?><br><?php echo $convert4;?></p>
        </div>
      
     <br>
     <br>
    </div>
     <div class="row">
         <div class="column gap">
         <br>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Period ID</div>
        <div class="point2"><?php echo ($userResult['periodid']);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Status</div>
        <div class="point2" ><?php echo ucfirst($userResult['status']);?></div>
        </div>
       <!-- <div class="mt-1" style="display: flex;">
         <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>-->
          <div class="mt-1" style="display: flex;">
        <div class="point2">Result</div>
        <div class="point2" style="font-size:12px; color:<?php if($userResult['resultcolor']=='green'){echo"#1DCC70";}elseif($userResult['resultcolor']=='green+violet'){echo"#1DCC70";}else{echo"#ff2d55";}?>;"><?php echo $userResult['resultnumber'].' ';
		$tt=explode("+",$userResult['resultcolor']); echo ucwords(implode(" + ",$tt));?></div>
		  
        </div> <div class="mt-1" style="display: flex;">
        <div class="point2">Amount</div>
       <div class="point2"><?php echo number_format($userResult['amount'],2);?></div>
        </div></div>
      <!--  <div class="mt-1" style="display: flex;">
        <div class="point2">Contract Count</div>
        <div class="point2">1</div>
        </div> -->
      
       
        
         <div class="column gap">
           <br>
      
        <div class="mt-1" style="display: flex;">
        <div class="point2">Select</div> 
        <div class="point2" style="color:<?php if($userResult['value']=='Green'){echo"#1DCC70";}elseif($userResult['value']=='Red'){echo"#ff2d55";}else{echo"#3D67B3";}?>;"><?php echo $userResult['value'];?></div>
        </div>
       <div class="mt-1" style="display: flex;">
        <div class="point2">Delivery</div>
        <div class="point2"><?php echo number_format($userResult['paidamount'],2);?></div>
        </div>
         <div class="mt-1" style="display: flex;">
        <div class="point2">Fee</div>
        <div class="point2"><?php echo number_format($userResult['fee'],2);?></div>
        </div>
        <div class="mt-1" style="display: flex;">
        <div class="point2">Open Price</div>
        <div class="point2"><?php echo number_format($userResult['openprice'],2);?></div>
        </div>
    
        
                </div></div>
         </div><hr>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
        </div>

 <?php }?>