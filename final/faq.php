<?php
	include("head.php");
?>
<html>
<head>
	<title>faq form</title>
</head>
<body>
<form method="POST" action="faqpro.php">
	<table width="100%">
		<tr>
			<td width=100% colspan="2" align="center">Frequantly Ask Question</td>
		</tr>
		<tr>
			<td width="50%" align="right">Name : </td>
			<td width="50%"> <input type="text" name="t1"></td>
		</tr>
		<tr>
			<td width="50%" align="right">Question : </td>
			<td width="50%"><input type="text" name="t2"></td>
		</tr>
		<tr>
			<td width="50%" align="right"><input type="submit"></td>
			<td width="50%"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
	include("footer.php");
?>