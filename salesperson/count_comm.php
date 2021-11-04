<?php
include("conn.php");
include("checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
}
?>
<?php

$today = date('Y-m-d');
//echo $today;

$sql1="SELECT  SUM(commission) as total1 from payments where payment_date ='".$today."' AND processed_by ='".$_SESSION['email']."'";

$result=mysqli_query($link,$sql1);
$row=mysqli_fetch_assoc($result);



$uu1= $row['total1'];


$commd=number_format(($uu1),2);

?>
<?php
$c= date("Y-m-d", strtotime("first day of this month"));
$d= date("Y-m-d", strtotime("last day of this month"));

$sql2="SELECT  SUM(commission) as total2 from payments where (payment_date BETWEEN '".$c."' AND '".$d."') processed_by ='".$_SESSION['email']."'";

$result2=mysqli_query($link,$sql2);
$row2=mysqli_fetch_assoc($result2);



$uu2= $row2['total2'];


$commm=number_format(($uu2),2);


//$totalm2=number_format(($uu1+$uu2+$uu3+$uu4+$uu5+$uu6+$uu7+$uu8+$uu9+$uu10+$uu11+$uu12+$uu13+$uu14+$uu15+$uu16),2);

?>