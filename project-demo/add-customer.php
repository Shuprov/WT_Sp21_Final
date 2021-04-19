<?php
require_once "controllers/customer-controller.php";
require_once "javascript/add.php";
?>

<html>
	<head>

	</head> 
	<body>
	
		<fieldset>
			
			<center><legend><h1>Add Customer</h1></legend></center>
			<center>
			<form action="" method="post" onsubmit="return validate()">
				<table>
					
					
					
					
					<tr>
						<td><span> Name</span></td> 
						<td>: <input type="text" id="name" value="<?php echo $name;?>" name="name"> <span id="err_name"></span>
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					<tr>
						<td><span> Username</span></td> 
						<td>: <input type="text" onfocusout="checkUsername(this)" id="uname" value="<?php echo $uname;?>" name="uname">
						<span style="color:red" id="err_username"></span>
                        <span id="err_uname"></span>
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					
					
					
				
					<tr>
						<td>Password</td>
						<td>: <input type="password" id="pass" value="<?php echo $password;?>" name="pass"> <span id="err_pass"></span>
						<span><?php echo $err_password;?></span></td>
					</tr>
					
					
					
					<tr>
						<td> Email</td>
						<td>: <input type="text" id="email" value="<?php echo $email;?>" name="email"> <span id="err_email"></span>
						<span><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="add-customer" value="Add Customer"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>	
	</body>
</html>


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
				document.getElementById("err_username").innerHTML= "*Valid";
			}
			else{
				document.getElementById("err_username").innerHTML= "*Not Valid";
			}
		}
	}
	xhttp.open("GET","check-username-customer.php?uname="+username,true);
	xhttp.send();
}
</script>