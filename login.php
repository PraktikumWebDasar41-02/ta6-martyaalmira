<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td><input type="test" name="nama"></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="login"></td>
			</tr>
		</form>
	</table>

</body>
</html>

<?php
session_start();
if (isset($_SESSION)) {
	
}

?>