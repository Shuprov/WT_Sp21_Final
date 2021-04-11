<?php
require_once "controllers/student-controller.php";
?>
<html>
	<head>
	</head> 
	<body>
	
		<fieldset>
			
			<center><legend><h1>Add Student</h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
					
					
					
					
					<tr>
						<td><span> Name</span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					
					<tr>
						<td>Date of Birth</td>
						<td>:
							<select>
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select>
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select>
								<option>Year</option>
								
								<?php
									for($i=1900;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							
						</td>
					</tr>
					
					
					
				
					<tr>
						<td>Credit</td>
						<td>: <input type="password" value="<?php echo $credit;?>" name="credit">
						<span><?php echo $err_credit;?></span></td>
					</tr>
					
				
					
					<tr>
						<td>Cgpa</td>
						<td>: <input type="text" value="<?php echo $cgpa;?>" name="cgpa">
						<span><?php echo $err_cgpa;?></span></td>
					</tr>
					
					<tr>
						<td> Department</td>
						<td>: <select>
								<option>Choose</option>
								
								<?php
								    $department = array("CSE","EEE","BBA");
									foreach($department as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select></td>
						
					</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Add Student"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>
</body>
</html>