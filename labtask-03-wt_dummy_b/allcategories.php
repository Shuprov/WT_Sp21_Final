<?php include 'admin_header.php';
require_once "controllers/category-controller.php";
$categories= getAllCategories();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		<?php
		foreach($categories as $category)
		{
			echo "<tr>";
			echo "<td>".$category["id"]."</td>";
			echo "<td>".$category["name"]."</td>";
			echo '<td><a href="editcategory.php" class="btn btn-success">Edit</a></td>';
			echo '<td><a class="btn btn-danger">Delete</td>';
			echo "</tr>";

		}
		?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>