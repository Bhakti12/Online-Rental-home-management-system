<?php
	session_start();
	if(isset($_SESSION['owner']))
	{
		unset($_SESSION['owner']);
		header("location:../login.php");
	}
?>