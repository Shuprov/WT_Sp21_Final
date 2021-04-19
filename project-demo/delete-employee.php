<?php
require_once "controllers/employee-controller.php";
require_once "javascript/delete.php";
?>
<html>
	<head>

	</head> 
	<body>
		<?php
		    $id="";
			$err_id="";
			$hasError=false;

			
			
			if(isset($_POST["delete-employee"])){

				
				if(empty($_POST["id"])){
					$err_id="*Id Required";
					$hasError=true;
				}
				else if(!is_numeric($_POST["id"])){
					$err_id="*Only numeric value is accepted";
					$hasError=true;
				}
				else{
					$id=htmlspecialchars($_POST["id"]);
				}
			
				
					
				if(!$hasError){
			deleteEmployee($_POST["id"]);
            }
			
			} 
			
		?> 
	
		<fieldset>
			
			<center><legend><h1>Delete Employee</h1></legend></center>
			<center>
			<form action="" method="post" onsubmit="return validate()">
				<table>
					
					
					<tr>
						<td><span> Id</span></td> 
						<td>: <input type="text" id="id" value="<?php echo $id;?>" name="id">
						<span id="err_id"></span>
						<span><?php echo $err_id;?></span></td>
						
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="delete-employee" value="Delete Employee"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>	
	</body>
</html>