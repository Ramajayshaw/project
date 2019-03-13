<?php
include("connection.php");
echo"t3";
$uname=$_POST['uname'];
  $psw=$_POST['psw'];
 
  
  $query = "SELECT * FROM  register WHERE sname='$uname' and repassword='$psw'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  
  if($total>=1)
{

header("location:welcome.php");
}
else
{
echo"No record found";
}	


?>
