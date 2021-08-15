<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
	include("head.php");
?>

    <div class="col-md-72">
      <div class="card-body">
<div class="content">
<?php
	$q=mysqli_query($cn,"select * from reg");
	if(mysqli_num_rows($q)!=0)
{
?>
<table width=100% border=1>
	<tr>
		<th></th>
		<th>fname</th>
		<th>lname</th>
		<th>contact</th>
		<th>email</th>
		<th>username</th>
		<th>passwod</th>
		<th>type</th>
	</tr>
	<?php
		$q=mysqli_query($cn,"select * from reg where username!='admin'");
		while($r=mysqli_fetch_array($q))
		{
			echo "<tr><td><a href='rdel.php?id=".$r[0]."'>Delete</a></td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td></tr>";
		}
	?>
</table>

<?php
}
else
{
	echo "<h1 align='center'>There are no registration of any clients</h1>";
}
?>
</div>
</html>
</div>
    </div>
    </div>
    </div>
  </div>
</div>

<?php
	include("footer.php");
?>