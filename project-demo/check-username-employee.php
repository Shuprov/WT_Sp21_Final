<?php
require_once "controllers/employee-controller.php";
$username=$_GET["uname"];
$res = checkUsernameValidity($username);
echo $res;

?>