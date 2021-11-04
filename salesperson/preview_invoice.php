<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg3'])){
	$msg3 = $_GET['msg3'];
}
if(isset($_GET['msg2'])){
	$msg2 = $_GET['msg2'];
}
$client_id = $_POST['client_id'];
?>
<?php

$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];
$admin_mail=$row["email"];
$department=$row["department"];

?>
<?php

$sql = "SELECT * FROM clients WHERE client_id='".$client_id."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fullname=$row["fullname"];
?>
<?php
$sn1=$_POST['sn1']; 
$sn2=$_POST['sn2']; 
$sn3=$_POST['sn3']; 
$sn4=$_POST['sn4']; 
$sn5=$_POST['sn5']; 
$sn6=$_POST['sn6']; 
$sn7=$_POST['sn7']; 
$sn8=$_POST['sn8']; 
$sn9=$_POST['sn9']; 
$sn10=$_POST['sn10']; 
$sn11=$_POST['sn11']; 
$sn12=$_POST['sn12']; 
$sn13=$_POST['sn13']; 
$sn14=$_POST['sn14']; 
$sn15=$_POST['sn15']; 
$sn16=$_POST['sn16']; 
$sn17=$_POST['sn17'];
$sn18=$_POST['sn18']; 
$sn19=$_POST['sn19']; 
$sn20=$_POST['sn20']; 
$sn21=$_POST['sn21']; 
$sn22=$_POST['sn22']; 
$sn23=$_POST['sn23']; 
$sn24=$_POST['sn24']; 
$sn25=$_POST['sn25']; 
$sn26=$_POST['sn26']; 
$sn27=$_POST['sn27']; 
$sn28=$_POST['sn28']; 
$sn29=$_POST['sn29']; 
$sn30=$_POST['sn30']; 
?>
<?php
$prod1=$_POST['prod1']; 
$prod2=$_POST['prod2']; 
$prod3=$_POST['prod3']; 
$prod4=$_POST['prod4']; 
$prod5=$_POST['prod5']; 
$prod6=$_POST['prod6']; 
$prod7=$_POST['prod7']; 
$prod8=$_POST['prod8']; 
$prod9=$_POST['prod9']; 
$prod10=$_POST['prod10']; 
$prod11=$_POST['prod11']; 
$prod12=$_POST['prod12']; 
$prod13=$_POST['prod13']; 
$prod14=$_POST['prod14']; 
$prod15=$_POST['prod15']; 
$prod16=$_POST['prod16']; 
$prod17=$_POST['prod17'];
$prod18=$_POST['prod18']; 
$prod19=$_POST['prod19']; 
$prod20=$_POST['prod20']; 
$prod21=$_POST['prod21']; 
$prod22=$_POST['prod22']; 
$prod23=$_POST['prod23']; 
$prod24=$_POST['prod24']; 
$prod25=$_POST['prod25']; 
$prod26=$_POST['prod26']; 
$prod27=$_POST['prod27']; 
$prod28=$_POST['prod28']; 
$prod29=$_POST['prod29']; 
$prod30=$_POST['prod30']; 

?>
<?php
$qty1=$_POST['qty1']; 
$qty2=$_POST['qty2']; 
$qty3=$_POST['qty3']; 
$qty4=$_POST['qty4']; 
$qty5=$_POST['qty5']; 
$qty6=$_POST['qty6']; 
$qty7=$_POST['qty7']; 
$qty8=$_POST['qty8']; 
$qty9=$_POST['qty9']; 
$qty10=$_POST['qty10']; 
$qty11=$_POST['qty11']; 
$qty12=$_POST['qty12']; 
$qty13=$_POST['qty13']; 
$qty14=$_POST['qty14']; 
$qty15=$_POST['qty15']; 
$qty16=$_POST['qty16']; 
$qty17=$_POST['qty17'];
$qty18=$_POST['qty18']; 
$qty19=$_POST['qty19']; 
$qty20=$_POST['qty20']; 
$qty21=$_POST['qty21']; 
$qty22=$_POST['qty22']; 
$qty23=$_POST['qty23']; 
$qty24=$_POST['qty24']; 
$qty25=$_POST['qty25']; 
$qty26=$_POST['qty26']; 
$qty27=$_POST['qty27']; 
$qty28=$_POST['qty28']; 
$qty29=$_POST['qty29']; 
$qty30=$_POST['qty30']; 

