<?php
	$id=$_GET['id'];
	$user=$_GET['user'];
	$cn=mysqli_connect("localhost","root","","home");
	$q=mysqli_query($cn,"select * from renter where uname='$user'");
	while($r=mysqli_fetch_array($q))
	{
		if(empty($r[4]) || empty($r[5]) || empty($r[7]) || empty($r[8]) || empty($r[9]) || $r[10]==0)
		{
			echo "<script>alert('Fill your details in Renter Details section')</script>";
			echo "<script>window.location='rdetail.php'</script>";	
		}
		else
		{
			$q=mysqli_query($cn,"select * from propert where id='$id'");
			while($r=mysqli_fetch_array($q))
			{
				$q2=mysqli_query($cn,"select * from approval where username='$r[1]' and oname='$r[2]' and contact='$r[3]' and btype='$r[5]' and accomodation='$r[6]' and bno='$r[7]' and addr='$r[8]' and lmark='$r[9]' and city='$r[10]' and pincode='$r[11]' and rangee='$r[12]' and rent='$r[13]'");
				if(mysqli_num_rows($q2)!=0)
				{
					echo "<script>alert('request already pending')</script>";
					echo "1";
				}
				else
				{
					echo "2";
					$q1=mysqli_query($cn,"insert into approval values('','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$r[8]','$r[9]','$r[10]','$r[11]','$r[12]','$r[13]','available','$user')");
				}
			}
			echo "<script>window.location='index.php'</script>";
		}
	}
?>