<?php
require("config/conn.php");
require("config/checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
?>
<?php
$con=mysqli_connect("localhost","emgegrou_cap","2wsxzaQ1!","emgegrou_cap");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$fn=$row["fullname"];
$department=$row["department"];
$loc_id=$row["loc_id"];
?>
<?php
$sql = "SELECT * FROM location WHERE loc_id='".$loc_id."'";
$result=mysqli_query($con,$sql);
// Associative array
$row=mysqli_fetch_assoc($result);
$loc_name=$row["loc_name"];
?>
<?php
$q = $_GET['order_id'];
$sql = "SELECT  DISTINCT * FROM PHA001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM PAC002 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM ADR001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT  * FROM CAR001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM CAR002 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM CYT001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM DOC001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM DOC002 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM FLU001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM GEM001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM GEM002 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM LEU001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM MET001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM OXA001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM OXA002 WHERE order_id='".$q."' && loc_id='".$loc_id."'
UNION 
SELECT DISTINCT * FROM PAC001 WHERE order_id='".$q."' && loc_id='".$loc_id."'
";
$result=mysqli_query($con,$sql);
// Associative array
$row=mysqli_fetch_assoc($result);
$order_id= $row['order_id'];
$prod_id= $row['prod_id'];
$ppat_id=$row['pat_id'];
$order_date=$row['order_date'];
$order_time=$row['order_time'];
$payment_mode=$row['payment_mode'];
$cost=$row['cost'];
$payment_status=$row['payment_status'];
?>
<?php
include "config/access_administrator.php";
//include "text.php";
//include "product_list.php";
?>
<html>
    <head>
     <title>EMGE Resources Ltd.</title>
    </head>
   
<body>

	<u>
	<p align="center"><img src="logo.png" width="50%"  height="50%">&nbsp; <img src="img/FMOH-Logo.png" width="40%"  height="50%"></p>
	
	<h3 align="center"><b>THE NATIONAL CHEMOTHERAPY ACCESS PARTNERSHIP</b></h3>
		<u align="center" style="text-transform: uppercase; font-size:18px; font-weight:bold;">CUSTOMER INVOICE </u>

<br/><br/>
	<table  width="100%" border="1" style="border-collapse:collapse;">
		<tr>
			<td width="20%">Patient ID: </td>
               <td ><b><?php echo $ppat_id; ?></b></td>
			   
			   <td colspan="2" width="20%"><b><?php if ($payment_status=="0") { echo "<i style='color:red; font-size:20px;'>UNPAID</i>";} else if ($payment_status=="1"){echo "<i style='color:green; font-size:20px;'>PAID</i>";} ?></b></td>
           </tr>
              <tr>
           <td width="20%">Order ID: </td>
               <td><b style="color:green; font-size:20px;"><?php echo $order_id; ?></b></td>
				  
				  <td colspan="2"></td>
           </tr> 
                 
               <tr>
           <td width="20%">Order Date: </td>
               <td colspan="3"><?php echo $order_date; ?></td>
           </tr> 
                  <tr>
           <td width="20%">Order Time: </td>
               <td colspan="3"><?php echo $order_time; ?></td>
           </tr> 
                    <tr>
           <td width="20%">Payment Mode: </td>
               <td colspan="3" width=""><?php echo $payment_mode; ?></td>
           </tr>
                 
          
                 
                 <tr>



                 <td><h5>Product ID</h5></td>
<td><h5>Product Name</h5></td>
<td><h5>Quantity</h5></td>
<td><h5>Cost</h5></td>
<?php
//<!---------------------Drug One-------------------->	
$prod1="ADR001";
$sqla = "SELECT * FROM $prod1 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql1 = "SELECT qty, SUM(cost2) as total FROM $prod1 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_assoc($result1);
$result = $con->query($sqla);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs1= number_format(($row['cost2']),2);
   $pprod_id1=$row['prod_id'];
   $qty1=$row1['qty'];
	 $tt1=$row1['total'];
if (isset($pprod_id1))
                      {
						 include_once "product_list.php";
	echo "<tr>";
	//echo "<td></td>";
                        echo "<td>$pprod_id1</td>"; 
            echo "<td>$prod_name1&nbsp;$description1 <br/></td>";
            echo "<td>$qty1 <br/></td>";
						echo "<td>$costs1<br/></td>";
                      }
  else
  {
   echo "";  
  }
}
} 
					 
					 
//<!---------------------Drug Two-------------------->						 
$prod2="CAR001";
$sqlb = "SELECT * FROM $prod2 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql2 = "SELECT qty, SUM(cost2) as total FROM $prod2 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_assoc($result2);
$result = $con->query($sqlb);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs2= number_format(($row['cost2']),2);
   $pprod_id2=$row['prod_id'];
   $qty2=$row2['qty'];
	 $tt2=$row2['total'];
