<?php

include "conn.php";

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}

$row=$_SESSION['email'];
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];


?>
<?php


$msg2="<p style='color:red'>Sorry! We couldn't update this Payment</p>";
$client_id=$_POST['client_id'];
$account_name=$_POST['subvendor_account_name'];
$account_no=$_POST['subvendor_account_number'];
$bank=$_POST['bank'];
$status=$_POST['status'];
$amount_payable=$_POST['amount_payable'];

$msgs3="<p style='color:green'>Congratulations! Payment Successfully updated. </p>";




// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql = "UPDATE subvendor SET account_name='".$account_name."', account_no='".$account_no."', bank='".$bank."', amount='".$amount_payable."' where client_id='".$client_id."'";
            
if ($link->query($sql) === TRUE) {


	header('Location: payment_mgt.php?client_id=' .$client_id . '&&msg3='.$msgs3.'&&caution='.$caution);

} else {
    header('Location: payment_mgt.php?client_id=' .$client_id . '&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql2 = "UPDATE payments SET status='".$status."' where client_id='".$client_id."'";
            
if ($link->query($sql2) === TRUE) {


	header('Location: payment_mgt.php?client_id=' .$client_id . '&&msg3='.$msgs3.'&&caution='.$caution);

} else {
    header('Location: payment_mgt.php?client_id=' .$client_id . '&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
