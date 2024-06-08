 <?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM data_siswa INNER JOIN tbl_gel ON data_siswa.gelombang = tbl_gel.gelombang WHERE data_siswa.id = '$id'");
$data = mysqli_fetch_assoc($query);
function rupiah($angka){
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
}
  

  if (isset($_POST['submit'])) {
  $daftar = $_POST['daftar'];
  $tanggal = $_POST['tanggal'];
  $nama = $_POST['nama'];
  $asal = $_POST['asal'];
  echo $_POST['kembalian'];
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MADEP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .form-container {
      display: flex;
      flex-wrap: wrap;
    }
    .form-group {
      flex: 1 1 45%;
      margin: 10px;
    }
    .form-group.full-width {
      flex: 1 1 100%;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK MADYA DEPOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dash.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="regis.php">Register</a></li>
            <li><a class="dropdown-item" href="gelombang.php">Input Gelombang</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pendaftaran
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="daftarbaru.php">Daftar Baru</a></li>
            <li><a class="dropdown-item" href="datasiswa.php">Data Siswa</a></li>
            <li><a class="dropdown-item" href="datakaos.php">Data Kaos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pembayaran
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="trans.php">Transaksi</a></li>
            <li><a class="dropdown-item" href="databayar.php">Data Pembayaran</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br><br>

<div class="container">
  <h4>Transaksi</h4>
  <br>
  <div class="jumbotron jumbotron-fluid">
    <div class="container" style=" background-color: #303030; color: white; border-radius: 10px; ">
      <h1 class="display-6">Pembayaran</h1>
    
      <form class="form-container" method="POST">
        <div class="form-group">
          <label for="noPendaftaran">No. Pendaftaran</label>
          <input type="text" class="form-control" id="noPendaftaran" value="<?php echo $data['no_pendaftaran'] ?>" placeholder="Masukkan No. Pendaftaran">
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" id="tanggal">
        </div>
        <div class="form-group">
          <label for="namaSiswa">Nama Siswa</label>
          <input type="text" class="form-control" value="<?php echo $data['nama_siswa'] ?>" id="namaSiswa" placeholder="Masukkan Nama Siswa">
        </div>
        <div class="form-group">
          <label for="asalSekolah">Asal Sekolah</label>
          <input type="text" class="form-control" id="asalSekolah" value="<?php echo $data['asal_sekolah'] ?>" placeholder="Masukkan Asal Sekolah">
        </div>
        <div class="form-group">
          <label for="gelombang">Gelombang</label>
          <input type="text" class="form-control" value=" <?php echo $data['gelombang'] ?> " id="gelombang" placeholder="Masukkan Gelombang">
        </div>
        <div class="form-group">
          <label for="jumlahPembayaran">Jumlah Tagihan</label>
          <input type="text" class="form-control" id="jumlahPembayaran" value=" <?php echo $data['nominal'] ?> " placeholder="Masukkan Jumlah Pembayaran">
        </div>
        <div class="form-group">
          <label for="Pembayaran">Pembayaran</label>
          <input type="number" class="form-control" id="Pembayaran" placeholder="Masukkan Pembayaran" oninput="calculateChange()">
        </div>
        <div class="form-group">
          <label for="kembalian">Kembalian</label>
          <input type="number" class="form-control" name="kembalian" id="kembalian" placeholder="Masukkan Kembalian" readonly>
        </div>
        <div class="form-group full-width">
          <label for="keterangan">Keterangan</label>
          <textarea class="form-control" id="keterangan" rows="3" placeholder="Masukkan Keterangan"></textarea>
        </div>
        <div class="form-group full-width">
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script>
function calculateChange() {
  var jumlahPembayaran = parseFloat(document.getElementById('jumlahPembayaran').value.replace(/[^\d.-]/g, '')) || 0;
  var pembayaran = parseFloat(document.getElementById('Pembayaran').value) || 0;
  var kembalian = pembayaran - jumlahPembayaran;
  document.getElementById('kembalian').value = kembalian;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>