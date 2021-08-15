<?php
		session_start();
		$cn=mysqli_connect("localhost","root","","home");
		$unm=$_SESSION['owner'];
		$un="";
		$q=mysqli_query($cn,"select * from reg where username='$unm'");
		while($row=mysqli_fetch_array($q))
		{
			$un=$row[1];
		}
		
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_FILES['t3']['name'];
		$t4=$_POST['t4'];
		$t5=$_POST['t5'];
		$t6=$_POST['t6'];
		$t7=$_POST['t7'];
		$t8=$_POST['t8'];
		$t9=$_POST['t9'];
		$t10=$_POST['t10'];
		$t11=$_POST['t11']."-".$_POST['t12'];
		$t12=$_POST['t13'];
		$t13=$_POST['t14'];
		//echo $_POST['t1'].$_POST['t2'].$_FILES['t3']['name'].$_POST['t4'].$_POST['t5'].$_POST['t6'].$_POST['t7'].$_POST['t8'].$_POST['t9'].$_POST['t10'].$_POST['t11'].$_POST['t12'].$_POST['t13'];
		$ex=explode(".",$t3);
		echo $ex[1];
		if(!empty($_FILES['t3']['name']))
		{
			if($ex[1]=="jpg" || $ex[1]=="jpeg" || $ex[1]=="JPG" || $ex[1]=="JPEG")
			{
				move_uploaded_file($_FILES['t3']['tmp_name'],"../property/".$_FILES['t3']['name']);
				$q=mysqli_query($cn,"insert into propert values('','',$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12','')");
				echo "Your property successfully added!";
				echo "<script>window.location='index.php'</script>";
			}
			else
			{
				echo "<script>alert('Invalid file format only jpg image upload')</script>";
				echo "<script>window.location='property.php'</script>";				
			}
		}
		else
		{
			echo "<script>alert('Invalid data')</script>";
			echo "<script>window.location='property.php'</script>";
		}
?>