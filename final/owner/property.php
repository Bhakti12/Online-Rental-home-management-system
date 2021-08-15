<?php
	include("head.php");
//	$q=mysqli_query($cn,"select * from reg where username='$unm'");
?>
<script>
function acco()
{
	var ac=f1.t4.value;
	if(ac=="appartment" || ac=="tenament")
	{
		document.getElementById('acc').innerHTML="<select name=t5><option>1BHK</option><option>2BHK</option><option>3BHK</option></select>"
	}
	else if(ac=="office")
	{
		document.getElementById('acc').innerHTML="<input type='text' name=t5 size=5>Sq Feet"
	}
	else
	{
		document.getElementById('acc').innerHTML=""
	}
}
</script>
<div class="content">
<!DOCTYPE html>
<html>
<head>
	<title>Add Your Property</title>
</head>
<body>
<form name="f1" method="POST" action="propertypro.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td width=100% colspan="2" align="center"><h3 style="font-family: Garamond,Times,serif; font-size: 40px;"><span class="badge badge-light">Add Your Property</span></h3></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>OwenerName</b></td>
			<td width="50%"><input type="hidden" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" value=<?php echo $un;?> name=t1><?php echo $un;?></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Contact No.</b></td>
			<td width="50%"><input type="hidden" style="font-family: Garamond,Times,serif; font-size: 20px;" value=<?php echo $cont;?> name=t2><?php echo $cont;?></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Home Pic</b></td>
			<td width="50%"><input type="file" name="t3" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Block Type</b></td>
			<td width="50%"><select name="t4" onchange="acco()" style="font-family: Garamond,Times,serif; font-size: 20px;">
				<option value="0">Select Block Type</option>
				<option value="appartment">Apartment</option>
				<option value="tenament">Tenament</option>
				<option value="office">Office</option>
			</select></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Accomodation</b></td>
			<td width="50%">
				<div id="acc" style="font-family: Garamond,Times,serif; font-size: 20px;">
				
				</div>
			</td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Block No</b></td>
			<td width="50%"><input type="number" name="t6" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="Block No"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Address</b></td>
			<td width="50%"><textarea name="t7" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="Address"></textarea></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>LandMark</b></td>
			<td width="50%"><input type="text" name="t8" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="LandMark"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>City</b></td>
			<td width="50%"><input type="text" name="t9" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="City"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>pincode</b></td>
			<td width="50%"><input type="number" name="t10" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="pincode"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Range</b></td>
			<td width="50%"><input type="number" name="t11" style="font-family: Garamond,Times,serif; font-size: 20px;">to<input type="number" name="t12" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Rent</b></td>
			<td width="50%"><input type="number" name="t13" style="font-family: Garamond,Times,serif; font-size: 20px;" placeholder="rent"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 20px;"><input type="submit" class="btn btn-info" value="submit" name="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
</div>
<?php
	include("footer.php");
?>