if (isset($pprod_id2))
                      {
						 include_once "product_list.php";
	echo "<tr>";
	//echo "<td></td>";
                        echo "<td>$pprod_id2</td>"; 
						echo "<td>$prod_name2&nbsp;$description2 <br/></td>";
            echo "<td>$qty2<br/></td>";
            echo "<td>$costs2<br/></td>";
                      }
  else
  {
   echo "";  
  }
}
} 
//<!---------------------Drug Three-------------------->					 
$prod3="CAR002";
$sqlc = "SELECT * FROM $prod3 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql3 = "SELECT qty, SUM(cost2) as total FROM $prod3 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result3=mysqli_query($con,$sql3);
$row3=mysqli_fetch_assoc($result3);
$result = $con->query($sqlc);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs3= number_format(($row['cost2']),2);
       $pprod_id3=$row['prod_id'];
       $qty3=$row3['qty'];
       $tt3=$row3['total'];
    if (isset($pprod_id3))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id3</td>"; 
                echo "<td>$prod_name3&nbsp;$description3 <br/></td>";
                echo "<td>$qty3<br/></td>";
                echo "<td>$costs3<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 //<!---------------------Drug Four-------------------->					 
$prod4="CYT001";
$sqld = "SELECT * FROM $prod4 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql4 = "SELECT qty, SUM(cost2) as total FROM $prod4 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result4=mysqli_query($con,$sql4);
$row4=mysqli_fetch_assoc($result4);
$result = $con->query($sqld);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs4= number_format(($row['cost2']),2);
       $pprod_id4=$row['prod_id'];
       $qty4=$row2['qty'];
       $tt4=$row4['total'];
    if (isset($pprod_id4))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id4</td>"; 
                echo "<td>$prod_name4&nbsp;$description4 <br/></td>";
                echo "<td>$qty4<br/></td>";
                echo "<td>$costs4<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 //<!---------------------Drug Five-------------------->					 
$prod5="DOC001";
$sqle = "SELECT * FROM $prod5 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql5 = "SELECT qty, SUM(cost2) as total FROM $prod5 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result5=mysqli_query($con,$sql5);
$row5=mysqli_fetch_assoc($result5);
$result = $con->query($sqle);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs5= number_format(($row['cost2']),2);
       $pprod_id5=$row['prod_id'];
       $qty5=$row5['qty'];
       $tt5=$row5['total'];
    if (isset($pprod_id5))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id5</td>"; 
                echo "<td>$prod_name5&nbsp;$description5 <br/></td>";
                echo "<td>$qty5<br/></td>";
                echo "<td>$costs5<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Six-------------------->					 
$prod6="DOC002";
$sqlf = "SELECT * FROM $prod6 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql6 = "SELECT qty, SUM(cost2) as total FROM $prod6 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result6=mysqli_query($con,$sql6);
$row6=mysqli_fetch_assoc($result6);
$result = $con->query($sqlf);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs6= number_format(($row['cost2']),2);
       $pprod_id6=$row['prod_id'];
       $qty6=$row6['qty'];
       $tt6=$row6['total'];
    if (isset($pprod_id6))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id6</td>"; 
                echo "<td>$prod_name6&nbsp;$description6 <br/></td>";
                echo "<td>$qty6<br/></td>";
                echo "<td>$costs6<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Seven-------------------->					 
