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
$fullname=$_POST['fullname'];
$phone_no=$_POST['phone_no'];
$client_email=$_POST['client_email'];
$edi=$_POST['edi'];


$msgs3="<p style='color:green'>Congratulations! Payment Successfully updated. </p>";




// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql = "UPDATE clients SET phone_no='".$phone_no."', fullname='".$fullname."', client_email='".$client_email."' where client_id='".$client_id."'";
            
if ($link->query($sql) === TRUE) {


	header('Location: client_mgt.php?client_id=' .$client_id . '&&msg3='.$msgs3.'&&caution='.$caution);

} else {
    header('Location: client_mgt.php?client_id=' .$client_id . '&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
