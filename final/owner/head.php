<?php
	$cn=mysqli_connect("localhost","root","","home");
	session_start();
	if(!isset($_SESSION['owner']))
	{
		header("location:../login.php");
	}
	$unm=$_SESSION['owner'];
	$un="";
	$cont="";
	$lname="";
	$em="";
	$pass="";
	$q=mysqli_query($cn,"select * from reg where username='$unm'");
	while($row=mysqli_fetch_array($q))
	{
		$un=$row[1];
		$lname=$row[2];
		$cont=$row[3];
		$em=$row[4];
		$unm=$row[5];
		$pass=$row[6];
	}
?>
<html>
<head>
	</head>
	<body>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
    	<table width="100%">
		<tr>

			<Td width="20%">
				<img src="../imgs/logo.png" height=100 width=100>
    		</Td>
    		<td>
    		<h1 class="card-title"><span class="text-danger" style="font-family: Garamond,Times,serif; font-size: 60px;"><b>My House</b></span></h1>
    		<p class="card-text"><span class="text-success" style="font-family: Garamond,Times,serif; font-size: 30px;"><b>Solution For Rental home And P.G.</b></span></p>
			</td>
		</tr>


		</table>

      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='index.php'" class="menus">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='property.php'" class="menus">Property</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='creq.php'" class="menus">Client Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='profile.php'" class="menus"><?php echo "Hello $un"; ?></a>
      </li>
      
     </ul>
    </div>
  </div>
  
 </body>
 </html>

