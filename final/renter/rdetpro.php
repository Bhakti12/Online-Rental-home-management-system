<?php
	if(isset($_POST['submit']))
	{
		$cn=mysqli_connect("localhost","root","","home");
		$t1=$_POST['t1'];
		$t4=$_POST['t4'];
		$t5=$_POST['t5'];
		$t7=$_POST['t7'];
		$t8=$_POST['t8'];
		$t9=$_POST['t9'];
		$t10=$_POST['t10'];
		$q=mysqli_query($cn,"update renter set address='$t4',gender='$t5',padd='$t7',occupation='$t8',job_add='$t9',family_mam='$t10' where uname='$t1'");
		echo "<script>window.location='index.php'</script>";
	}
	else
	{
		echo "<script>window.location='rdetail.php'</script>";
	}
?>