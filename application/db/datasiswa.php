<?php 
require 'functions.php';
$siswa = mysqli_query($conn,"SELECT * FROM siswa");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
<h1>Data Siswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Lakukan</th>
		<th>NISN</th>
		<th>Nama</th>
		<th>Kelas</th>
	</tr>
<?php $i = 1; ?>
<?php foreach ($siswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><a href="ubahdatasiswa.php"> Ubah</a> | <a href="hapussiswa.php?id=<?= $row["id"];  ?>">Hapus</a></td>
		<td><?= $row["nisn"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["kelas"]; ?></td>
	</tr>
<?php $i++; ?>
<?php endforeach ; ?>
</table>
<br><br>
<a href="tambahsiswa.php">Tambah Siswa</a>
</body>
</html>