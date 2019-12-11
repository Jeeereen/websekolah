<?php 
require 'functions.php';
$databerita = $_GET["id"];

if( hapusberita($databerita)>0){
	echo "<script>
		alert('berita berhasil dihapus');
				document.location.href = 'databerita.php';
	</script>";
	
} else {
	echo "<script>
		alert('berita gagal dihapus');
		document.location.href = 'databerita.php';
	</script>";
}

 ?>