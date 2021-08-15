<?php
	include("head.php");
?>
<?php
    if (isset($_POST['update'])) 
    {
    	$unm=$_SESSION['owner'];
 		$cn=mysqli_connect("localhost","root","","home");
 		$q=mysqli_query("update reg set fname='$un',lname='$lname',contact='$cont',username='$unm',password='$pass'");
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
<table width="398" border="0" align="center">
  <tr>
    <td height="26" colspan="2">Update Profile Information </td>
	<td><div align="right"><a href="logout.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">First name:</div></td>
    <td width="165" valign="top"><input type="text" name="t1" value="<?php echo $un ?>"></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Last Name:</div></td>
    <td valign="top"><input type="text" name="t2" value="<?php echo $lname ?>"></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Contact:</div></td>
    <td valign="top"><input type="text" name="t3" value="<?php echo $cont ?>"></td>
  </tr>
   <tr>
    <td valign="top"><div align="left">Email: </div></td>
    <td valign="top"><input type="email" name="t4" value="<?php echo $em ?>"></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">username: </div></td>
    <td valign="top"><input type="text" name="t5" value="<?php echo $unm ?>"></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">password: </div></td>
    <td valign="top"><form name="f1"><input type="password" name="psw" value="<?php echo $pass ?>"><input type="button" value="show" name="pw" onclick="pwsh()"></form></td>
  </tr>
  <tr><td><button>Update</button></td></tr>
</table>

<?php
	include("footer.php");
?>