<?php
$a=$_POST['Name'];
$b=$_POST['Email'];
$c=$_POST['Password'];
$d=$_POST['Date'];
$e=$_POST['Domain'];
$f=$_POST['Resume'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vscode');
$query=("insert into register(Name,Email,Password,Date,Domain,Resume) values ('$a','$b','$c','$d','$e','$f')");
mysqli_query($con, $query);
echo('registered successfully...');
include("register.php");
mysqli_close($con);

?>