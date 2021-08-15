<?php
	include("connect.php");
	$id=$_GET['id'];
	$q=mysqli_query($cn,"delete from feedback where id='$id'");
?>
<script>
window.location="feed.php"
</script>