<?php

include "conn.php";



$row=$_SESSION['email'];
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];


?>
<?php


$msg2="Sorry! There was an error posting your invoice";

$client_id=$_POST['client_id'];
$invoice_no=$_POST['special'];
$admin_mail=$_POST['reg_by'];


$sn1=$_POST['sn1']; 
$sn2=$_POST['sn2']; 
$sn3=$_POST['sn3']; 
$sn4=$_POST['sn4']; 
$sn5=$_POST['sn5']; 
$sn6=$_POST['sn6']; 
$sn7=$_POST['sn7']; 
$sn8=$_POST['sn8']; 
$sn9=$_POST['sn9']; 
$sn10=$_POST['sn10']; 
$sn11=$_POST['sn11']; 
$sn12=$_POST['sn12']; 
$sn13=$_POST['sn13']; 
$sn14=$_POST['sn14']; 
$sn15=$_POST['sn15']; 
$sn16=$_POST['sn16']; 
$sn17=$_POST['sn17'];
$sn18=$_POST['sn18']; 
$sn19=$_POST['sn19']; 
$sn20=$_POST['sn20']; 
$sn21=$_POST['sn21']; 
$sn22=$_POST['sn22']; 
$sn23=$_POST['sn23']; 
$sn24=$_POST['sn24']; 
$sn25=$_POST['sn25']; 
$sn26=$_POST['sn26']; 
$sn27=$_POST['sn27']; 
$sn28=$_POST['sn28']; 
$sn29=$_POST['sn29']; 
$sn30=$_POST['sn30']; 

$prod1=$_POST['prod1']; 
$prod2=$_POST['prod2']; 
$prod3=$_POST['prod3']; 
$prod4=$_POST['prod4']; 
$prod5=$_POST['prod5']; 
$prod6=$_POST['prod6']; 
$prod7=$_POST['prod7']; 
$prod8=$_POST['prod8']; 
$prod9=$_POST['prod9']; 
$prod10=$_POST['prod10']; 
$prod11=$_POST['prod11']; 
$prod12=$_POST['prod12']; 
$prod13=$_POST['prod13']; 
$prod14=$_POST['prod14']; 
$prod15=$_POST['prod15']; 
$prod16=$_POST['prod16']; 
$prod17=$_POST['prod17'];
$prod18=$_POST['prod18']; 
$prod19=$_POST['prod19']; 
$prod20=$_POST['prod20']; 
$prod21=$_POST['prod21']; 
$prod22=$_POST['prod22']; 
$prod23=$_POST['prod23']; 
$prod24=$_POST['prod24']; 
$prod25=$_POST['prod25']; 
$prod26=$_POST['prod26']; 
$prod27=$_POST['prod27']; 
$prod28=$_POST['prod28']; 
$prod29=$_POST['prod29']; 
$prod30=$_POST['prod30']; 


$qty1=$_POST['qty1']; 
$qty2=$_POST['qty2']; 
$qty3=$_POST['qty3']; 
$qty4=$_POST['qty4']; 
$qty5=$_POST['qty5']; 
$qty6=$_POST['qty6']; 
$qty7=$_POST['qty7']; 
$qty8=$_POST['qty8']; 
$qty9=$_POST['qty9']; 
$qty10=$_POST['qty10']; 
$qty11=$_POST['qty11']; 
$qty12=$_POST['qty12']; 
$qty13=$_POST['qty13']; 
$qty14=$_POST['qty14']; 
$qty15=$_POST['qty15']; 
$qty16=$_POST['qty16']; 
$qty17=$_POST['qty17'];
$qty18=$_POST['qty18']; 
$qty19=$_POST['qty19']; 
$qty20=$_POST['qty20']; 
$qty21=$_POST['qty21']; 
$qty22=$_POST['qty22']; 
$qty23=$_POST['qty23']; 
$qty24=$_POST['qty24']; 
$qty25=$_POST['qty25']; 
$qty26=$_POST['qty26']; 
$qty27=$_POST['qty27']; 
$qty28=$_POST['qty28']; 
$qty29=$_POST['qty29']; 
$qty30=$_POST['qty30']; 


$cost1=$_POST['cost1']; 
$cost2=$_POST['cost2']; 
$cost3=$_POST['cost3']; 
$cost4=$_POST['cost4']; 
$cost5=$_POST['cost5']; 
$cost6=$_POST['cost6']; 
$cost7=$_POST['cost7']; 
$cost8=$_POST['cost8']; 
$cost9=$_POST['cost9']; 
$cost10=$_POST['cost10']; 
$cost11=$_POST['cost11']; 
$cost12=$_POST['cost12']; 
$cost13=$_POST['cost13']; 
$cost14=$_POST['cost14']; 
$cost15=$_POST['cost15']; 
$cost16=$_POST['cost16']; 
$cost17=$_POST['cost17'];
$cost18=$_POST['cost18']; 
$cost19=$_POST['cost19']; 
$cost20=$_POST['cost20']; 
$cost21=$_POST['cost21']; 
$cost22=$_POST['cost22']; 
$cost23=$_POST['cost23']; 
$cost24=$_POST['cost24']; 
$cost25=$_POST['cost25']; 
$cost26=$_POST['cost26']; 
$cost27=$_POST['cost27']; 
$cost28=$_POST['cost28']; 
$cost29=$_POST['cost29']; 
$cost30=$_POST['cost30'];

