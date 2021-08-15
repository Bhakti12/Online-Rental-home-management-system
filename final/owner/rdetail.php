<?php
	include("head.php");
?>
<div class="content">
<table width="100%" border=1>
<tr><th style="font-family: Garamond,Times,serif; font-size: 20px;">Renter Name</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Contact</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Address</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Gender</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Email</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Permanant Address</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Occupation</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Job Address</th><th style="font-family: Garamond,Times,serif; font-size: 20px;">Family Members</th></tr>
	<?php
			$unm=$_SESSION['owner'];
			$id=$_GET['id'];
			$rnm=$_GET['rname'];
			$cn=mysqli_connect("localhost","root","","home");
			$q2=mysqli_query($cn,"select * from renter where rname='$rnm'");
			while($r=mysqli_fetch_array($q2))
			{
				echo "<tr><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td><td>".$r[10]."</td><td><a href='rent.php?id=$id&req=accept'>accept</a></td><td><a href='rent.php?id=$id&req=reject'>reject</a></td></tr>";
			}
?>
</table>
</div>
</html>

<?php
	include("footer.php");
?>
