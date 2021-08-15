<?php
		$cn=mysqli_connect("localhost","root","","rental");
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		
		$q=mysqli_query($cn,"insert into faq values('','$t1','$t2','')");
?>