$msg="Invoice Successfully Created";

if ($link->linkect_error) {
    die("linkection failed: " . $link->linkect_error);
}


if(!empty($sn1))
{
$invoicing1 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
VALUES ('".$invoice_no."', '".$client_id."', '".$prod1."', '".$cost1."', '".$qty1."', '".$admin_mail."')";
}

if(!empty($sn2))
{
 $invoicing2 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod2."', '".$cost2."', '".$qty2."', '".$admin_mail."')";
 
}

if(!empty($sn3))
{
 $invoicing3 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod3."', '".$cost3."', '".$qty3."', '".$admin_mail."')";
 
}

if(!empty($sn4))
{
 $invoicing4 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod4."', '".$cost4."', '".$qty4."', '".$admin_mail."')";
 
}

if(!empty($sn5))
{
 $invoicing5 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod5."', '".$cost5."', '".$qty5."', '".$admin_mail."')";
 
}

if(!empty($sn6))
{
 $invoicing6 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod6."', '".$cost6."', '".$qty6."', '".$admin_mail."')";
 
}

if(!empty($sn7))
{
 $invoicing7 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod7."', '".$cost7."', '".$qty7."', '".$admin_mail."')";
 
}

if(!empty($sn8))
{
 $invoicing8 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod8."', '".$cost8."', '".$qty8."', '".$admin_mail."')";
 
}

if(!empty($sn9))
{
 $invoicing9 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod9."', '".$cost9."', '".$qty9."', '".$admin_mail."')";
 
}

if(!empty($sn10))
{
 $invoicing10 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod10."', '".$cost10."', '".$qty10."', '".$admin_mail."')";
 
}

if(!empty($sn11))
{
 $invoicing11 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod11."', '".$cost11."', '".$qty11."', '".$admin_mail."')";
 
}

if(!empty($sn12))
{
 $invoicing12 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod12."', '".$cost12."', '".$qty12."', '".$admin_mail."')";
 
}

if(!empty($sn13))
{
 $invoicing13 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod13."', '".$cost13."', '".$qty13."', '".$admin_mail."')";
 
}

if(!empty($sn14))
{
 $invoicing14 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod14."', '".$cost14."', '".$qty14."', '".$admin_mail."')";
 
}

if(!empty($sn15))
{
 $invoicing15 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod15."', '".$cost15."', '".$qty15."', '".$admin_mail."')";
 
}

if(!empty($sn16))
{
 $invoicing16 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod16."', '".$cost16."', '".$qty16."', '".$admin_mail."')";
 
}

if(!empty($sn17))
{
 $invoicing17 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod17."', '".$cost17."', '".$qty17."', '".$admin_mail."')";
 
}


if(!empty($sn18))
{
 $invoicing18 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod18."', '".$cost18."', '".$qty18."', '".$admin_mail."')";
 
}


if(!empty($sn19))
{
 $invoicing19 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod19."', '".$cost19."', '".$qty19."', '".$admin_mail."')";
 
}


if(!empty($sn20))
{
 $invoicing20 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod20."', '".$cost20."', '".$qty20."', '".$admin_mail."')";
 
}


if(!empty($sn21))
{
 $invoicing21 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod21."', '".$cost21."', '".$qty21."', '".$admin_mail."')";
 
}

if(!empty($sn22))
{
 $invoicing22 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod22."', '".$cost22."', '".$qty22."', '".$admin_mail."')";
 
}


if(!empty($sn23))
{
 $invoicing23 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod23."', '".$cost23."', '".$qty23."', '".$admin_mail."')";
 
}


if(!empty($sn24))
{
 $invoicing24 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod24."', '".$cost24."', '".$qty24."', '".$admin_mail."')";
 
}


if(!empty($sn25))
{
 $invoicing25 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod25."', '".$cost25."', '".$qty25."', '".$admin_mail."')";
 
}


if(!empty($sn26))
{
 $invoicing26 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod26."', '".$cost26."', '".$qty26."', '".$admin_mail."')";
 
}


if(!empty($sn27))
{
 $invoicing27 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod27."', '".$cost27."', '".$qty27."', '".$admin_mail."')";
 
}


if(!empty($sn28))
{
 $invoicing28 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod28."', '".$cost28."', '".$qty28."', '".$admin_mail."')";
 
}


