<?php
	$con=mysqli_connect("localhost","root","") or die("not connected");
	$db=mysqli_select_db($con,"cseb5a0")or die("data base not connected");
	if(isset($_POST['login']))
	{
	$name=$_POST["username"];
	$pwd=$_POST["password"];
	$qry=mysqli_query($con,"select * from login where username='$name' and password='$pwd'");
	if(mysqli_num_rows($qry))
		echo "login sucessfull";
	else
		echo "login failed";
	}
?>