$prod7="FLU001";
$sqlg = "SELECT * FROM $prod7 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql7 = "SELECT qty, SUM(cost2) as total FROM $prod7 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result7=mysqli_query($con,$sql7);
$row7=mysqli_fetch_assoc($result7);
$result = $con->query($sqlg);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs7= number_format(($row['cost2']),2);
       $pprod_id7=$row['prod_id'];
       $qty7=$row7['qty'];
       $tt7=$row7['total'];
    if (isset($pprod_id7))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id7</td>"; 
                echo "<td>$prod_name7&nbsp;$description7 <br/></td>";
                echo "<td>$qty7<br/></td>";
                echo "<td>$costs7<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Eight-------------------->					 
$prod8="GEM001";
$sqlh = "SELECT * FROM $prod8 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql8 = "SELECT qty, SUM(cost2) as total FROM $prod8 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result8=mysqli_query($con,$sql8);
$row8=mysqli_fetch_assoc($result8);
$result = $con->query($sqlh);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs8= number_format(($row['cost2']),2);
       $pprod_id8=$row['prod_id'];
       $qty8=$row8['qty'];
       $tt8=$row8['total'];
    if (isset($pprod_id8))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id8</td>"; 
                echo "<td>$prod_name8&nbsp;$description8 <br/></td>";
                echo "<td>$qty8<br/></td>";
                echo "<td>$costs8<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Nine-------------------->					 
$prod9="GEM002";
$sqli = "SELECT * FROM $prod9 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql9 = "SELECT qty, SUM(cost2) as total FROM $prod9 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result9=mysqli_query($con,$sql9);
$row9=mysqli_fetch_assoc($result9);
$result = $con->query($sqli);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs9= number_format(($row['cost2']),2);
       $pprod_id9=$row['prod_id'];
       $qty9=$row9['qty'];
       $tt9=$row9['total'];
    if (isset($pprod_id9))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id9</td>"; 
                echo "<td>$prod_name9&nbsp;$description9 <br/></td>";
                echo "<td>$qty9<br/></td>";
                echo "<td>$costs9<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Ten-------------------->					 
$prod10="LEU001";
$sqlj = "SELECT * FROM $prod10 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql10 = "SELECT qty, SUM(cost2) as total FROM $prod10 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result10=mysqli_query($con,$sql10);
$row10=mysqli_fetch_assoc($result10);
$result = $con->query($sqlj);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs10= number_format(($row['cost2']),2);
       $pprod_id10=$row['prod_id'];
       $qty10=$row10['qty'];
       $tt10=$row10['total'];
    if (isset($pprod_id10))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id10</td>"; 
                echo "<td>$prod_name10&nbsp;$description10 <br/></td>";
                echo "<td>$qty10<br/></td>";
                echo "<td>$costs10<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Eleven-------------------->					 
$prod11="MET001";
$sqlk = "SELECT * FROM $prod11 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql11 = "SELECT qty, SUM(cost2) as total FROM $prod11 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result11=mysqli_query($con,$sql11);
$row11=mysqli_fetch_assoc($result11);
$result = $con->query($sqlk);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs11= number_format(($row['cost2']),2);
       $pprod_id11=$row['prod_id'];
       $qty11=$row11['qty'];
       $tt11=$row11['total'];
    if (isset($pprod_id11))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id11</td>"; 
                echo "<td>$prod_name11&nbsp;$description11 <br/></td>";
                echo "<td>$qty11<br/></td>";
                echo "<td>$costs11<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}

					 //<!---------------------Drug Twelve-------------------->					 
$prod12="OXA001";
$sqll = "SELECT * FROM $prod12 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql12 = "SELECT qty, SUM(cost2) as total FROM $prod12 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result12=mysqli_query($con,$sql12);
$row12=mysqli_fetch_assoc($result12);
$result = $con->query($sqll);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs12= number_format(($row['cost2']),2);
       $pprod_id12=$row['prod_id'];
       $qty12=$row12['qty'];
       $tt12=$row12['total'];
    if (isset($pprod_id12))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id12</td>"; 
                echo "<td>$prod_name12&nbsp;$description12 <br/></td>";
                echo "<td>$qty12<br/></td>";
                echo "<td>$costs12<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
					 					 //<!---------------------Drug Thirteen-------------------->					 
