<?php
	include("head.php");
	$cn=mysqli_connect("localhost","root","","home");
	$q=mysqli_query($cn,"select * from renter where uname='".$un."'");
	$rname="";
	$cont="";
	$email="";
	while($r=mysqli_fetch_array($q))
	{
		$rname=$r[2];
		$cont=$r[3];
		$email=$r[6];
	}
?>
<script>
	function saddr()
	{
		var sadd=document.getElementById('sadd');
		if(sadd.checked==true)
		{
			f1.t7.value=f1.t4.value;
			f1.t7.disabled=true;
		}
		else
		{
			f1.t7.disabled=false;
			f1.t7.value="";
		}
	}
</script>
<div class="content">
<form method="POST" action="rdetpro.php" name="f1" onsubmit="t7.disabled=false;">
	<table width="100%">
		<tr>
			<td width=100% colspan="2" align="center"><h3 style="font-family: Garamond,Times,serif; font-size: 40px;"><span class="badge badge-light">Renter Details</span></h3></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Name : </b></p></td>
			<td width="50%"><h4 style="font-family: Garamond,Times,serif; font-size: 20px;"><?php echo $un;?></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Contact : </b></p></td>
			<td width="50%"><h4 style="font-family: Garamond,Times,serif; font-size: 20px;"><?php echo $cont;?></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Address : </b></p></td>
			<td width="50%"><textarea name="t4" placeholder="Address" style="font-family: Garamond,Times,serif; font-size: 20px;"></textarea></td>
		</tr>
		
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Gender : </b></p></td>
			<td width="50%">male<input type="radio" name="t5" value="male" style="font-family: Garamond,Times,serif; font-size: 20px;">female<input type="radio" name="t5" value="female" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Gender : </b></p></td>
			<td width="50%"><h4 style="font-family: Garamond,Times,serif; font-size: 20px;"><?php echo $email; ?></h4></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Permanant Address : </b></p></td>
			<td width="50%"><input type="checkbox" style="font-family: Garamond,Times,serif; font-size: 20px;" id="sadd" onclick="saddr()"> Same As<br><textarea name="t7"></textarea></td>
		</tr>
		
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Occupation : </b></p></td>
			<td width="50%"><input type="text" name="t8" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="Occupation"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Job address : </b></p></td>
			<td width="50%"><textarea name="t9" style="font-family: Garamond,Times,serif; font-size: 20px;"></textarea></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Family Members : </b></td>
			<td width="50%"><input type="number" name="t10" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 20px;"><input type="submit" class="btn btn-info" value="Submit" name="submit"></td>
			
		</tr>
		
	</table>
</form>
</div>
<?php
	include("footer.php");
?>