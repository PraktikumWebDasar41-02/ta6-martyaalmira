<?php

$data =mysqli_connect('localhost', 'root', '', 'jurnal6')

$pk = $_SESSION['pk'];

$sql = "SELECT * FROM daftar WHERE NIM = '$pk'";

$result = mysqli_query($data, "SELECT * FROM daftar");

$row = mysqli_fetch_row($result);

$data = mysqli_connect();

echo "Identitas";
session_start()

$misal ="SELECT nama WHERE nim='$nim'";
$sql = mysql_query($data, $misal);

if ($sql) {
	echo $sql;
}

?>