<?php
include "conn.php";
$sn=$_GET['sn'];

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql2 = "DELETE from edi where sn='".$sn."'";
            
if ($link->query($sql2) === TRUE) {


	header('Location: edi_mgt.php?sn=' .$sn . '&&msg3='.$msgs3);

} else {
    header('Location: edi_mgt.php?sn=' .$sn . '&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
