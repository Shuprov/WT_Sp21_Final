<html>
<head></head>
<body>
<form action="" method="post" onsubmit="return validate()">
Name: <input type="text" id="name" name="name"><span id="err_name"></span><br>
Username:<input type="text" id="uname" name="uname"><span id="err_uname"></span><br>
Password: <input type="password" id="pass" name="pass"><span id="err_pass"></span><br>
<input type="submit" name="reg">
</form>
</body>
<script>
function get(id){
	return document.getElementById(id);
}
function validate(){
	cleanUp();
	//var err_msg="";
	var hasError=false;
	if(get("name").value==""){
		//get("name").focus();
		get("err_name").innerHTML="*Name Required";
				get("err_name").style="color:red";
				hasError=true;
//err_msg+= "*Name Required<br>";
	}
	if(get("uname").value==""){
				get("err_uname").innerHTML="*Username Required";
				get("err_uname").style="color:red";
				hasError=true;
//err_msg+= "*Username Required<br>";
	}
	if(get("pass").value==""){
				get("err_pass").innerHTML="*Password Required";
				get("err_pass").style="color:red";
				hasError=true;
//err_msg+= "*Password Required<br>";
	}
	//alert(err_msg);
	if(!hasError){
		return true;
	}
	return false;
}
function cleanUp(){
			get("err_name").innerHTML="";
			get("err_uname").innerHTML="";
			get("err_pass").innerHTML="";

}
</script>
</html>