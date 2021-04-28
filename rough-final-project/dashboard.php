<?php
//session_start();
if(!isset($_COOKIE["username"]))
{
	header("Location:login.php");
}

?>
<html>
<head>

</head>
<body>
<h1>Admin Dashboard</h1>
<h2>Welcome <?php echo $_COOKIE["username"];?></h2>
<hr>
<a href="all-managers.php">All Managers</a> <br><br>
<a href="add-manager.php">Add Manager</a><br><br>
<a href="all-employees.php">All Employees</a><br><br>
<a href="add-employee.php">Add Employee</a><br><br>
<a href="all-customers.php">All Customers</a><br><br>
<a href="add-customer.php">Add Customer</a><br><br><br>
<a href="login.php">Logout</a><br><br><br>




</body>
</html>