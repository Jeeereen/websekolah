<?php 
require 'functions.php';
if(isset($_POST["submit"])){

if(ubahberita($_POST) > 0){
	echo "
	<script>
		alert('berita berhasil diubah');
		document.location.href = 'databerita.php';
	</script>
	";
}	else {
	echo "
	<script>
		alert('berita gagal diubah');
		document.location.href = 'databerita.php';
	</script>";
}

} 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah data berita</title>
</head>
<body>
<h1>Tambah Data berita</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="judulberita">Judul Berita :</label>
			<input type="text" name="judulberita" id="judulberita" required>
		</li>
		<li>
			<label for="nama">Nama :</label>
			<textarea name="isiberita" id="isiberita" required></textarea>
		<li>
			<button type="submit" name="submit">Ubah data</button>
		</li>
	</ul>
	
</form>
</body>
</html>