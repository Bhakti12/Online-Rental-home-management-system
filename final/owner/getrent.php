
<?php
	include("head.php");
?>
<div class="content">
	<table width="100%">

<?php
		$cn=mysqli_connect("localhost","root","","home");
		$id=$_GET['id'];		
		$q=mysqli_query($cn,"select * from propert where id='$id'");
		while($r=mysqli_fetch_array($q))
		{
			echo "<div class='card mb-3'>";
  			echo "<img src='../property/apartment2.jpg class='card-img-top' alt='...'>";
  			echo "<div class='card-body'>";
    		echo "<h5 class='card-title'>Bhumi Lands</h5>";
    		echo "<p class='card-text'>Owner Name : </td><td>".$r[2]."</td></tr>";
			echo "<tr><td align=right>Owner Contact : </td><td>".$r[3]."</td></tr>";
			echo "<tr><td align=right>Building Type : </td><td>".$r[5]."</td></tr>";
			echo "<tr><td align=right>Accomodation : </td><td>".$r[6]."</td></tr>";
			echo "<tr><td align=right valign=top>Address : </td><td>".$r[7]."<br>".$r[8]."<br>".$r[9]."<br>".$r[10]."<br>".$r[11]."</td></tr></p>";
			echo "<tr><td align=right>Rent : </td><td>".$r[13]."</td><tr><td colspan=2 align=center><a href='rent.php?id=".$r[0]."&user=".$un."'>On Rent</a></td></tr>";
    		echo "</table></td></tr>";	

		}
?>
</table>
</div>
</html>
<?php
	include("footer.php");
?>