if(!empty($sn29))
{
 $invoicing29 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod29."', '".$cost29."', '".$qty29."', '".$admin_mail."')";
 
}


if(!empty($sn30))
{
 $invoicing30 = "INSERT INTO invoicing (invoice_no, client_id, equipment, cost, qty, invoiced_by)
 VALUES ('".$invoice_no."', '".$client_id."', '".$prod30."', '".$cost30."', '".$qty30."', '".$admin_mail."')";
 
}

//<------------invoicing---------------->
if ($link->query($invoicing1) === TRUE) {
    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
    } else {
        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
    }

    if ($link->query($invoicing2) === TRUE) {
        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
        } else {
            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
        }

        if ($link->query($invoicing3) === TRUE) {
            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
            } else {
                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
            }

            if ($link->query($invoicing4) === TRUE) {
                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                } else {
                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                }

                if ($link->query($invoicing5) === TRUE) {
                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                    } else {
                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                    }

                    if ($link->query($invoicing6) === TRUE) {
                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                        } else {
                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                        }

                        if ($link->query($invoicing7) === TRUE) {
                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                            } else {
                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                            }

                            if ($link->query($invoicing8) === TRUE) {
                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                } else {
                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                }

                                if ($link->query($invoicing9) === TRUE) {
                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                    } else {
                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                    }


                                    if ($link->query($invoicing10) === TRUE) {
                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                        } else {
                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                        }

                                        if ($link->query($invoicing11) === TRUE) {
                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                            } else {
                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                            }

                                            if ($link->query($invoicing12) === TRUE) {
                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                } else {
                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                }

                                                if ($link->query($invoicing13) === TRUE) {
                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                    } else {
                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                    }

                                                    if ($link->query($invoicing14) === TRUE) {
                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                        } else {
                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                        }


                                                        if ($link->query($invoicing15) === TRUE) {
                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                            } else {
                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                            }

                                                            if ($link->query($invoicing16) === TRUE) {
                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                } else {
                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                }

                                                                if ($link->query($invoicing17) === TRUE) {
                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                    } else {
                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                    }


                                                                    if ($link->query($invoicing18) === TRUE) {
                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                        } else {
                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                        }

                                                                        if ($link->query($invoicing19) === TRUE) {
                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                            } else {
                                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                            }


                                                                            if ($link->query($invoicing20) === TRUE) {
                                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                } else {
                                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                }


                                                                                if ($link->query($invoicing21) === TRUE) {
                                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                    } else {
                                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                    }


                                                                                    if ($link->query($invoicing22) === TRUE) {
                                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                        } else {
                                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                        }


                                                                                        if ($link->query($invoicing23) === TRUE) {
                                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                            } else {
                                                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                            }

                                                                                            if ($link->query($invoicing24) === TRUE) {
                                                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                } else {
                                                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                }


                                                                                                if ($link->query($invoicing25) === TRUE) {
                                                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                    } else {
                                                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                    }

                                                                                                    if ($link->query($invoicing26) === TRUE) {
                                                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                        } else {
                                                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                        }

                                                                                                        if ($link->query($invoicing27) === TRUE) {
                                                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                            } else {
                                                                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                            }

                                                                                                            if ($link->query($invoicing28) === TRUE) {
                                                                                                                header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                                } else {
                                                                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                                }


                                                                                                                if ($link->query($invoicing29) === TRUE) {
                                                                                                                    header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                                    } else {
                                                                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                                    }


                                                                                                                    if ($link->query($invoicing30) === TRUE) {
                                                                                                                        header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
                                                                                                                        } else {
                                                                                                                            header('Location: invoice_mgt.php?client_id='.$client_id.' &&msg='.$msg);
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
$mail->SMTPSecure = 'ssl';							//Sets linkection prefix. Options are "", "ssl" or "tls"
$mail->From = 'info@littlefingers.ng';			//Sets the From email address for the message
$mail->FromName = 'LAVEMS Email Notification Service';			//Sets the From name of the message
$mail->AddAddress($client_email, $fullname);		//Adds a "To" address
$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);							//Sets message type to HTML				
$mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
$mail->Subject = 'LAVEMS - New Client Registration';			//Sets the Subject of the message
$mail->Body = '<b>Dear '.$fullname.'</b>,<br/><br/> You have successufully registered on the LAVEMS platform. Kindly fill in your invoice information so we can generate your invoice. Your Client ID is: <h4>'.$client_id.'</h4><br/> <br/> The IT Team';				//An HTML or plain text message body
if($mail->Send())								//Send an Email. Return true on success or false on error
{
    echo "";
    //$message = '<p>Your payment was successful and we have sent the purchased magazine to your mailbox. <a href="http://stir360.com.ng">Click Here to return to the Website</a></p>';
}
else{
    echo "";
}

?>