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


$msg2="<p style='color:red'>Sorry! We couldn't update this EDI</p>";

$edi_name=$_POST['edi_name'];
$sn=$_POST['sn'];


$msgs3="<p style='color:green'>Congratulations! EDI Successfully updated. </p>";




// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql = "UPDATE edi SET edi_name='".$edi_name."' where sn='".$sn."'";
            
if ($link->query($sql) === TRUE) {


	header('Location: edit_edi.php?sn=' .$sn . '&&msg3='.$msgs3.'&&caution='.$caution);

} else {
    header('Location: edit_edi.php?sn=' .$sn . '&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
