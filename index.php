<html>
<head>
<title>login</title>
</head>
<body>
    <h2>LOG IN</h2>
    <form action ="#" method="POST">
        <table>
            <tr>
                <td><label for="username">username</label></td>
                <td><input type="text" name="username" required/></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="text" name="password" required/></td>
            </tr>
            <tr>
                <td><label for="Confirm password">confirm password</label></td>
                <td><input type="text" step="any" name="cpass" required/></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>



<?php

$host="localhost";
$username="root";
$password="";
$db="login";

$mysqli=mysqli_connect($host,$username,$password);
mysqli_select_db($mysqli,$db);


if(isset($_POST["username"]))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="Select * from login WHERE username='".$username."' AND password='".$password."'
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