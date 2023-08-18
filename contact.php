<?php



$fname=$_POST["fname"];
$uname=$_POST["uname"];
$mail=$_POST["mail"];
$no=$_POST["no"];
$pass=$_POST["pass"];
$gender=$_POST["gender"];

$con=mysqli_connect("localhost","root","");

$sql="insert into ritik_home.form(fname,uname,mail,no,pass,gender) values('$fname','$uname','$mail','$no','$pass','$gender')";
mysqli_query($con,$sql);

echo"Registered Sucessfully";




?>