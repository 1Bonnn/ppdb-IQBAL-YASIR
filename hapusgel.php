<?php 
include 'koneksi.php';



$ids = $_GET['id'];
	$hapus = mysqli_query($koneksi,"DELETE FROM tbl_gel WHERE id = '$ids'");
	if ($hapus) {
		echo "<script>
		alert('Berhasil di hapus');
		document.location.href = 'input_gel.php'
		</script>";
	}else{
		echo "<script>
		alert('gagal dihapus');
		document.location.href = 'regis.php'
		</script>";
	}







?>