?>
<?php
$ccost1=$_POST['ccost1']; 
$ccost2=$_POST['ccost2']; 
$ccost3=$_POST['ccost3']; 
$ccost4=$_POST['ccost4']; 
$ccost5=$_POST['ccost5']; 
$ccost6=$_POST['ccost6']; 
$ccost7=$_POST['ccost7']; 
$ccost8=$_POST['ccost8']; 
$ccost9=$_POST['ccost9']; 
$ccost10=$_POST['ccost10']; 
$ccost11=$_POST['ccost11']; 
$ccost12=$_POST['ccost12']; 
$ccost13=$_POST['ccost13']; 
$ccost14=$_POST['ccost14']; 
$ccost15=$_POST['ccost15']; 
$ccost16=$_POST['ccost16']; 
$ccost17=$_POST['ccost17'];
$ccost18=$_POST['ccost18']; 
$ccost19=$_POST['ccost19']; 
$ccost20=$_POST['ccost20']; 
$ccost21=$_POST['ccost21']; 
$ccost22=$_POST['ccost22']; 
$ccost23=$_POST['ccost23']; 
$ccost24=$_POST['ccost24']; 
$ccost25=$_POST['ccost25']; 
$ccost26=$_POST['ccost26']; 
$ccost27=$_POST['ccost27']; 
$ccost28=$_POST['ccost28']; 
$ccost29=$_POST['ccost29']; 
$ccost30=$_POST['ccost30'];

$cost1=number_format(($ccost1),2);
$cost2=number_format(($ccost2),2);
$cost3=number_format(($ccost3),2);
$cost4=number_format(($ccost4),2);
$cost5=number_format(($ccost5),2);
$cost6=number_format(($ccost6),2);
$cost7=number_format(($ccost7),2);
$cost8=number_format(($ccost8),2);
$cost9=number_format(($ccost9),2);
$cost10=number_format(($ccost10),2);
$cost11=number_format(($ccost11),2);
$cost12=number_format(($ccost12),2);
$cost13=number_format(($ccost13),2);
$cost14=number_format(($ccost14),2);
$cost15=number_format(($ccost15),2);
$cost16=number_format(($ccost16),2);
$cost17=number_format(($ccost17),2);
$cost18=number_format(($ccost18),2);
$cost19=number_format(($ccost19),2);
$cost20=number_format(($ccost20),2);
$cost21=number_format(($ccost21),2);
$cost22=number_format(($ccost22),2);
$cost23=number_format(($ccost23),2);
$cost24=number_format(($ccost24),2);
$cost25=number_format(($ccost25),2);
$cost26=number_format(($ccost26),2);
$cost27=number_format(($ccost27),2);
$cost28=number_format(($ccost28),2);
$cost29=number_format(($ccost29),2);
$cost30=number_format(($ccost30),2);

$ssub1=$qty1*$ccost1;
$ssub2=$qty2*$ccost2;
$ssub3=$qty3*$ccost3;
$ssub4=$qty4*$ccost4;
$ssub5=$qty5*$ccost5;
$ssub6=$qty6*$ccost6;
$ssub7=$qty7*$ccost7;
$ssub8=$qty8*$ccost8;
$ssub9=$qty9*$ccost9;
$ssub10=$qty10*$ccost10;
$ssub11=$qty11*$ccost11;
$ssub12=$qty12*$ccost12;
$ssub13=$qty13*$ccost13;
$ssub14=$qty14*$ccost14;
$ssub15=$qty15*$ccost15;
$ssub16=$qty16*$ccost16;
$ssub17=$qty17*$ccost17;
$ssub18=$qty18*$ccost18;
$ssub19=$qty19*$ccost19;
$ssub20=$qty20*$ccost20;
$ssub21=$qty21*$ccost21;
$ssub22=$qty22*$ccost22;
$ssub23=$qty23*$ccost23;
$ssub24=$qty24*$ccost24;
$ssub25=$qty25*$ccost25;
$ssub26=$qty26*$ccost26;
$ssub27=$qty27*$ccost27;
$ssub28=$qty28*$ccost28;
$ssub29=$qty29*$ccost29;
$ssub30=$qty30*$ccost30;


