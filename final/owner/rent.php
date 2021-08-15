<?php
	$cn=mysqli_connect("localhost","root","","home");
	$id=$_GET['id'];
	$req=$_GET['req'];
	if($req=="accept")
	{
		$unm="";
		$onm="";
		$cont="";
		$addr="";
		$lmark="";
		$city="";
		$pinc="";
		$rang="";
		$rent="";
		$rnm="";
		echo $id;
		$cn=mysqli_connect("localhost","root","","home");		
		$q=mysqli_query($cn,"select * from approval where id='$id'");
		while($r=mysqli_fetch_array($q))
		{
			$unm=$r[1];
			$onm=$r[2];
			$cont=$r[3];
			$addr=$r[8];
			$lmark=$r[9];
			$city=$r[10];
			$pinc=$r[11];
			$rang=$r[12];
			$rent=$r[13];
			$rnm=$r[15];
		}
		$pid=0;
		//$q1=mysqli_query($cn,"select * from propert where username='$unm' and oname='$onm' and contact='$cont' and addr='$addr' and lmark='$lmark' and city='$city' and pincode='$pinc'");
		$q1=mysqli_query($cn,"select * from propert where username='$unm' and oname='$onm' and contact='$cont' and addr='$addr' and lmark='$lmark' and city='$city' and pincode='$pinc' and rang='$rang' and rent='$rent'");
		while($r1=mysqli_fetch_array($q1))
		{
			$pid=$r1[0];
		//	echo $pid.$r1[3],$r1[8].$r1[9].$r1[10].$r1[11];
		}
		if(mysqli_num_rows($q1)!=0)
		{
			$q2=mysqli_query($cn,"update propert set rname='$rnm' where id='$pid'");
			$q3=mysqli_query($cn,"update approval set stat='onrent' where id='$id'");
			header("location:index.php");
		}
	}
	else
	{
		$qdel=mysqli_query($cn,"delete from approval where id='$id'");
		header("location:index.php");
	}
?>