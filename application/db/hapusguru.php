<?php 
require 'functions.php';
$dataguru = $_GET["id"];

if( hapusguru($dataguru)>0){
	echo "<script>
		alert('data berhasil dihapus');
				document.location.href = 'dataguru.php';
	</script>";
	
} else {
	echo "<script>
		alert('data gagal dihapus');
		document.location.href = 'dataguru.php';
	</script>";
}

 ?>