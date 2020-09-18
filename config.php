<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db = "login";

$mysqli= mysqli_connect($host,$username,$password);
mysqli_select_db($mysqli,$db);

if(isset($_POST["id"]))
{
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="Select * from loginform WHERE username='".$username."' AND password='".$password."'
	limit 1";

	$result=mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($result)==1)
	{
		echo "You have successfully loged in";
		exit();
	}
	else
	{
		echo "You have entered a wrong username or password";
		exit();
	}
}


?>



