<?php
	if(isset($_POST['submit']))
	{
		$cn=mysqli_connect("localhost","root","","home");
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
		$t4=$_POST['t4'];
		$q=mysqli_query($cn,"insert into feedback values('','$t1','$t2','$t3','$t4')");
		echo "<script>window.location='index.php'</script>";
	}
	else
	{
		echo "<script>window.location='feed.php'</script>";
	}
?>