<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
</head>
<body>
	<tabel>
		<h3>Pendaftaran</h3>
	<form method="POST">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td><br>
		</tr>

		<tr>
			<td>NIM &nbsp</td>
			<td><input type="text" name="nim"></td><br>
		</tr>

		<tr>
			<td>Kelas<br></td>
			<td>
				<input type="radio" name="kelas" value="01">01<br>
  				<input type="radio" name="kelas" value="02">02<br>
  				<input type="radio" name="kelas" value="03">03<br>
  				<input type="radio" name="kelas" value="04">04<br>
  				<input type="radio" name="kelas" value="05">05<br>
  				<input type="radio" name="kelas" value="06">06<br>
  				<input type="radio" name="kelas" value="07">07<br>
  			</td>
		</tr>

		<tr>
			<td>Jenis Kelamin<br></td>
			<td>
				<input type="radio" name="jk" value="perempuan">Perempuan<br>
  				<input type="radio" name="jk" value="laki-laki">Laki-laki<br>
  			</td>
		</tr>

		<tr>
			<td>Hobi</td><br>
			<td>
				<input type="checkbox" name="hobi" value="tidur">Tidur<br>
				<input type="checkbox" name="hobi" value="makan">Makan<br>
				<input type="checkbox" name="hobi" value="mandi">Mandi<br>
				<input type="checkbox" name="hobi" value="olahraga">Olahraga<br>
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>
				<select name="fakultas">
				<option>Pilih</option> 
				<option value="fit">Fakultas Ilmu Terapan</option>
				<option value="fif">Fakultas Informatika</option>
				<option value="fkb">Fakultas Komunikasi Bisnis</option>
				<option value="feb">Fakultas Ekonomi Bisnis</option>
				<option value="fri">Fakultas Rekayasa Industri</option>
				<option value="fte">Fakultas Teknik Elektro</option>
			</select><br>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"></textarea></td><br>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="submit"><br></td>
		</tr>

	</form>
	</tabel>

</body>
</html>

<?php

if(isset($_POST['submit'])){
	if(strlen($_POST['nama']<=35)){
		$namaq = $_POST['nama'];
	}else{
		echo "Nama tidak boleh lebih dari 35 huruf<br>";
	}

	if(strlen($_POST['nim']==10 && is_number($_POST['nim']))){
		$nimq = $_POST['nim'];
	}else{
		echo "NIM hanya 10 karakter<br>";
	}
	$kelasq = $_POST['kelas'];

	if(isset($_POST['jk'])){
		$jkq = $_POST['jk'];
	}
	
	$hobiq = $_POST['hobi'];
	$fakultasq = $_POST['fakultas'];
	$alamatq = $_POST['alamat'];


session_start();
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];

$data =mysqli_connect('localhost', 'root', '', 'jurnal6');

$cek = mysqli_query($data,"INSERT INTO daftar (Nama,NIM,Kelas,Jenis_kelamin,Hobi,Fakultas,Alamat) VALUES('$nama', $nim, '$kelas', '$jk','$hobi', '$fakultas', '$alamat' )");

	if($cek){
		//header("location:login.php");
		echo "berhasil";
	}else{
		echo "gagal";
	}
}
?>