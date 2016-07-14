<?php 
$host="localhost";                  //replace with your hostname 
$username="corona";       //replace with your username 
$password="pV9J5pcN4cRqCnLa";               //replace with your password 
$db_name="personalNurse";                //replace with your database 
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name") or die ("cannot select DB table"); 

$sql = "select * from PN_BloodPressure";  //replace with your table name 
$result = mysqli_query($con,$sql);
$json = array(); 
if(mysqli_num_rows($result)){while($row=mysqli_fetch_row($result)){ 
$json[]=$row; 
} 
} 
mysqli_close($con); 
echo json_encode($json); 
?>


123
