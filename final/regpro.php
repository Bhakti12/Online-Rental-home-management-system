<?php
		$cn=mysqli_connect("localhost","root","","home");
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
        $t4=$_POST['t4'];
        $t5=$_POST['t5'];
        $t6=$_POST['t6'];
        $t7=$_POST['t7'];
        $q1=mysqli_query($cn,"select username from reg where username='$t5'");
        if(mysqli_num_rows($q1)==0)
        {
			$q2=mysqli_query($cn,"insert into reg values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7')");
			echo "<script>window.location='login.php'</script>";
			if($t7=="renter")
			{
				$q3=mysqli_query($cn,"insert into renter(uname,rname,contact,email) values('$t5','$t1','$t3','$t4')");
			}
		}
		else
		{
			echo "<script>alert('User already registered')</script>";
			echo "<script>window.location='reg.php'</script>";	
		}


?>