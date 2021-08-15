<?php
	session_start();
	if(isset($_SESSION['renter']))
	{
		unset($_SESSION['renter']);		
		header("location:../login.php");
	}
?>