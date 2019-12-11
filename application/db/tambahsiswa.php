<?php 
require 'functions.php';
if(isset($_POST["submit"])){

if(tambahsiswa($_POST) > 0){
	echo "
	<script>
		alert('data berhasil ditambahkan');
		document.location.href = 'datasiswa.php';
	</script>
	";
}	else {
	echo "
	<script>
		alert('data gagal ditambahkan');
		document.location.href = 'datasiswa.php';
	</script>";
}

} 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data siswa</title>
</head>
<body>
<h1>Tambah Data Siswa</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="nisn">NISN :</label>
			<input type="text" name="nisn" id="nisn" required>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required>
		</li>
		<li>
			<label for="kelas">Kelas :</label>
			<input type="text" name="kelas" id="kelas" required>
		</li>
		<li>
			<button type="submit" name="submit">Tambah data</button>
		</li>
	</ul>
	
</form>
</body>
</html>