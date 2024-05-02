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
<div style="padding-bottom:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;Sepent Records</span><a style="color:black; font-size:14px" class="right" href="star_history.php">more >&nbsp;&nbsp;</a> </div>
    
          
        <div class="table-container" id="paritycontainer">
        <table class="table table-borderless table-hover text-center" id="parityt">
        <thead>
        <tr>
        <th>Period</th>
        <th>Price</th>
        <th>Number</th>
        <th>Result</th>
        </tr>
        </thead>
        <tbody>
        <?php
 $parityrecordQuery=mysqli_query($con,"select * from `tbl_result` where `tabtype`='parity' order by id desc limit 480");
 $parityrecordRow=mysqli_num_rows($parityrecordQuery);
 if($parityrecordRow==''){?>
 <tr>
        <td colspan="4">
        <div style="display: flex;">
        <div class="spacer"></div>
        <div>No data available !</div>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php 
		}else{
		while($parityResult=mysqli_fetch_array($parityrecordQuery)){
			if($parityResult['resulttype']=='real'){
			?>
        <tr>
        <td><?php echo $parityResult['periodid'];?></td>
        <td><?php if($parityResult["result"]=='1'){echo"31981";}elseif($parityResult["result"]=='2'){echo"30892";}elseif($parityResult["result"]=='3'){echo"31563";}elseif($parityResult["result"]=='4'){echo"31244";}elseif($parityResult["result"]=='5'){echo"31565";}elseif($parityResult["result"]=='6'){echo"31766";}elseif($parityResult["result"]=='7'){echo"30257";}elseif($parityResult["result"]=='8'){echo"30898";}elseif($parityResult["result"]=='9'){echo"31569";}elseif($parityResult["result"]=='0'){echo"31760";}?></td>
        <td><span style="color:<?php if($parityResult['color']=='green'){echo"#1DCC70";}else if($parityResult['color']=='red'){echo"#ff2d55";}else if($parityResult['color']=='red+violet'){echo"#ff2d55";}else if($parityResult['color']=='green+violet'){echo"#1DCC70";}?>;"><?php echo $parityResult['result'];?></span></td>
        <td>
        <div style="display: flex;">
       
        <?php if($parityResult['color']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($parityResult['color']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($parityResult['color']=='red+violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($parityResult['color']=='green+violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }else if($parityResult['resulttype']=='random'){?>
        <tr>
        <td><?php echo $parityResult['periodid'];?></td>
        <td><?php echo $parityResult['randomprice'];?></td>
        <td><span style="color:<?php if($parityResult['randomcolor']=='green'){echo"#1DCC70";}else if($parityResult['randomcolor']=='red'){echo"#ff2d55";}else if($parityResult['randomcolor']=='red++violet'){echo"#ff2d55";}else if($parityResult['randomcolor']=='green++violet'){echo"#1DCC70";}?>;"><?php echo $parityResult['randomresult'];?></span></td>
        <td>
        <div style="display: flex;">
        
        <?php if($parityResult['randomcolor']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($parityResult['randomcolor']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($parityResult['randomcolor']=='red++violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($parityResult['randomcolor']=='green++violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }?>
        <?php }}?>
         </tbody>
          </table>
       </div>
    <div style="padding-bottom:20px; padding-top:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;My Sepent Records</span><a style="color:black; font-size:14px" class="right" href="star_result_records.php">more >&nbsp;&nbsp;</a> </div>
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
<div style="padding-bottom:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;Parity Records</span><a style="color:black; font-size:14px" class="right" href="parity_history.php">more >&nbsp;&nbsp;</a> </div>
        <div class="table-container">
        <table class="table table-borderless table-hover text-center" id="sapret">
        <thead>
        <tr>
        <th>Period</th>
        <th>Price</th>
        <th>Number</th>
        <th>Result</th>
        </tr>
        </thead>
        <tbody>
        <?php
 $saprerecordQuery=mysqli_query($con,"select * from `tbl_result` where `tabtype`='sapre' order by id desc limit 480");
 $saprerecordRow=mysqli_num_rows($saprerecordQuery);
 if($saprerecordRow==''){?>
 <tr>
        <td colspan="4">
        <div style="display: flex;">
        <div class="spacer"></div>
        <div>No data available !</div>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php 
		}else{
		while($sapreResult=mysqli_fetch_array($saprerecordQuery)){
			if($sapreResult['resulttype']=='real'){
			?>
        <tr>
        <td><?php echo $sapreResult['periodid'];?></td>
       <td><?php if($sapreResult["result"]=='1'){echo"31981";}elseif($sapreResult["result"]=='2'){echo"30892";}elseif($sapreResult["result"]=='3'){echo"31563";}elseif($sapreResult["result"]=='4'){echo"31244";}elseif($sapreResult["result"]=='5'){echo"31565";}elseif($sapreResult["result"]=='6'){echo"31766";}elseif($sapreResult["result"]=='7'){echo"30257";}elseif($sapreResult["result"]=='8'){echo"30898";}elseif($sapreResult["result"]=='9'){echo"31569";}elseif($sapreResult["result"]=='0'){echo"31760";}?></td>
        <td><span style="color:<?php if($sapreResult['color']=='green'){echo"#1DCC70";}else if($sapreResult['color']=='red'){echo"#ff2d55";}else if($sapreResult['color']=='red+violet'){echo"#ff2d55";}else if($sapreResult['color']=='green+violet'){echo"#1DCC70";}?>;"><?php echo $sapreResult['result'];?></span></td>
        <td>
        <div style="display: flex;">
     
        <?php if($sapreResult['color']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($sapreResult['color']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($sapreResult['color']=='red+violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($sapreResult['color']=='green+violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }else if($sapreResult['resulttype']=='random'){?>
        <tr>
        <td><?php echo $sapreResult['periodid'];?></td>
        <td><?php echo $sapreResult['randomprice'];?></td>
        <td><span style="color:<?php if($sapreResult['randomcolor']=='green'){echo"#1DCC70";}else if($sapreResult['randomcolor']=='red'){echo"#ff2d55";}else if($sapreResult['randomcolor']=='red++violet'){echo"#ff2d55";}else if($sapreResult['randomcolor']=='green++violet'){echo"#1DCC70";}?>;"><?php echo $sapreResult['randomresult'];?></span></td>
        <td>
        <div style="display: flex;">
        
        <?php if($sapreResult['randomcolor']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($sapreResult['randomcolor']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($sapreResult['randomcolor']=='red++violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($sapreResult['randomcolor']=='green++violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }?>
        <?php }}?>
         </tbody>
          </table>
        </div>
        <div style="padding-top:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;My Parity Records</span> </div>
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

<div style="padding-bottom:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;Sapre Records</span><a style="color:black; font-size:14px" class="right" href="sapre_history.php">more >&nbsp;&nbsp;</a> </div>
        <div class="table-container">
        <table class="table table-borderless table-hover text-center" id="bconet">
        <thead>
        <tr>
        <th>Period</th>
        <th>Price</th>
        <th>Number</th>
        <th>Result</th>
        </tr>
        </thead>
        <tbody>
        <?php
 $bconerecordQuery=mysqli_query($con,"select * from `tbl_result` where `tabtype`='bcone' order by id desc limit 480");
 $bconerecordRow=mysqli_num_rows($bconerecordQuery);
 if($bconerecordRow==''){?>
 <tr>
        <td colspan="4">
        <div style="display: flex;">
        <div class="spacer"></div>
        <div>No data available !</div>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php 
		}else{
		while($bconeResult=mysqli_fetch_array($bconerecordQuery)){
			if($bconeResult['resulttype']=='real'){
			?>
        <tr>
        <td><?php echo $bconeResult['periodid'];?></td>
        <td><?php if($bconeResult["result"]=='1'){echo"31981";}elseif($bconeResult["result"]=='2'){echo"30892";}elseif($bconeResult["result"]=='3'){echo"31563";}elseif($bconeResult["result"]=='4'){echo"31244";}elseif($bconeResult["result"]=='5'){echo"31565";}elseif($bconeResult["result"]=='6'){echo"31766";}elseif($bconeResult["result"]=='7'){echo"30257";}elseif($bconeResult["result"]=='8'){echo"30898";}elseif($bconeResult["result"]=='9'){echo"31569";}elseif($bconeResult["result"]=='0'){echo"31760";}?></td>
        <td><span style="color:<?php if($bconeResult['color']=='green'){echo"#1DCC70";}else if($bconeResult['color']=='red'){echo"#ff2d55";}else if($bconeResult['color']=='red+violet'){echo"#ff2d55";}else if($bconeResult['color']=='green+violet'){echo"#1DCC70";}?>;"><?php echo $bconeResult['result'];?></span></td>
        <td>
        <div style="display: flex;">
        
        <?php if($bconeResult['color']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($bconeResult['color']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($bconeResult['color']=='red+violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($bconeResult['color']=='green+violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }else if($bconeResult['resulttype']=='random'){?>
        <tr>
        <td><?php echo $bconeResult['periodid'];?></td>
        <td><?php echo $bconeResult['randomprice'];?></td>
        <td><span style="color:<?php if($bconeResult['randomcolor']=='green'){echo"#1DCC70";}else if($bconeResult['randomcolor']=='red'){echo"#ff2d55";}else if($bconeResult['randomcolor']=='red++violet'){echo"#ff2d55";}else if($bconeResult['randomcolor']=='green++violet'){echo"#1DCC70";}?>;"><?php echo $bconeResult['randomresult'];?></span></td>
        <td>
        <div style="display: flex;">
      
        <?php if($bconeResult['randomcolor']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($bconeResult['randomcolor']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($bconeResult['randomcolor']=='red++violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($bconeResult['randomcolor']=='green++violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }?>
        <?php }}?>
         </tbody>
          </table>
        </div>
        <div style="padding-top:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;My Sapre Records</span> </div>
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
 <div style="padding-bottom:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;Bcone Records</span><a style="color:black; font-size:14px" class="right" href="bcone_history.php">more >&nbsp;&nbsp;</a> </div>
 
     
        <div class="table-container">
        <table class="table table-borderless table-hover text-center" id="emerdt">
        <thead>
        <tr>
        <th>Period</th>
        <th>Price</th>
        <th>Number</th>
        <th>Result</th>
        </tr>
        </thead>
        <tbody>
        <?php
 $emerdrecordQuery=mysqli_query($con,"select * from `tbl_result` where `tabtype`='emerd' order by id desc limit 480");
 $emerdrecordRow=mysqli_num_rows($emerdrecordQuery);
 if($emerdrecordRow==''){?>
 <tr>
        <td colspan="4">
        <div style="display: flex;">
        <div class="spacer"></div>
        <div>No data available !</div>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php 
		}else{
		while($emerdResult=mysqli_fetch_array($emerdrecordQuery)){
			if($emerdResult['resulttype']=='real'){
			?>
        <tr>
        <td><?php echo $emerdResult['periodid'];?></td>
        <td><?php if($emerdResult["result"]=='1'){echo"31981";}elseif($emerdResult["result"]=='2'){echo"30892";}elseif($emerdResult["result"]=='3'){echo"31563";}elseif($emerdResult["result"]=='4'){echo"31244";}elseif($emerdResult["result"]=='5'){echo"31565";}elseif($emerdResult["result"]=='6'){echo"31766";}elseif($emerdResult["result"]=='7'){echo"30257";}elseif($emerdResult["result"]=='8'){echo"30898";}elseif($emerdResult["result"]=='9'){echo"31569";}elseif($emerdResult["result"]=='0'){echo"31760";}?></td>
        <td><span style="color:<?php if($emerdResult['color']=='green'){echo"#1DCC70";}else if($emerdResult['color']=='red'){echo"#ff2d55";}else if($emerdResult['color']=='red+violet'){echo"#ff2d55";}else if($emerdResult['color']=='green+violet'){echo"#1DCC70";}?>;"><?php echo $emerdResult['result'];?></span></td>
        <td>
        <div style="display: flex;">
       
        <?php if($emerdResult['color']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($emerdResult['color']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($emerdResult['color']=='red+violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($emerdResult['color']=='green+violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }else if($emerdResult['resulttype']=='random'){?>
        <tr>
        <td><?php echo $emerdResult['periodid'];?></td>
        <td><?php echo $emerdResult['randomprice'];?></td>
        <td><span style="color:<?php if($emerdResult['randomcolor']=='green'){echo"#1DCC70";}else if($emerdResult['randomcolor']=='red'){echo"#ff2d55";}else if($emerdResult['randomcolor']=='red++violet'){echo"#ff2d55";}else if($emerdResult['randomcolor']=='green++violet'){echo"#1DCC70";}?>;"><?php echo $emerdResult['randomresult'];?></span></td>
        <td>
        <div style="display: flex;">
    
        <?php if($emerdResult['randomcolor']=='green'){ ?>
        <div class="point green" style="background:#1DCC70;"></div>
        <?php }else if($emerdResult['randomcolor']=='red'){?>
        <div class="point red" style="background:#ff2d55;"></div>
        <?php }else if($emerdResult['randomcolor']=='red++violet'){?>
         <div class="point" style="background:#ff2d55;"></div>&nbsp;
        <div class="point" style="background:#9c27b0;"></div>
 <?php }else if($emerdResult['randomcolor']=='green++violet'){?>
 <div class="point" style="background:#1DCC70;"></div>&nbsp;
         <div class="point" style="background:#9c27b0;"></div>
        <?php }?>
        <div class="spacer"></div>
        </div>
        </td>
        </tr>
        <?php }?>
        <?php }}?>
         </tbody>
          </table>
        </div>
        <div style="padding-top:20px;"> <span   style="font-size:18px;  color:#00b8a9;" class="left"><p1 style="font-size:20px; font-weight:800;">&nbsp;|</p1>&nbsp;My Bcone Records</span> </div>
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
    
    
        
                </div></div>
         </div><hr>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
        </div>

 <?php }?>