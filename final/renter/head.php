<?php
	$cn=mysqli_connect("localhost","root","","home");
	session_start();
	if(!isset($_SESSION['renter']))
	{
		header("location:../login.php");
	}
	$un=$_SESSION['renter'];
	$contact="";
		$add="";
		$gender="";
		$em="";
		$padd="";
		$occ="";
		$job="";
		$mam="";
	$q=mysqli_query($cn,"select * from renter where rname='$un'");
	while($r=mysqli_fetch_array($q))
	{
		$un=$r[2];
		$contact=$r[3];
		$add=$r[4];
		$gender=$r[5];
		$em=$r[6];
		$padd=$r[7];
		$occ=$r[8];
		$job=$r[9];
		$mam=$r[10];
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
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='rdetail.php'" class="menus">Renter Detail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='index.php'" class="menus">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='gallery.php'" class="menus">Gallary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='profile.php'" class="menus"><?php echo "Hello $un"; ?></a>
      </li>
      
     </ul>
    </div>
  </div>
  
 </body>
 </html>