<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
	include("head.php");
?>

    <div class="col-md-8">
      <div class="card-body">

        <div class="form-group">
        <p class="card-text" align="center">
        	<div class="container">
			<form method="POST" action="regpro.php" align="right" class="p-10 mb-10 bg-transparent text-dark">
	<table width="170%" align="center">
		<tr>
			<td width="50%" align="center" colspan=2><h1 class="card-title" style="font-family: Garamond,Times,serif; font-size: 40px;"><span class="badge badge-light">Registeration Form</span></h1></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">First name  </b></p></td>
			<td width="50%"><input type="form-control transparent-input" name="t1"  placeholder="FirstName" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">Last Name  </b></p></td>
			<td width="50%"><input type="form-control transparent-input" name="t2"  placeholder="LastName" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">Contact  </b></p></td>
			<td width="50%"><input type="form-control transparent-input" name="t3"  placeholder="Contact" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">Email  </b></p></td>
			<td width="50%"><input type="form-control transparent-input" name="t4"  placeholder="Email" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">User Name  </b></p></td>
			<td width="50%"><input type="form-control transparent-input" name="t5"  placeholder="UserName" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">Password  </b></p></td>
			<td width="50%"><input type="Password" name="t6"  placeholder="Password" style="font-family: Garamond,Times,serif; font-size: 20px;"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark"><b style="font-family: Garamond,Times,serif; font-size: 25px;">Type  </b></p></td>
			<td width="50%" class="text-dark"  style="font-family: Garamond,Times,serif; font-size: 20px;"><input type="radio" name="t7" value="owner"><b>home owner</b>
			<input type="radio" name="t7" value="renter"><b>renter</b></td>
		</tr>
		<tr>
		<td width="50%" align="center" colspan="2"><input type="submit" class="btn btn-info"  style="font-family: Garamond,Times,serif; font-size: 20px;" value="Register Me" name="submit"></td>
		</tr>
	</table>
</form>
</div>
</html>

        </p>
    </div>
    </div>
    </div>
  </div>
</div>
<?php
	include("footer.php");
?>
    