$sub1=number_format(($ssub1),2);
$sub2=number_format(($ssub2),2);
$sub3=number_format(($ssub3),2);
$sub4=number_format(($ssub4),2);
$sub5=number_format(($ssub5),2);
$sub6=number_format(($ssub6),2);
$sub7=number_format(($ssub7),2);
$sub8=number_format(($ssub8),2);
$sub9=number_format(($ssub9),2);
$sub10=number_format(($ssub10),2);
$sub11=number_format(($ssub11),2);
$sub12=number_format(($ssub12),2);
$sub13=number_format(($ssub13),2);
$sub14=number_format(($ssub14),2);
$sub15=number_format(($ssub15),2);
$sub16=number_format(($ssub16),2);
$sub17=number_format(($ssub17),2);
$sub18=number_format(($ssub18),2);
$sub19=number_format(($ssub19),2);
$sub20=number_format(($ssub20),2);
$sub21=number_format(($ssub21),2);
$sub22=number_format(($ssub22),2);
$sub23=number_format(($ssub23),2);
$sub24=number_format(($ssub24),2);
$sub25=number_format(($ssub25),2);
$sub26=number_format(($ssub26),2);
$sub27=number_format(($ssub27),2);
$sub28=number_format(($ssub28),2);
$sub29=number_format(($ssub29),2);
$sub30=number_format(($ssub30),2);

$gtotal=$ssub1+$ssub2+$ssub3+$ssub4+$ssub5+$ssub6+$ssub7+$ssub8+$ssub9+$ssub10+$ssub11+$ssub12+$ssub13+$ssub14+$ssub15+$ssub16+$ssub17+$ssub18+$ssub19+$ssub20+$ssub21+$ssub22+$ssub23+$ssub24+$ssub25+$ssub26+$ssub27+$ssub28+$ssub29+$ssub30;

