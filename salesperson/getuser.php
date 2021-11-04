<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    color: black;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php 


$link = mysqli_connect("localhost", "gogetitc_lavems", "2wsxzaQ1!6ytrew21!", "gogetitc_lavems");

if ($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

$q=$_GET['q'];

$sql2="SELECT * FROM clients WHERE client_id = '".$q."' OR phone_no = '".$q."'";
$result = mysqli_query($link,$sql2);

echo "<table>
<tr>
<th>Client ID</th>
<th>Client Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Payment Status</th>

<th>Action</th>
</tr>";
while($row = mysqli_fetch_array($result)) {

    $sql = "SELECT * FROM payments WHERE client_id='".$q."'";
$result2=mysqli_query($link,$sql);
$row2=mysqli_fetch_assoc($result2);
$status=$row2['status'];
$invoice_no=$row2['invoice_no'];

switch ($status) {
    case "0":
      $status2= "<i style='color: red'>Awaiting Confirmation</i>";
      break;
      case "1":
        $status2=  "<i style='color:#FFBF00'>Payment Received By Littlefingers</i>";
        break;
        case "2":
            $status2=  "<i style='color:green'>Payment Processed</i>";
            break;
         }
  


    echo "<tr>";
    echo "<td>" . $row['client_id'] . "</td>";
    echo "<td>" . $row['fullname'] . "</td>";
    echo "<td>" . $row['phone_no'] . "</td>";
    echo "<td>" . $row['client_email'] . "</td>";
    
    echo "<td>" . $status2. "</td>";
    echo "<td><a target='_blank' href='view_invoice.php?client_id=$q&&invoice_no=$invoice_no'>" ."Print Invoice". "</a> </br><a target='_blank' href='view_receipt.php?client_id=$q&&invoice_no=$invoice_no'>" ."Print Receipt". "</a></td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($link);
?>
</body>
</html>