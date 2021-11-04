<?php
include("config/conn.php");
include("config/checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$today= date('Y-m-d');
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
$c= date("Y-m-d", strtotime("first day of this month"));
$d= date("Y-m-d", strtotime("last day of this month"));






$sql1="select  SUM(cost2*qty) as total1 from emgegrou_casc.sales where (order_date BETWEEN '".$c."' AND '".$d."') AND loc_id='".$loc_id."'";

$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);



$uu1= $row['total1'];


$totald=number_format(($uu1),2);


$totalm=number_format(($uu1+$uu2+$uu3+$uu4+$uu5+$uu6+$uu7+$uu8+$uu9+$uu10+$uu11+$uu12+$uu13+$uu14+$uu15+$uu16),2);

?>



