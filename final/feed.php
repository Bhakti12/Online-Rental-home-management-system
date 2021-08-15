<?php
	include("head.php");
?>

    <div class="col-md-8">
      <div class="card-body">

        <div class="form-group">
        <p class="card-text" align="center">
<div class="container">

<form method="POST" action="feedpro.php" class="p-10 mb-10 bg-transparent text-dark">
	<table width="170%">
		<tr>
			<td width=100% colspan="2" align="center"><h3 style="font-family: Garamond,Times,serif; font-size: 40px;"><span class="badge badge-light">Give Your FeedBack</span></h3></td>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Name : </b></p></td>
			<td width="50%"> <input type="form-control transparent-input" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" placeholder="Username" onblur="(this.value=='')?this.focus():t2.focus()"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Email : </b></p></td>
			<td width="50%"> <input type="form-control transparent-input" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" placeholder="Email"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Contact : </b></p></td>
			<td width="50%"> <input type="form-control transparent-input" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" placeholder="Contact"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><p class="text-dark" style="font-family: Garamond,Times,serif; font-size: 25px;"><b>Suggation : </b></p></td>
			<td width="50%"> <input type="form-control transparent-input" style="font-family: Garamond,Times,serif; font-size: 20px;" name="t1" placeholder="Suggation"></td>
		</tr>
		<tr>
			<td width="50%" align="right" style="font-family: Garamond,Times,serif; font-size: 20px;"><input type="submit" class="btn btn-info" value="submit" name="submit"></td>
			
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
</html>
<?php
	include("footer.php");
?>