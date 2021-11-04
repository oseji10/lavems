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


$msg2="<p style='color:red'>Sorry! A client with this Phone Number already exists</p>";

$client_id=$_POST['client_id'];
$phone_no=$_POST['phone_no'];
$client_email=$_POST['client_email'];

$fullname=$_POST['fullname'];
$special=$_POST['special'];
$state=$_POST['state'];
$gender=$_POST['gender'];
$mar_status=$_POST['mar_status'];
$reg_by=$_POST['reg_by'];
$nature=$_POST['nature'];
$edi=$_POST['edi'];
$referral=$_POST['referral'];

$state=$_POST['state'];
$contact_address=$_POST['contact_address'];

$msgs3="Congratulations! You have successfully added a new client. ";



$caution="<i style='color:red'>Please safely copy this ID to a safe place</i>";
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql2 = "INSERT INTO clients (client_id, referral, phone_no, client_email, fullname, contact_address, gender, mar_status, state, nature, special, reg_by, EDI)
VALUES ('".$client_id."', '".$referral."', '".$phone_no."', '".$client_email."', '".$fullname."', '".$contact_address."', '".$gender."' ,  '".$mar_status."',  '".$state."',  '".$nature."', '".$special."', '".$reg_by."' , '".$edi."')";
            
if ($link->query($sql2) === TRUE) {


	header('Location: invoice.php?client_id=' .$client_id . '&&msg3='.$msg3.'&&caution='.$caution);

} else {
    header('Location: invoice.php?client_id=' .$client_id . '&&msg2='.$msg2) . $conn->error;
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
$mail->Subject = 'LAVEMS - New Client Registration';			//Sets the Subject of the message
$mail->Body = '<b>Dear '.$fullname.'</b>,<br/><br/> You have successufully been registered on the LAVEMS platform. Kindly fill in your invoice information so we can generate your invoice. Your Client ID is: <h4>'.$client_id.'</h4><br/> <br/> The IT Team';				//An HTML or plain text message body
if($mail->Send())								//Send an Email. Return true on success or false on error
{
    echo "";
    //$message = '<p>Your payment was successful and we have sent the purchased magazine to your mailbox. <a href="http://stir360.com.ng">Click Here to return to the Website</a></p>';
}
else{
    echo "";
}

?>