$ggtotal=number_format(($gtotal),2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "head.php";?>
<link href="form.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
          <?php include_once "title.php"; ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           <?php include_once "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
             

                    <!-- Topbar Navbar -->
                    <?php include_once "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">PREVIEW Proforma</h1>
                        <a href="proforma.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-pen fa-sm text-white-50"></i> Issue Proforma</a>

                              
                    </div>

                 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
 

                        <!-- Pie Chart -->
                     
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            

                            <!-- Color System -->
  

                        </div>

                        <div class="col-xl-12 col-lg-7">

                            <!-- Illustrations -->
                            <div class="card shadow mb-12">
                                <div class="card-header py-6">
                                    <h6 class="m-0 font-weight-bold text-primary">Proforma Invoice Preview</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-left">
                                    <?php
									$Mynumb = rand(0, 10000000000);
                                    $show = $Mynumb;
										?>
                                    </div>
                                    <form method="POST" action="insert_invoice.php">
                                    <input id="special" type="hidden" name="special" value="<?php echo $show ?>" />
                                    <input id="reg_by" type="hidden" name="reg_by" value="<?php echo $admin_mail ?>" />
                                    <input id="client_id" type="hidden" name="client_id" value="<?php echo $client_id ?>" readonly/>
                                    <input id="fullname" type="hidden" name="fullname" value="<?php echo $fullname ?>" readonly/>
            
            <input type="hidden" name="sn1" value="<?php echo $sn1; ?>">
            <input type="hidden" name="sn2" value="<?php echo $sn2; ?>">
            <input type="hidden" name="sn3" value="<?php echo $sn3; ?>">
            <input type="hidden" name="sn4" value="<?php echo $sn4; ?>">
            <input type="hidden" name="sn5" value="<?php echo $sn5; ?>">
            <input type="hidden" name="sn6" value="<?php echo $sn6; ?>">
			<input type="hidden" name="sn7" value="<?php echo $sn7; ?>">
            <input type="hidden" name="sn8" value="<?php echo $sn8; ?>">
            <input type="hidden" name="sn9" value="<?php echo $sn9; ?>">
            <input type="hidden" name="sn10" value="<?php echo $sn10; ?>">
            <input type="hidden" name="sn11" value="<?php echo $sn11; ?>">
            <input type="hidden" name="sn12" value="<?php echo $sn12; ?>">
			<input type="hidden" name="sn13" value="<?php echo $sn13; ?>">
            <input type="hidden" name="sn14" value="<?php echo $sn14; ?>">
            <input type="hidden" name="sn15" value="<?php echo $sn15; ?>">
            <input type="hidden" name="sn16" value="<?php echo $sn16; ?>">
            <input type="hidden" name="sn17" value="<?php echo $sn17; ?>">
            <input type="hidden" name="sn18" value="<?php echo $sn18; ?>">
            <input type="hidden" name="sn19" value="<?php echo $sn19; ?>">
            <input type="hidden" name="sn20" value="<?php echo $sn20; ?>">
            <input type="hidden" name="sn21" value="<?php echo $sn21; ?>">
            <input type="hidden" name="sn22" value="<?php echo $sn22; ?>">
            <input type="hidden" name="sn23" value="<?php echo $sn23; ?>">
            <input type="hidden" name="sn24" value="<?php echo $sn24; ?>">
            <input type="hidden" name="sn25" value="<?php echo $sn25; ?>">
            <input type="hidden" name="sn26" value="<?php echo $sn26; ?>">
            <input type="hidden" name="sn27" value="<?php echo $sn27; ?>">
            <input type="hidden" name="sn28" value="<?php echo $sn28; ?>">
            <input type="hidden" name="sn29" value="<?php echo $sn29; ?>">
            <input type="hidden" name="sn30" value="<?php echo $sn30; ?>">
                 

            <input type="hidden" name="prod1" value="<?php echo $prod1; ?>">
            <input type="hidden" name="prod2" value="<?php echo $prod2; ?>">
            <input type="hidden" name="prod3" value="<?php echo $prod3; ?>">
            <input type="hidden" name="prod4" value="<?php echo $prod4; ?>">
            <input type="hidden" name="prod5" value="<?php echo $prod5; ?>">
            <input type="hidden" name="prod6" value="<?php echo $prod6; ?>">
			<input type="hidden" name="prod7" value="<?php echo $prod7; ?>">
            <input type="hidden" name="prod8" value="<?php echo $prod8; ?>">
            <input type="hidden" name="prod9" value="<?php echo $prod9; ?>">
            <input type="hidden" name="prod10" value="<?php echo $prod10; ?>">
            <input type="hidden" name="prod11" value="<?php echo $prod11; ?>">
            <input type="hidden" name="prod12" value="<?php echo $prod12; ?>">
			<input type="hidden" name="prod13" value="<?php echo $prod13; ?>">
            <input type="hidden" name="prod14" value="<?php echo $prod14; ?>">
            <input type="hidden" name="prod15" value="<?php echo $prod15; ?>">
            <input type="hidden" name="prod16" value="<?php echo $prod16; ?>">
            <input type="hidden" name="prod17" value="<?php echo $prod17; ?>">
            <input type="hidden" name="prod18" value="<?php echo $prod18; ?>">
            <input type="hidden" name="prod19" value="<?php echo $prod19; ?>">
            <input type="hidden" name="prod20" value="<?php echo $prod20; ?>">
            <input type="hidden" name="prod21" value="<?php echo $prod21; ?>">
            <input type="hidden" name="prod22" value="<?php echo $prod22; ?>">
            <input type="hidden" name="prod23" value="<?php echo $prod23; ?>">
            <input type="hidden" name="prod24" value="<?php echo $prod24; ?>">
            <input type="hidden" name="prod25" value="<?php echo $prod25; ?>">
            <input type="hidden" name="prod26" value="<?php echo $prod26; ?>">
            <input type="hidden" name="prod27" value="<?php echo $prod27; ?>">
            <input type="hidden" name="prod28" value="<?php echo $prod28; ?>">
            <input type="hidden" name="prod29" value="<?php echo $prod29; ?>">
            <input type="hidden" name="prod30" value="<?php echo $prod30; ?>">
                 


                        <input type="hidden" name="qty1" value="<?php echo $qty1; ?>">
            <input type="hidden" name="qty2" value="<?php echo $qty2; ?>">
            <input type="hidden" name="qty3" value="<?php echo $qty3; ?>">
            <input type="hidden" name="qty4" value="<?php echo $qty4; ?>">
            <input type="hidden" name="qty5" value="<?php echo $qty5; ?>">
            <input type="hidden" name="qty6" value="<?php echo $qty6; ?>">
			<input type="hidden" name="qty7" value="<?php echo $qty7; ?>">
            <input type="hidden" name="qty8" value="<?php echo $qty8; ?>">
            <input type="hidden" name="qty9" value="<?php echo $qty9; ?>">
            <input type="hidden" name="qty10" value="<?php echo $qty10; ?>">
            <input type="hidden" name="qty11" value="<?php echo $qty11; ?>">
            <input type="hidden" name="qty12" value="<?php echo $qty12; ?>">
			<input type="hidden" name="qty13" value="<?php echo $qty13; ?>">
            <input type="hidden" name="qty14" value="<?php echo $qty14; ?>">
            <input type="hidden" name="qty15" value="<?php echo $qty15; ?>">
            <input type="hidden" name="qty16" value="<?php echo $qty16; ?>">
            <input type="hidden" name="qty17" value="<?php echo $qty17; ?>">
            <input type="hidden" name="qty18" value="<?php echo $qty18; ?>">
            <input type="hidden" name="qty19" value="<?php echo $qty19; ?>">
            <input type="hidden" name="qty20" value="<?php echo $qty20; ?>">
            <input type="hidden" name="qty21" value="<?php echo $qty21; ?>">
            <input type="hidden" name="qty22" value="<?php echo $qty22; ?>">
            <input type="hidden" name="qty23" value="<?php echo $qty23; ?>">
            <input type="hidden" name="qty24" value="<?php echo $qty24; ?>">
            <input type="hidden" name="qty25" value="<?php echo $qty25; ?>">
            <input type="hidden" name="qty26" value="<?php echo $qty26; ?>">
            <input type="hidden" name="qty27" value="<?php echo $qty27; ?>">
            <input type="hidden" name="qty28" value="<?php echo $qty28; ?>">
            <input type="hidden" name="qty29" value="<?php echo $qty29; ?>">
            <input type="hidden" name="qty30" value="<?php echo $qty30; ?>">



                             <input type="hidden" name="cost1" value="<?php echo $ccost1; ?>">
                             <input type="hidden" name="cost2" value="<?php echo $ccost2; ?>">
            <input type="hidden" name="cost3" value="<?php echo $ccost3; ?>">
            <input type="hidden" name="cost4" value="<?php echo $ccost4; ?>">
            <input type="hidden" name="cost5" value="<?php echo $ccost5; ?>">
            <input type="hidden" name="cost6" value="<?php echo $ccost6; ?>">
			<input type="hidden" name="cost7" value="<?php echo $ccost7; ?>">
            <input type="hidden" name="cost8" value="<?php echo $ccost8; ?>">
            <input type="hidden" name="cost9" value="<?php echo $ccost9; ?>">
            <input type="hidden" name="cost10" value="<?php echo $ccost10; ?>">
            <input type="hidden" name="cost11" value="<?php echo $ccost11; ?>">
            <input type="hidden" name="cost12" value="<?php echo $ccost12; ?>">
			<input type="hidden" name="cost13" value="<?php echo $ccost13; ?>">
            <input type="hidden" name="cost14" value="<?php echo $ccost14; ?>">
            <input type="hidden" name="cost15" value="<?php echo $ccost15; ?>">
            <input type="hidden" name="cost16" value="<?php echo $ccost16; ?>">
            <input type="hidden" name="cost17" value="<?php echo $ccost17; ?>">
            <input type="hidden" name="cost18" value="<?php echo $ccost18; ?>">
            <input type="hidden" name="cost19" value="<?php echo $ccost19; ?>">
            <input type="hidden" name="cost20" value="<?php echo $ccost20; ?>">
            <input type="hidden" name="cost21" value="<?php echo $ccost21; ?>">
            <input type="hidden" name="cost22" value="<?php echo $ccost22; ?>">
            <input type="hidden" name="cost23" value="<?php echo $ccost23; ?>">
            <input type="hidden" name="cost24" value="<?php echo $ccost24; ?>">
            <input type="hidden" name="cost25" value="<?php echo $ccost25; ?>">
            <input type="hidden" name="cost26" value="<?php echo $ccost26; ?>">
            <input type="hidden" name="cost27" value="<?php echo $ccost27; ?>">
            <input type="hidden" name="cost28" value="<?php echo $ccost28; ?>">
            <input type="hidden" name="cost29" value="<?php echo $ccost29; ?>">
            <input type="hidden" name="cost30" value="<?php echo $ccost30; ?>">




          <a href="invoice.php?client_id=<?php echo $client_id?>"><input type="button" value="Go Back" style="background-color: #4CAF50; border: none; color: white;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;"/></a>
          
          <table border="1" width="100%" style="border-collapse:collapse">
          <tr>
          <td width="20%"><h5>Client ID:</h5></td>
          <td><h5><?php echo $client_id ?></h5></td>
         </tr>
         <tr>
          <td width="20%"><h5>Client's Name:</h5></td>
          <td><h5><?php echo $fullname ?></h5></td>
         </tr>
         </table><br/>
          <br/>


<table style="margin-top:0;" border="1" style="border-collapse:collapse;" width="100%">
<tr>
<td width="5%"><b>SN</b></td>
<td width="60%"><b>Equipment</b></td>
<td><b>Quantity</b></td>
<td><b>Cost</b></td>
<td><b>Sub Total</b></td>
</tr>


<td>
<b><?php if (isset($sn1)) { echo "$sn1</br>"; } else { echo ""; }?></b>
<b><?php if (isset($sn2)) { echo "$sn2</br>"; } else { echo ""; }?></b>
<b><?php if (isset($sn3)) { echo "$sn3</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn4)) { echo "$sn4</br>"; } else { echo ""; }?></b>
<b><?php if (isset($sn5)) { echo "$sn5</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn6)) { echo "$sn6</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn7)) { echo "$sn7</br>"; } else { echo ""; }?></b>
<b><?php if (isset($sn8)) { echo "$sn8</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn9)) { echo "$sn9</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn10)) { echo "$sn10</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn11)) { echo "$sn11</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn12)) { echo "$sn12</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn13)) { echo "$sn13</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn14)) { echo "$sn14</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn15)) { echo "$sn15</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn16)) { echo "$sn16</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn17)) { echo "$sn17</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn18)) { echo "$sn18</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn19)) { echo "$sn19</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn20)) { echo "$sn20</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn21)) { echo "$sn21</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn22)) { echo "$sn22</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn23)) { echo "$sn23</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn24)) { echo "$sn24</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn25)) { echo "$sn25</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn26)) { echo "$sn26</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn27)) { echo "$sn27</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn28)) { echo "$sn28</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn29)) { echo "$sn29</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($sn30)) { echo "$sn30</br>"; } else { echo ""; }?></b>                                     
</td>



