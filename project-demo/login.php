<?php 
require_once "controllers/login-controller.php";
?>

<!--login starts -->

<html> 
<head> </head>
<body>
<form action="" method="post">
	<h1>Admin Login</h1>
<input type="text" name="username" onfocusout="checkUsername(this)" placeholder="username">
<span id="err_username"></span> <br>
<input type="password" name="password" placeholder="password"><br>
<input type="submit" name="btn_login" value="login"> 

</form>
</body>
</html>

<!--login ends -->
<script>
function checkUsername(control){
	var username= control.value;
	//ajax
	var xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange= function(){
		if(this.readyState==4 && this.status== 200){
			//when server respond
			var rsp= this.responseText;
			if(rsp== "true"){
				document.getElementById("err_username").innerHTML= "<br>Valid";
			}
			else{
				document.getElementById("err_username").innerHTML= "<br>Not Valid";
			}
		}
	}
	xhttp.open("GET","check-username.php?uname="+username,true);
	xhttp.send();
}
</script>