$prod13="OXA002";
$sqlm = "SELECT * FROM $prod13 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql13 = "SELECT qty, SUM(cost2) as total FROM $prod13 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result13=mysqli_query($con,$sql13);
$row13=mysqli_fetch_assoc($result13);
$result = $con->query($sqlm);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs13= number_format(($row['cost2']),2);
       $pprod_id13=$row['prod_id'];
       $qty13=$row13['qty'];
       $tt13=$row13['total'];
    if (isset($pprod_id13))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id13</td>"; 
                echo "<td>$prod_name13&nbsp;$description13 <br/></td>";
                echo "<td>$qty13<br/></td>";
                echo "<td>$costs13<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}

					 
					 					 //<!---------------------Drug Fourteen-------------------->					 
$prod14="PAC001";
$sqln = "SELECT * FROM $prod14 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql14 = "SELECT qty, SUM(cost2) as total FROM $prod14 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result14=mysqli_query($con,$sql14);
$row14=mysqli_fetch_assoc($result14);
$result = $con->query($sqln);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs14= number_format(($row['cost2']),2);
       $pprod_id14=$row['prod_id'];
       $qty14=$row14['qty'];
       $tt14=$row14['total'];
    if (isset($pprod_id14))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id14</td>"; 
                echo "<td>$prod_name14&nbsp;$description14 <br/></td>";
                echo "<td>$qty14<br/></td>";
                echo "<td>$costs14<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}


					 
					 					 //<!---------------------Drug Fifteen-------------------->					 
$prod15="PAC002";
$sqlo = "SELECT * FROM $prod15 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql15 = "SELECT qty, SUM(cost2) as total FROM $prod15 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result15=mysqli_query($con,$sql15);
$row15=mysqli_fetch_assoc($result15);
$result = $con->query($sqlo);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs15= number_format(($row['cost2']),2);
       $pprod_id15=$row['prod_id'];
       $qty15=$row15['qty'];
       $tt15=$row15['total'];
    if (isset($pprod_id15))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id15</td>"; 
                echo "<td>$prod_name15&nbsp;$description15 <br/></td>";
                echo "<td>$qty15<br/></td>";
                echo "<td>$costs15<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}

					 //<!---------------------Drug Four-------------------->					 
$prod16="PHA001";
$sqlp = "SELECT * FROM $prod16 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$sql16 = "SELECT qty, SUM(cost2) as total FROM $prod16 WHERE order_id='".$q."' && loc_id='".$loc_id."'";
$result16=mysqli_query($con,$sql16);
$row16=mysqli_fetch_assoc($result16);
$result = $con->query($sqlp);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
       $costs16= number_format(($row['cost2']),2);
       $pprod_id16=$row['prod_id'];
       $qty16=$row16['qty'];
       $tt16=$row16['total'];
    if (isset($pprod_id16))
                          {
                 include_once "product_list.php";
      echo "<tr>";
      //echo "<td></td>";
                            echo "<td>$pprod_id16</td>"; 
                echo "<td>$prod_name16&nbsp;$description16 <br/></td>";
                echo "<td>$qty16<br/></td>";
                echo "<td>$costs16<br/></td>";
                          }
  else
  {
   echo "";  
  }
}
}
					 
echo "</tr>";
echo "<tr>";
echo "<td></td>";					  
				  

echo "<td>";						
echo "<b style='color:red; font-weight:bold; font-size:20px; text-decoration-line:underline;'>". "Total:</b>";
 echo "</td>" ;             
 echo "<td>";$sumqty=$qty1+$qty2+$qty3+$qty4+$qty5+$qty6+$qty7+$qty8+$qty9+$qty10+$qty11+$qty12+$qty13+$qty14+$qty15+$qty16; "</td>";echo $sumqty;		
echo "<td>";
echo "<b style='color:red; font-weight:bold; font-size:20px; text-decoration-line:underline;'>";
	
  echo "N"; 
  $sum=($tt1*$qty1)+($tt2*$qty2)+($tt3*$qty3)+($tt4*$qty4)+($tt5*$qty5)+($tt6*$qty6)+($tt7*$qty7)+($tt8*$qty8)+($tt9*$qty9)+($tt10*$qty10)+($tt11*$qty11)+($tt12*$qty12)+($tt13*$qty13)+($tt14*$qty14)+($tt15*$qty15)+($tt16*$qty16);
  $total2=number_format(($sum),2); echo $total2;
echo "</td>";
					
               echo "</table>";
						?>
            
        
</body>
</html>
