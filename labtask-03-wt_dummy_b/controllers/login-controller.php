<?php
require_once "models/db-config.php";
$name="";
$err_name="";
$hasError=false;
    if(isset($_POST["sign_up"])){
	if(empty($_POST["name"])){
		$hasError=true;
		$err_name="*Name Required";
	}
	else{
		$name=$_POST["name"];
	}
		//if($_SERVER["REQUEST_METHOD"]=="POST"){
	//Other validation
	if(!$hasError){
		insertUser($name,$_POST["username"],$_POST["password"],$_POST["email"]);
	}
} 
    
	    if(isset($_POST["btn_login"])){
			if(authenticateUser($_POST["username"],$_POST["password"]))
			{
				header("Location: dashboard.php");
			}
			else{
				echo "Invalid username or password";
			}
			
		}

	
        
		function insertUser($name,$username,$password,$email){
			$query="insert into users values (NULL,'$name','$username','$password','$email')";
			execute($query);
		}
		
		function authenticateUser($username,$password)
		{
			$query="select * from users where username='$username' and password='$password'";
			$result=get($query);
			if(count($result)>0)
			{
				return $result[0];
			}
			else{
				return false;
			}
		}



?>