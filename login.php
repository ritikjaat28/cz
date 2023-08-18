<?php

$uname=$_POST["uname"];
$pass=$_POST["pass"];


$con=mysqli_connect('localhost','root','');



$sql="SELECT * FROM ritik_home.form WHERE uname='$uname' and pass='$pass'";

$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result);


if($count==1)
{
//echo"login success";
header("location:admin_1.html");
}
else {
echo "Wrong Username or Password";
}

?>