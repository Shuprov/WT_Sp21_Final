<script>	
function get(id){
	return document.getElementById(id);
}
function validate(){
	cleanUp();
	var hasError=false;
	if(get("id").value==""){
		get("err_id").innerHTML="*Id Required";
				get("err_id").style="color:blue";
				hasError=true;
	}
	if(get("name").value==""){
		get("err_name").innerHTML="*Name Required";
				get("err_name").style="color:blue";
				hasError=true;
	}
	if(get("uname").value==""){
				get("err_uname").innerHTML="*Username Required";
								get("err_uname").style="color:blue";
				hasError=true;
	}
	if(get("pass").value==""){
				get("err_pass").innerHTML="*Password Required";
				get("err_pass").style="color:blue";
				hasError=true;
	}
	if(get("email").value==""){
				get("err_email").innerHTML="*Email Required";
				get("err_email").style="color:blue";
				hasError=true;
	}
	if(!hasError){
		return true;
	}
	return false;
}
function cleanUp(){
			get("err_id").innerHTML="";
			get("err_name").innerHTML="";
			get("err_uname").innerHTML="";
			get("err_pass").innerHTML="";
			get("err_email").innerHTML="";

}
</script>