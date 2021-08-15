<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
	include("head.php");
?>

    <div class="col-md-8">
      <div class="card-body">

        <div class="form-group">
        <p class="card-text" align="center">
<div class="container">
<form method="post" action="loginpro.php" class="p-10 mb-10 bg-transparent text-dark"> 
	<table width="170%">
		<tr>
			<td width=100% colspan="2" align="center"><h3 style="font-family: Garamond,Times,serif; font-size: 40px;"><span class="badge badge-light">Log In</span></h3></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>UserName : </b></p></td>
			<td width="50%"> <input type="form-control transparent-input" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" placeholder="Username"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Password : </b></p></td>
			<td width="50%"><input type="password" name="t2" placeholder="Password" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 20px;"><input type="submit" class="btn btn-info" value="Log In" name="submit"></td>
			<td style="font-family: Garamond,Times,serif; font-size: 20px;"><input type="reset" class="btn btn-info" value="Cancel"></td>
		</tr>
	</table>
</form>
</div>
</p>
    </div>
    </div>
    </div>
  </div>
</div>
<?php
	include("footer.php");
?>
