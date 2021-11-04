<?php
$encrypted_message="Emberga1804$";
$password="lavems";
$encrypted_string=openssl_encrypt($encrypted_message,"AES-128-ECB",$password);
echo $encrypted_string;
?><br/><br/>
<?php
$encrypted_message="EEmpdv9b8AD7Q0qnXmCuig==";
$password="lavems";
$encrypted_string=openssl_decrypt($encrypted_message,"AES-128-ECB",$password);
echo $encrypted_string;
?>