<?php 
require 'functions.php';
// $conn = mysqli_connect("localhost","root","","websitesma6luwu");
$guru = mysqli_query($conn,"SELECT * FROM guru");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Guru</title>
</head>
<body>
<h1>Data Guru</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>
			No.
		</th>
		<th>
			Lakukan
		</th>
		<th>
			Foto
		</th>
		<th>
			NIP
		</th>
		<th>
			Nama
		</th>
		<th>
			Alamat
		</th>
		<th>
			Email
		</th>
	</tr>
<?php $i = 1; ?>
<?php foreach ($guru as $row ) : ?>
	<tr>
		<td>
			<?= $i; ?>
		</td>
		<td>
			<a href="ubahdataguru.php"> Ubah</a> | <a href="hapusguru.php?id=<?= $row["id"];  ?>">Hapus</a>
		</td>
		<td>
			<img src="gambar/<?= $row["gambar"]; ?>" width="50">
		</td>
		<td>
			<?= $row["nip"]; ?>
		</td>
		<td>
			<?= $row["nama"]; ?>
		</td>
		<td>
			<?= $row["alamat"]; ?>
		</td>
		<td>
			<?= $row["email"]; ?>
		</td>
	</tr>
<?php $i++; ?>
<?php endforeach ; ?>
</table>
<br><br>
<a href="tambahguru.php">Tambah Guru</a>
</body>
</html>