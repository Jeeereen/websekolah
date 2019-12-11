<?php 
$conn = mysqli_connect("localhost","root","","websitesma6luwu");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$orang =[];
	while( $org = mysqli_fetch_assoc($result)){
		$orang[]=$org;
	}
	return $orang;
}

function tambahguru($dataguru){
	global $conn;
	$nip = htmlspecialchars($dataguru["nip"]);
	$nama = htmlspecialchars($dataguru["nama"]);
	$alamat = htmlspecialchars($dataguru["alamat"]);
	$email = htmlspecialchars($dataguru["email"]);
	$gambar = htmlspecialchars($dataguru["gambar"]);

	$query = "INSERT INTO guru
				VALUES
				('','$nip','$nama','$alamat','$email','gambar')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function ubahguru($dataguru){
	global $conn;
	$nip = htmlspecialchars($dataguru["nip"]);
	$nama = htmlspecialchars($dataguru["nama"]);
	$alamat = htmlspecialchars($dataguru["alamat"]);
	$email = htmlspecialchars($dataguru["email"]);
	$gambar = htmlspecialchars($dataguru["gambar"]);

	$query = "INSERT INTO guru
				VALUES
				('','$nip','$nama','$alamat','$email','gambar')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function hapusguru($dataguru){
	global $conn;
	mysqli_query($conn,"DELETE FROM guru WHERE id = $dataguru");
	return mysqli_affected_rows($conn);
 }
 function tambahsiswa($datasiswa){
	global $conn;
	$nisn = htmlspecialchars($datasiswa["nisn"]);
	$nama = htmlspecialchars($datasiswa["nama"]);
	$kelas = htmlspecialchars($datasiswa["kelas"]);

	$query = "INSERT INTO siswa
				VALUES
				('','$nisn','$nama','$kelas')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function hapussiswa($datasiswa){
	global $conn;
	mysqli_query($conn,"DELETE FROM siswa WHERE id = $datasiswa");
	return mysqli_affected_rows($conn);
 }
function ubahsiswa($datasiswa){
	global $conn;
	$nisn = htmlspecialchars($datasiswa["nisn"]);
	$nama = htmlspecialchars($datasiswa["nama"]);
	$kelas = htmlspecialchars($datasiswa["kelas"]);
	$query = "INSERT INTO siswa
				VALUES
				('','$nisn','$nama','$kelas')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function tambahberita($databerita){
	global $conn;
	$judulberita = htmlspecialchars($databerita["judulberita"]);
	$isiberita = htmlspecialchars($databerita["isiberita"]);
	$query = "INSERT INTO berita
				VALUES
				('','$judulberita','$isiberita')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
function hapusberita($databerita){
	global $conn;
	mysqli_query($conn,"DELETE FROM berita WHERE id = $databerita");
	return mysqli_affected_rows($conn);
 }
 function ubahberita($databerita){
	global $conn;
	$judulberita = htmlspecialchars($databerita["judulberita"]);
	$isiberita = htmlspecialchars($databerita["isiberita"]);
	$query = "INSERT INTO berita
				VALUES
				('','$judulberita','$isiberita')
				";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}
 ?>
