<?php
	include("connect.php");
	$id=$_GET['id'];
	$q=mysqli_query($cn,"delete from reg where id='$id'");
?>
<script>
window.location="reg.php"
</script>