<?php
	include("head.php");
?>
<div class="content">
	<?php
		$cn=mysqli_connect("localhost","root","","home");
		$q=mysqli_query($cn,"select * from propert");
		while($r=mysqli_fetch_array($q))
		{
			echo "<a href='getrent.php?id=".$r[0]."'><img src='../property/".$r[4]."' height=150 width=150></a>";
		}
?>
</div>
<?php
	include("footer.php");
?>