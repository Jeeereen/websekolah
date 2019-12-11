<?php 
require 'functions.php';
if(isset($_POST["submit"])){

if(tambahguru($_POST) > 0){
	echo "
	<script>
		alert('data berhasil ditambahkan');
		document.location.href = 'dataguru.php';
	</script>
	";
}	else {
	echo "
	<script>
		alert('data gagal ditambahkan');
		document.location.href = 'dataguru.php';
	</script>";
}

} 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data guru</title>
</head>
<body>
<h1>Tambah Data Guru</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nip">NIP :</label>
			<input type="text" name="nip" id="nip" required>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required>
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat" id="alamat" required>
		</li>
		<li>
			<label for="email">Email :</label>
			<input type="text" name="email" id="email" required>
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah data</button>
		</li>
	</ul>
	
</form>
</body>
</html>