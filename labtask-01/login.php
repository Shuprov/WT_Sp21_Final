<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username= $_POST["username"];
		$password= $_POST["password"];
		if($username== "asifur" && $password=="12345")
		{
			setcookie("username", $username, time()+120);
			header("Location:dashboard.php");
		}
		
	}
?>

<html>
	<head></head>
	<body>
		<form action="" method="POST">
			Username: <input type="text" name ="username">    <br>
			Password: <input type="password" name="password"> <br>
			<input type ="submit" name= "submit" value= "login">
		</form>
	</body>
</html>