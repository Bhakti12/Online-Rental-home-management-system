<?php
		session_start();
		$cn=mysqli_connect("localhost","root","","home");
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$q=mysqli_query($cn,"select * from reg where username='$t1' and password='$t2'");
		echo $t1."<br>".$t2."<br>";
		if(mysqli_num_rows($q)<1)
		{
			echo "<script>alert('Check your username or password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
		else
		{
			$row=mysqli_fetch_row($q);
			if($row[7]=="admin")
			{
				echo "<br>".$row[5]."<br>".$row[6]."<br>";
				$_SESSION['admin']=$t1;
				header("location:admin/feed.php");
			}
			else if($row[7]=="owner")
			{
				echo "<br>".$row[5]."<br>".$row[6]."<br>";
				$_SESSION['owner']=$t1;
				header("location:owner/index.php");
			}
			else if($row[7]=="renter")
			{
				echo "<br>".$row[5]."<br>".$row[6]."<br>";
				$_SESSION['renter']=$t1;
				header("location:renter/index.php");
			}
		}
?>