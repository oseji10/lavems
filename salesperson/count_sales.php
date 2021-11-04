<?php
include("config/conn.php");
include("config/checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$today = date('Y-m-d');
}
?>
<?php
$conn=mysqli_connect("localhost","emgegrou_casc","2wsxzaQ1!","emgegrou_casc");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php

$sql1="select  SUM(cost) as total from ADR001 where order_date='".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
$uu1= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from CAR001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu2= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from CAR002 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu3= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from CYT001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu4= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from DOC001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu5= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from DOC002 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu6= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from FLU001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu7= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from GEM001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu8= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from GEM002 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu9= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from LEU001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu10= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from MET001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu11= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from OXA001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu12= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from OXA002 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu13= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from PAC001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu14= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from PAC002 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu15= $row['total'];
?>

<?php

$sql="select  SUM(cost) as total from PHA001 where order_date= '".$today."' AND loc_id='".$loc_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uu16= $row['total'];
?>



<?php $totalm=number_format(($cc1+$cc2+$cc3+$cc4+$cc5+$cc6+$cc7+$cc8+$cc9+$cc10+$cc11+$cc12+$cc13+$cc14+$cc15+$cc16),2); ?>