<td>

<b><?php if (isset($prod1)) { echo "$prod1</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod2)) { echo "$prod2</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod3)) { echo "$prod3</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod4)) { echo "$prod4</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod5)) { echo "$prod5</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod6)) { echo "$prod6</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod7)) { echo "$prod7</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod8)) { echo "$prod8</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod9)) { echo "$prod9</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod10)) { echo "$prod10</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod11)) { echo "$prod11</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod12)) { echo "$prod12</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod13)) { echo "$prod13</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod14)) { echo "$prod14</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod15)) { echo "$prod15</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod16)) { echo "$prod16</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod17)) { echo "$prod17</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod18)) { echo "$prod18</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod19)) { echo "$prod19</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod20)) { echo "$prod20</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod21)) { echo "$prod21</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod22)) { echo "$prod22</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod23)) { echo "$prod23</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod24)) { echo "$prod24</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod25)) { echo "$prod25</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod26)) { echo "$prod26</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod27)) { echo "$prod27</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod28)) { echo "$prod28</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod29)) { echo "$prod29</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod30)) { echo "$prod30</br>"; } else { echo ""; }?></b> 

</td>

<td>
<b><?php if (isset($prod1)) { echo "$qty1</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod2)) { echo "$qty2</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod3)) { echo "$qty3</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod4)) { echo "$qty4</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod5)) { echo "$qty5</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod6)) { echo "$qty6</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod7)) { echo "$qty7</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod8)) { echo "$qty8</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod9)) { echo "$qty9</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod10)) { echo "$qty10</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod11)) { echo "$qty11</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod12)) { echo "$qty12</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod13)) { echo "$qty13</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod14)) { echo "$qty14</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod15)) { echo "$qty15</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod16)) { echo "$qty16</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod17)) { echo "$qty17</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod18)) { echo "$qty18</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod19)) { echo "$qty19</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod20)) { echo "$qty20</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod21)) { echo "$qty21</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod22)) { echo "$qty22</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod23)) { echo "$qty23</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod24)) { echo "$qty24</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod25)) { echo "$qty25</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod26)) { echo "$qty26</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod27)) { echo "$qty27</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod28)) { echo "$qty28</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod29)) { echo "$qty29</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod30)) { echo "$qty30</br>"; } else { echo ""; }?></b> 

</td>

<td>
<b><?php if (isset($prod1)) { echo "&#8358;$cost1</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod2)) { echo "&#8358;$cost2</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod3)) { echo "&#8358;$cost3</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod4)) { echo "&#8358;$cost4</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod5)) { echo "&#8358;$cost5</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod6)) { echo "&#8358;$cost6</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod7)) { echo "&#8358;$cost7</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod8)) { echo "&#8358;$cost8</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod9)) { echo "&#8358;$cost9</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod10)) { echo "&#8358;$cost10</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod11)) { echo "&#8358;$cost11</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod12)) { echo "&#8358;$cost12</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod13)) { echo "&#8358;$cost13</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod14)) { echo "&#8358;$cost14</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod15)) { echo "&#8358;$cost15</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod16)) { echo "&#8358;$cost16</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod17)) { echo "&#8358;$cost17</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod18)) { echo "&#8358;$cost18</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod19)) { echo "&#8358;$cost19</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod20)) { echo "&#8358;$cost20</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod21)) { echo "&#8358;$cost21</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod22)) { echo "&#8358;$cost22</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod23)) { echo "&#8358;$cost23</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod24)) { echo "&#8358;$cost24</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod25)) { echo "&#8358;$cost25</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod26)) { echo "&#8358;$cost26</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod27)) { echo "&#8358;$cost27</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod28)) { echo "&#8358;$cost28</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod29)) { echo "&#8358;$cost29</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod30)) { echo "&#8358;$cost30</br>"; } else { echo ""; }?></b> 


</td>

<td>
<b><?php if (isset($prod1)) { echo "&#8358;$sub1</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod2)) { echo "&#8358;$sub2</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod3)) { echo "&#8358;$sub3</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod4)) { echo "&#8358;$sub4</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod5)) { echo "&#8358;$sub5</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod6)) { echo "&#8358;$sub6</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod7)) { echo "&#8358;$sub7</br>"; } else { echo ""; }?></b>
<b><?php if (isset($prod8)) { echo "&#8358;$sub8</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod9)) { echo "&#8358;$sub9</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod10)) { echo "&#8358;$sub10</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod11)) { echo "&#8358;$sub11</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod12)) { echo "&#8358;$sub12</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod13)) { echo "&#8358;$sub13</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod14)) { echo "&#8358;$sub14</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod15)) { echo "&#8358;$sub15</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod16)) { echo "&#8358;$sub16</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod17)) { echo "&#8358;$sub17</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod18)) { echo "&#8358;$sub18</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod19)) { echo "&#8358;$sub19</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod20)) { echo "&#8358;$sub20</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod21)) { echo "&#8358;$sub21</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod22)) { echo "&#8358;$sub22</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod23)) { echo "&#8358;$sub23</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod24)) { echo "&#8358;$sub24</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod25)) { echo "&#8358;$sub25</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod26)) { echo "&#8358;$sub26</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod27)) { echo "&#8358;$sub27</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod28)) { echo "&#8358;$sub28</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod29)) { echo "&#8358;$sub29</br>"; } else { echo ""; }?></b> 
<b><?php if (isset($prod30)) { echo "&#8358;$sub30</br>"; } else { echo ""; }?></b> 


</td>
</tr>
<tr>
<td colspan="4"></td>
<td><h5 style="color:red">&#8358;<?php echo $ggtotal; ?></h5></td>
</tr>
</table>

<br/>
<br/>
<input type="submit" href="#" value="Submit" style="background-color: #4CAF50; border: none; color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;"/>
                                    </form>
                                </div>
                            </div>

                            <!-- Approach -->
                           

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <script>
function checkAvailability3() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_id.php",
	data:'client_id='+$("#client_id").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status3").html(data);
		
	},
	error:function (data){
    $("#user-availability-status4").html(data);    
        
    }
	});
}
</script>

</body>

</html>