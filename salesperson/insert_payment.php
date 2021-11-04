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
$sql3 = "SELECT * FROM clients WHERE client_id='".$_POST['client_id']."'";
$result=mysqli_query($link,$sql3);
$row=mysqli_fetch_assoc($result);
$fullname=$row["fullname"];
?>
<?php


$msg2="<p style='color:red'>Sorry! This payment already exists</p>";
$invoice_no=$_POST['invoice_no'];
$client_id=$_POST['client_id'];
$phone_no=$_POST['phone_no'];
$client_email=$_POST['client_email'];

$amount=$_POST['amount'];
$commission=$_POST['commission'];
$remarks=$_POST['remarks'];

$reg_by=$_POST['reg_by'];
$status=$_POST['status'];
$transfer_date=$_POST['transfer_date'];



$msgs3="Congratulations! You have successfully added a new payment. ";



$caution="<i style='color:red'>Please safely copy this ID to a safe place</i>";
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql2 = "INSERT INTO payments (client_id, commission, remarks, phone_no, client_email, invoice_no, processed_by, amount, status, transfer_date)
VALUES ('".$client_id."', '".$commission."', '".$remarks."', '".$phone_no."', '".$client_email."', '".$invoice_no."', '".$reg_by."', '".$amount."' ,  '".$status."',  '".$transfer_date."')";
            
if ($link->query($sql2) === TRUE) {


	header('Location: view_receipt.php?client_id=' .$client_id . '&&invoice_no='.$invoice_no.'&&msg3='.$msg3.'&&caution='.$caution);

} else {
    header('Location: view_receipt.php?client_id=' .$client_id . '&&invoice_no='.$invoice_no.'&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<?php
//$file_name= 'downloads/Stir36020211stQuarter.pdf';
require 'class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();								//Sets Mailer to send message using SMTP
$mail->Host = 'mail.littlefingers.ng';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Port = '465';								//Sets the default SMTP server port
$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = 'info@littlefingers.ng';					//Sets SMTP username
$mail->Password = '2wsxzaQ1!6ytrew21!';					//Sets SMTP password
$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = 'info@littlefingers.ng';			//Sets the From email address for the message
$mail->FromName = 'LAVEMS Email Notification Service';			//Sets the From name of the message
$mail->AddAddress($client_email, $fullname);		//Adds a "To" address
$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);							//Sets message type to HTML				
$mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
$mail->Subject = 'LAVEMS - Change In Payment Status';			//Sets the Subject of the message
$mail->Body = '<b>Dear '.$fullname.'</b>,<br/><br/> You have received this email because, a new payment schedule has been created for you on our platform or because the status of an exisitng invoice has been changed. Kindly find the reference number for this payment below: Invoice ID: <h4>'.$invoice_no.'</h4><br/> <br/> The IT Team';				//An HTML or plain text message body
if($mail->Send())								//Send an Email. Return true on success or false on error
{
    echo "";
    //$message = '<p>Your payment was successful and we have sent the purchased magazine to your mailbox. <a href="http://stir360.com.ng">Click Here to return to the Website</a></p>';
}
else{
    echo "";
}

?>