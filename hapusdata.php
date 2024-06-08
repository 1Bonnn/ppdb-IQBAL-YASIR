<?php 
include 'koneksi.php';
if (isset($_GET['idsiswa'])) {
	$idsiswa = $_GET['idsiswa'];
	$hapus1 = mysqli_query($koneksi,"DELETE FROM data_siswa WHERE id = '$idsiswa'");
	$hapus2 = mysqli_query($koneksi,"DELETE FROM data_ortu WHERE id = '$idsiswa'");
	$hapus3 = mysqli_query($koneksi,"DELETE FROM data_wali WHERE id = '$idsiswa'");

	if ($hapus1 && $hapus2 && $hapus3) {
		echo "<script>
		alert('Berhasil di hapus');
		document.location.href = 'datasiswa.php'
		</script>";
	}else{
		echo "<script>
		alert('gagal dihapus');
		document.location.href = 'datasiswa.php'
		</script>";
	}

	die();
}else{
	$ids = $_GET['id'];

	$hapus = mysqli_query($koneksi,"DELETE FROM user WHERE id = '$ids'");
	if ($hapus) {
		echo "<script>
		alert('Berhasil di hapus');
		document.location.href = 'regis.php'
		</script>";
	}else{
		echo "<script>
		alert('gagal dihapus');
		document.location.href = 'regis.php'
		</script>";
	}



}








?>