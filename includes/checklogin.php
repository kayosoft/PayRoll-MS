<?php
function check_login()
{
if(strlen($_SESSION['userID'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="index.php";		
		$_SESSION["userID"]="";
		
		header("Location: http://$host$uri/$extra");
	}
}
?>