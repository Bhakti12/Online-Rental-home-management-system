<?php
	include("head.php");
?>
<div class="content">
	<?php
		$cn=mysqli_connect("localhost","root","","home");
		$id=$_GET['id'];		
		$q=mysqli_query($cn,"select * from propert where id='$id'");
		while($r=mysqli_fetch_array($q))
			?>
	<table width="100%">
	<tr>
		<td width=100% colspan="2" align="center" class="inp">Reciept</td>
	</tr>	
	<tr>
		<td width="50%" align="right"></td>
	</tr>
</table>
<?php
	include("footer.php");
?>