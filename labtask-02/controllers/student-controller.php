<?php
require_once "models/db-config.php";

		    $name="";
			$err_name="";
			$credit="";
			$err_credit="";
			$cgpa="";
			$err_cgpa="";
			$hasError=false;

			
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
				
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else if(is_numeric($_POST["name"])){
					$err_name="*Only string value is accepted";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["credit"])){
					$err_credit = "*Enter Credit";
					$hasError=true;
				}
				else if(!is_numeric($_POST["credit"])){
					$err_credit="*Only numerical value is accepted";
					$hasError=true;
				}
				else{
					$credit=$_POST["credit"];
				}
				
				if(empty($_POST["cgpa"])){
					$err_cgpa = "*Enter Cgpa";
					$hasError=true;
				}
				else if(!is_numeric($_POST["cgpa"])){
					$err_cgpa="*Only numerical value is accepted";
					$hasError=true;
				}
				else if(!strpos($_POST["cgpa"],".")){
					$err_cgpa="*Characters must contain .";
                    $hasError=true;

				}
				else{
					$cgpa=$_POST["cgpa"];
				}
					
				
			
			}
			


function getStudent($id)
{
	$query="select * from student where id='$id'";
	$result=get($query);
	if(count($result)>0)
	{
		return result[0];
	}
	else{ 
	return false;
	}
}

function getAllStudents()
{
	$query="select * from student";
	$result=get($query);
	return $result;
}



?>