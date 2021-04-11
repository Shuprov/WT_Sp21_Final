<?php
require_once "controllers/student-controller.php";
$students= getAllStudents();
?>


<div>
	<h1>All Students</h1>
	<table border="1" style=border-collapse:collapse;>
		<thead>
			<th>Id</th>
			<th> Name</th>
			<th>Dob</th>
			<th>Credit</th>
			<th>Cgpa</th>
			<th>Dept_Id</th>
            <th>Action</th>
			<th>Action</th>

		</thead>
		<tbody>
		<?php
		foreach($students as $student)
		{
			echo "<tr>";
			echo "<td>".$student["id"]."</td>";
			echo "<td>".$student["name"]."</td>";
			echo "<td>".$student["dob"]."</td>";
			echo "<td>".$student["credit"]."</td>";
			echo "<td>".$student["cgpa"]."</td>";
			echo "<td>".$student["dept_id"]."</td>";

			echo '<td><button><a href="" >Edit</a></button></td>';
			echo '<td><button><a href="">Delete</a></button></td>';
			echo "</tr>";

		}
		?>
			
		</tbody>
	</table>
</div>
