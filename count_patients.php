<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
?>
<?php
$today = gmdate("Y-m-d");
$a= date("Y-m-d", strtotime("first day of this month"));
$b= date("Y-m-d", strtotime("last day of this month"));
//$month= MONTH(CURRENT_DATE());

?>

<?php
$sql="SELECT * FROM clients WHERE reg_date='".$today."'";

if ($result=mysqli_query($link,$sql))
  {
  $counter_day=mysqli_num_rows($result);
  }
?>
<?php
$c= date("Y-m-d", strtotime("first day of this month"));
$d= date("Y-m-d", strtotime("last day of this month"));
$sql="SELECT * FROM clients WHERE (reg_date BETWEEN '".$c."' AND '".$d."')";

if ($result=mysqli_query($link,$sql))
  {
  $counter_month=mysqli_num_rows($result);
  }
?>

<?php
$c= date("Y-m-d", strtotime("first day of this month"));
$d= date("Y-m-d", strtotime("last day of this month"));
$sql="SELECT * FROM clients ";

if ($result=mysqli_query($link,$sql))
  {
  $counter_all_patients=mysqli_num_rows($result);
  }
?>