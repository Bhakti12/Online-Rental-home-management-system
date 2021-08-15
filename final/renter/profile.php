<?php
	include("head.php");
?>
<?php
  if(!isset($_SESSION['renter']))
  {
    header("location:../login.php");
  }
  $un=$_SESSION['renter'];
	$cn=mysqli_connect("localhost","root","","home");
	$q=mysqli_query($cn,"select * from renter where rname='$un'");
	while($r=mysqli_fetch_array($q))
	{
	 	$contact=$r['contact'];
		$add=$r['address'];
		$gender=$r['gender'];
		$em=$r['email'];
		$padd=$r['padd'];
		$occ=$r['occupation'];
		$job=$r['job_add'];
		$mam=$r['family_mam'];
	}
?>

<table width="550" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2" style="font-family: Garamond,Times,serif; font-size: 30px;"><b>Your Profile Information</b></td>
	<td colspan="2"><span class="badge badge-pill badge-dark"><a href="logout.php"><div align="right"><h1 style="font-family: Garamond,Times,serif; font-size: 30px;">LogOut</h1></div></a></span></td>  
  </tr>
  <tr>
  
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>FirstName:</b></div></td>
    <td width="165" valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t1" value="<?php echo $un ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Contact:</b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t2" value="<?php echo $contact ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>address:</b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t3" value="<?php echo $add ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Gender:</b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t4" value="<?php echo $gender ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Email: </b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t5" value="<?php echo $em ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>permanant address: </b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t6" value="<?php echo $padd ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>occupation:</b> </div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t7" value="<?php echo $occ ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>job address:</b> </div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t8" value="<?php echo $job ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>family members: </b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;"name="t9" value="<?php echo $mam ?>" disabled></td>
  </tr>
  <tr>
  </tr>

</table>

<?php
	include("footer.php");
?>