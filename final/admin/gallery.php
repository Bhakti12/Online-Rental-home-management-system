<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
	include("head.php");
?>

    <div class="col-md-64">
      <div class="card-body">
	<table width="100%" border=1>
<tr><th>UserName</th><th>OwnerName</th><th>ContactNo.</th><th>Image</th><th>BuildingType</th><th>Accomodation</th><th>BlockNo.</th><th>Address</th><th>LandMark</th><th>City</th><th>PinCode</th><th>Range</th><th>Rent</th><th>Renter name</th></tr>
	<?php
		$cn=mysqli_connect("localhost","root","","home");		
		$q=mysqli_query($cn,"select * from propert");
		while($r=mysqli_fetch_array($q))
		{
			echo "<tr><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td><img src='../property/".$r[4]."' height=100 width=100></td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td><td>".$r[10]."</td><td>".$r[11]."</td><td>".$r[12]."</td><td>".$r[13]."</td></tr>";
		}
?>
</table>
</html>
</div>
    </div>
    </div>
  </div>
</div>
</div>
<?php
	include("footer.php");
?>