<?php
$question=$_POST['new'];
if ($question=="yes")
{
    header('location: issue.php');
}

elseif ($question=="no")
{
    header('location: pull.php');
}
else
{
    header('location: proforma.php');
}
?>