<?php
	include("head.php");
?>
<?php
	if(!isset($_SESSION['owner']))
  {
    header("location:../login.php");
  }
  $unm=$_SESSION['owner'];
  $cn=mysqli_connect("localhost","root","","home");
	$q=mysqli_query($cn,"select * from reg where fname='$unm'");
  while($r=mysqli_fetch_array($q))
	{
		$un=$r['fname'];
		$lname=$r['lname'];
		$cont=$r['contact'];
    	$em=$r['email'];
		$unm=$r['username'];
		$pass=$r['password'];
	}
?>
<script>
function pwsh()
{
  if(f1.pw.value=="show")
  {
    f1.pw.value="hide";
    f1.psw.setAttribute("type","text");
  }
  else
  {
    f1.pw.value="show";
    f1.psw.setAttribute ("type","password");
  }
}
  </script>

<table width="500" border="0" align="center">
  <tr>
    <td height="26" colspan="2" style="font-family: Garamond,Times,serif; font-size: 30px;"><b>Your Profile Information</b></td>
  <td colspan="2"><span class="badge badge-pill badge-dark"><a href="logout.php"><div align="right"><h1 style="font-family: Garamond,Times,serif; font-size: 30px;">LogOut</h1></div></a></span></td> 
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>First name:</b></div></td>
    <td width="165" valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" value="<?php echo $un ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Last Name:</b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t2" value="<?php echo $lname ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Contact:</b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t3" value="<?php echo $cont ?>" disabled></td>
  </tr>
   <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Email: </b></div></td>
    <td valign="top"><input type="email" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t4" value="<?php echo $em ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>username: </b></div></td>
    <td valign="top"><input type="text" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t5" value="<?php echo $unm ?>" disabled></td>
  </tr>
  <tr>
    <td valign="top"><div align="left" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>password: </b></div></td>
    <td valign="top"><form name="f1"><input type="password" name="psw" style="font-family: Garamond,Times,serif; font-size: 20px;" value="<?php echo $pass ?>" disabled><input type="button" value="show" name="pw" onclick="pwsh()"></form></td>
  </tr>
  </table>

<?php
	include("footer.php");
?>