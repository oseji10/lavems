<?php
class DBController {
    private $host = "localhost";
    private $user = "littlefi_goas";
    private $password = "2wsxzaQ1!6ytrew21!";
    private $database = "littlefi_goas";
    
    private static $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
        if(!empty($this->conn)) {
            $this->selectDB();
        }
    }
    
    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }
    
    function selectDB() {
        mysqli_select_db($this->conn, $this->database);
    }
    
    function numRows($query) {
        $result  = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>
<?php
//require_once("check/DBController.php");
$db_handle = new DBController();


if(!empty($_POST["client_id"])) {
  $query = "SELECT client_id FROM clients WHERE client_id='".$_POST["client_id"]."' OR phone_no='".$_POST['client_id']."'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      

    $servername = "localhost";
$username = "fcthhssa_goas";
$password = "2wsxzaQ1!6ytrew21!";
$dbname = "fcthhssa_goas";
    $conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
      $sql2 = "SELECT * FROM clients WHERE  client_id='".$_POST['client_id']."' OR phone_no='".$_POST['client_id']."'";
    $result=mysqli_query($conn2,$sql2);
      $row=mysqli_fetch_assoc($result);
      $client_id2=$row["client_id"];
      $fullname=$row["fullname"];
      $phone=$row["phone_no"];
      $email=$row["client_email"];
      $gender=$row["gender"];
      $state=$row["state"];
      $nature=$row["nature"];
      $mar_status=$row["mar_status"];
      $contact_address=$row["contact_address"];

      
      echo "<br/><br/>
      <div class='item'>
      <label for='activity'>Fullname<span></span></label>
      <input id='activity' type='text' name='fullname' value='$fullname'/>
    </div><br/>
    <br/>
      <div class='item'>
      <label for='phone_no'>Phone Number<span></span></label>
      <input id='phone_no' type='text' name='phone_no' value='$phone'/>
    </div>
    <br/>
      <div class='item'>
      <label for='email'>Email</label>
      <input id='email' type='text' name='client_email' value='$email' required/><span style='color:red !important'>* Compulsory field</span>
      
    </div>
    <br/>
    <div class='item'>
      <label for='Contact'>Contact Address</label>
   
      <textarea id='contact_address' name='contact_address'>$contact_address</textarea>
    </div>
    <br/>
    <label for='subject'>Gender</label><br/>
    <label  for='male' style='color:black'>Male
                                    <input  type='radio' id='male' name='gender' value='Male'"; 
                                    if ($gender=='Male') { echo 'checked=checked'; } echo ">";
                                    
                                    echo "</label>

                                    <label  for='female' style='color:black'>Female
                                    <input type='radio' id='female' name='gender' value='Female'"; 
                                    if ($gender=='Female') { echo 'checked=checked'; } echo ">";
                                    echo "</label><br/>";

                                    


                                    echo "<div class='item'>
      <label for='state'>State</label>";
                                    echo"
                                    <select name='state' class='form-control' style='width:100%' required>
                                    <option value=''>--Select--</option>"; 
                                    echo "<option ";  if ($state=='Abia') { echo 'selected=selected'; } echo "> Abia</option>";
                                    echo "<option ";  if ($state=='Adamawa') { echo 'selected=selected'; } echo "> Adamawa</option>";
                                    echo "<option ";  if ($state=='Akwa Ibom') { echo 'selected=selected'; } echo "> Akwa Ibom</option>";
                                    echo "<option ";  if ($state=='Anambra') { echo 'selected=selected'; } echo "> Anambra</option>";
                                    echo "<option ";  if ($state=='Bauchi') { echo 'selected=selected'; } echo "> Bauchi</option>";
                                    echo "<option ";  if ($state=='Bayelsa') { echo 'selected=selected'; } echo "> Bayelsa</option>";
                                    echo "<option ";  if ($state=='Benue') { echo 'selected=selected'; } echo "> Benue</option>";
                                    echo "<option ";  if ($state=='Borno') { echo 'selected=selected'; } echo "> Borno</option>";
                                    echo "<option ";  if ($state=='Cross River') { echo 'selected=selected'; } echo "> Cross River</option>";
                                    echo "<option ";  if ($state=='Delta') { echo 'selected=selected'; } echo "> Delta</option>";
                                    echo "<option ";  if ($state=='Ebonyi') { echo 'selected=selected'; } echo "> Ebonyi</option>";
                                    echo "<option ";  if ($state=='Enugu') { echo 'selected=selected'; } echo "> Enugu</option>";
                                    echo "<option ";  if ($state=='Edo') { echo 'selected=selected'; } echo "> Edo</option>";
                                    echo "<option ";  if ($state=='Ekiti') { echo 'selected=selected'; } echo "> Ekiti</option>";
                                    echo "<option ";  if ($state=='Gombe') { echo 'selected=selected'; } echo "> Gombe</option>";
                                    echo "<option ";  if ($state=='Imo') { echo 'selected=selected'; } echo "> Imo</option>";
                                    echo "<option ";  if ($state=='Jigawa') { echo 'selected=selected'; } echo "> Jigawa</option>";
                                    echo "<option ";  if ($state=='Kaduna') { echo 'selected=selected'; } echo "> Kaduna</option>";
                                    echo "<option ";  if ($state=='Kano') { echo 'selected=selected'; } echo "> Kano</option>";
                                    echo "<option ";  if ($state=='Katsina') { echo 'selected=selected'; } echo "> Katsina</option>";
                                    echo "<option ";  if ($state=='Kebbi') { echo 'selected=selected'; } echo "> Kebbi</option>";
                                    echo "<option ";  if ($state=='Kogi') { echo 'selected=selected'; } echo "> Kogi</option>";
                                    echo "<option ";  if ($state=='Kwara') { echo 'selected=selected'; } echo "> Kwara</option>";
                                    echo "<option ";  if ($state=='Lagos') { echo 'selected=selected'; } echo "> Lagos</option>";
                                    echo "<option ";  if ($state=='Nasarawa') { echo 'selected=selected'; } echo "> Nasarawa</option>";
                                    echo "<option ";  if ($state=='Niger') { echo 'selected=selected'; } echo "> Niger</option>";
                                    echo "<option ";  if ($state=='Ogun') { echo 'selected=selected'; } echo "> Ogun</option>";
                                    echo "<option ";  if ($state=='Ondo') { echo 'selected=selected'; } echo "> Ondo</option>";
                                    echo "<option ";  if ($state=='Osun') { echo 'selected=selected'; } echo "> Osun</option>";
                                    echo "<option ";  if ($state=='Oyo') { echo 'selected=selected'; } echo "> Oyo</option>";
                                    echo "<option ";  if ($state=='Plateau') { echo 'selected=selected'; } echo "> Plateau</option>";
                                    echo "<option ";  if ($state=='Rivers') { echo 'selected=selected'; } echo "> Rivers</option>";
                                    echo "<option ";  if ($state=='Sokoto') { echo 'selected=selected'; } echo "> Sokoto</option>";
                                    echo "<option ";  if ($state=='Taraba') { echo 'selected=selected'; } echo "> Taraba</option>";
                                    echo "<option ";  if ($state=='Yobe') { echo 'selected=selected'; } echo "> Yobe</option>";
                                    echo "<option ";  if ($state=='Zamfara') { echo 'selected=selected'; } echo "> Zamfara</option>";
                                    echo "</select></div><br/>";
                
                
                                    


                                    echo "<div class='item'>
      <label for='state'>Nature of Business/Occupation</label>";
                                    echo "<select name='nature' class='form-control' style='width:100%' required>
                                    <option  value=''>--Select--</option>";  
                                   
                                    
                                    echo "<option ";  if ($nature=='Fashion and Beauty') { echo 'selected=selected'; } echo "> Fashion and Beauty</option>";
                                    echo "<option ";  if ($nature=='Apparel and Textile') { echo 'selected=selected'; } echo "> Apparel and Textile</option>";
                                    echo "<option ";  if ($nature=='Arts and Entertainment') { echo 'selected=selected'; } echo "> Arts and Entertainment</option>";
                                    echo "<option ";  if ($nature=='Agriculture and Allied Processing') { echo 'selected=selected'; } echo "> Agriculture and Allied Processing</option>";
                                    echo "<option ";  if ($nature=='Automobile') { echo 'selected=selected'; } echo "> Automobile</option>";
                                    echo "<option ";  if ($nature=='Telecommunication') { echo 'selected=selected'; } echo "> Telecommunication</option>";
                                    echo "<option ";  if ($nature=='Media and Publishing') { echo 'selected=selected'; } echo "> Media and Publishing</option>";
                                    echo "<option ";  if ($nature=='Catering and Event Manageme') { echo 'selected=selected'; } echo "> Catering and Event Manageme</option>";
                                    echo "<option ";  if ($nature=='Hospitality') { echo 'selected=selected'; } echo "> Hospitality</option>";
                                    echo "<option ";  if ($nature=='Healthcare') { echo 'selected=selected'; } echo "> Healthcare</option>";
                                    echo "<option ";  if ($nature=='Creative Industry') { echo 'selected=selected'; } echo "> Creative Industry</option>";
                                    echo "<option ";  if ($nature=='ICT') { echo 'selected=selected'; } echo "> ICT</option>";
                                    echo "<option ";  if ($nature=='Logistics') { echo 'selected=selected'; } echo "> Logistics</option>";
                                    echo "<option ";  if ($nature=='Others') { echo 'selected=selected'; } echo "> Others</option>";
                                    
                                    echo" </select><br/>";
                                    

                                    
                
                                  
   echo "<br/>
      <div class='item'>
      <label for='phone_no'>EDI<span></span></label>
      <input id='phone_no' type='text' name='edi' value='Gogetit Investment Ltd' readonly/>
    </div><br/>";



    echo "<div class='item'>
      <label for='state'>Referred By:</label>";
                                    echo "<select name='referral' class='form-control' style='width:100%' required>
                                    <option  value=''>--Select--</option>";  
                                   
                                    
                                    echo "<option value='Nirsal office Area 10'";   echo "> Nirsal office Area 10</option>";
                                    echo "<option value='Nirsal office Kubwa'";   echo "> Nirsal office Kubwa</option>";
                                    echo "<option value='Nirsal office Bwari'";   echo "> Nirsal office Bwari</option>";
                                    echo "<option value='Nirsal office Kuje";   echo "> Nirsal office Kuje</option>";
                                    echo "<option value='I came myself";   echo "> I came myself</option>";
                                    echo "<option value='Others'";   echo "> Others</option>";
                                    
                                    echo" </select><br/>";



                              echo "<input type='submit' value='Save and Generate Invoice...' style=' background-color: #4CAF50; border: none; color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;' width='50%'/>

      ";
      
  }else{
      echo "<span>Sorry this CLIENT ID does not exist. Kindly contact Admin or register patient afresh. <a href='pull.php'>Click here to register new client</a>. </span>";
  }
}
?>