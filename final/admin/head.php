<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("location:../login.php");
	}
?>
<?php
	include("connect.php");
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
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='feed.php'" class="menus">FEEDBACK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='gallery.php'" class="menus">GALLARY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='reg.php'" class="menus">REGISTER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='logout.php'" class="menus">LOGOUT</a>
        
      </li>
     </ul>
    </div>
  </div>
  
 </body>
 </html>
