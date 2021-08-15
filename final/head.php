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
				<img src="imgs/logo.png" height=100 width=100>
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
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='gallery.php'" class="menus">Gallary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='reg.php'" class="menus">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='login.php'" class="menus">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: Garamond,Times,serif; font-size: 20px;" href="#" onclick="window.location='feed.php'" class="menus">FeedBack</a>
        
      </li>
     </ul>
    </div>
  </div>
  
 </body>
 </html>
<link href="style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<script>
		function srch(s)
		{
			document.getElementById('s').innerHTML="<iframe src='search.php?s="+s+"' style='width:100%;border:0px;height:900px'></iframe>";
			//document.getElementById('s').innerHTML=s;
		}
	</script>