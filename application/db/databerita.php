<?php 
require 'functions.php';
$berita = mysqli_query($conn,"SELECT * FROM berita");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data berita</title>
</head>
<body>
<h1>Data berita</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Lakukan</th>
		<th>Judul Berita</th>
		<th>Isi berita</th>
	</tr>
<?php $i = 1; ?>
<?php foreach ($berita as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><a href="ubahdataberita.php"> Ubah</a> | <a href="hapusberita.php?id=<?=$row["id"];  ?>">Hapus</a></td>
		<td><?= $row["judulberita"]; ?></td>
		<td><?= $row["isiberita"]; ?></td>
	</tr>
<?php $i++; ?>
<?php endforeach ; ?>
</table>
<br><br>
<a href="tambahberita.php">Tambah berita</a>
</body>
</html>