<?php
	include("head.php");
?>
<style>
.prop
{
	height:150px;
	width:150px;
	padding:20px;
	margin:5px 10px 5px 5px;
}
.req
{
	display:none;
	height:50px;
	width:150px;
	font-size:20px;
	position:absolute;
	background-color:rgba(198,39,0,0.8);
	color:white;
	float:left;
	margin-top:-50px;
	text-align:center;
}
.prop:hover .req
{
	display:block;
}
</style>
<div class="content">
<?php

		$cn=mysqli_connect("localhost","root","","home");		
		$q=mysqli_query($cn,"select * from approval where username='$un' and stat='available'");
		while($r=mysqli_fetch_array($q))
		{
				
			echo "<a href='rdetail.php?id=".$r[0]."&rname=".$r[15]."'><img src='../property/".$r[4]."' height=150 width=150 style='font-family: Garamond,Times,serif; font-size: 20px;'>Approve</a>";

		}
?>
</div>
<?php
	include("footer.php");
?>