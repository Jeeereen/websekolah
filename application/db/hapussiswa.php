<?php 
require 'functions.php';
$datasiswa = $_GET["id"];

if( hapussiswa($datasiswa)>0){
	echo "<script>
		alert('data berhasil dihapus');
				document.location.href = 'datasiswa.php';
	</script>";
	
} else {
	echo "<script>
		alert('data gagal dihapus');
		document.location.href = 'datasiswa.php';
	</script>";
}

 ?>