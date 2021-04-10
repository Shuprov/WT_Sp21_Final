<?php
require_once "models/db-config.php";

if(isset($_POST["add_product"]))
{
	insertProduct($_POST["name"]);
}

function insertProduct($name)
{
	$query="insert into categories values(NULL,'$name')";
	execute($query);
	header("Location: allproducts.php");
}

function getCategory($id)
{
	$query="select * from categories where id='$id'";
	$result=get($query);
	if(count($result)>0)
	{
		return result[0];
	}
	else{ 
	return false;
	}
}

function getAllCategories()
{
	$query="select * from categories";
	$result=get($query);
	return $result;
}



?>