<?php 
include 'koneksi.php';
 $coba = mysqli_query($koneksi,"SELECT * FROM tbl_gel");
if(isset($_POST['submit'])){
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d G:i');
  $nama  =  $_POST['nama'];
  $tgl  =  $_POST['tgl'];
  $jk  =  $_POST['jk'];
  $agama  =  $_POST['agama'];
  $notlp  =  $_POST['notlp'];
  $asal  =  $_POST['asal'];
  $alamat  =  $_POST['alamat'];
  $jurusan  =  $_POST['jurusan'];
  $namaortu  =  $_POST['namaortu'];
  $alamatortu  =  $_POST['alamatortu'];
  $notlpn  =  $_POST['notlpn'];
  $pekerjaanortu  =  $_POST['pekerjaanortu'];
  $namawali  =  $_POST['namawali'];
  $alamatwali  =  $_POST['alamatwali'];
  $notelpon  =  $_POST['notelpon'];
  $pekerjaanwali  =  $_POST['pekerjaanwali'];
  $ukuran = $_POST['ukuranbaju'];
  $gbl = $_POST['gbl'];
  echo $gbl;
  $np= rand(10,100);
  $nopendaftaran = 'KBRS' . $np;
  $cek = mysqli_query($koneksi,"SELECT * FROM data_siswa ORDER BY id DESC LIMIT 1");
  $lupa = mysqli_fetch_assoc($cek);

    $no =  $lupa['id'] + 1;

  $query = mysqli_query($koneksi,"INSERT INTO data_siswa VALUES ('$no','$nopendaftaran','$nama','$tgl','$jk','$agama','$notlp','$asal','$alamat','$jurusan','$tanggal','$ukuran','$gbl')");
  $query1 = mysqli_query($koneksi,"INSERT INTO data_ortu VALUES ('$no','$nama','$namaortu','$alamatortu','$notlpn','$pekerjaanortu')");
  $query2 = mysqli_query($koneksi,"INSERT INTO data_wali VALUES('$no','$nama','$namawali','$alamatwali','$notelpon','$pekerjaanwali')");
   if ($query && $query1 && $query2) {
        echo "<script>
      alert('Berhasil daftar');
      document.location.href = 'index.php'
      </script>";
    } else {
        echo "<script>alert('Gagal');</script>";
    }


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
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      width: 50%;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #f9f9f9;
    }
    h4 {
      margin-top: 30px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .radio-group {
      margin-bottom: 15px;
    }
    .radio-group label {
      font-weight: normal;
      margin-right: 10px;
    }
    .radio-group input[type="radio"] {
      margin-right: 5px;
    }
    .radio-inline {
      display: inline-block;
      margin-right: 10px;
    }
    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
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
            <li><a class="dropdown-item" href="input_gel.php">Input Gelombang</a></li>
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
            <li><a class="dropdown-item" href="datakaos.php">Data Pembayaran</a></li>
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

<br>

<div class="container-fluid">
  <div class="jumbotron">
  <p class="lead">Daftar Siswa Baru</p>

</div>
</div>

<div class="container">
  <form method="POST">
    <h4>Biodata Siswa</h4>
    <div>
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama">
    </div>

    <div>
      <label for="tgl">Tanggal Lahir:</label>
      <input type="date" id="tgl" name="tgl">
    </div>

    
    <div class="radio-group">
      <label>Jenis Kelamin:</label>
      <div class="radio-inline">
        <input type="radio" id="jkL" name="jk" value="L">
        <label for="jkL">Laki-laki</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="jkP" name="jk" value="P">
        <label for="jkP">Perempuan</label>
      </div>
    </div>

    <div class="radio-group">
      <label>Agama:</label>
      <div class="radio-inline">
        <input type="radio" id="islam" name="agama" value="Islam">
        <label for="islam">Islam</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="kristen" name="agama" value="Kristen">
        <label for="kristen">Kristen</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="hindu" name="agama" value="Hindu">
        <label for="hindu">Hindu</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="budha" name="agama" value="Budha">
        <label for="budha">Budha</label>
      </div>
    </div>

    <div>
      <label for="notlp">No. Telepon:</label>
      <input type="text" id="notlp" name="notlp">
    </div>

    <div>
      <label for="asal">Asal Sekolah:</label>
      <input type="text" id="asal" name="asal">
    </div>

    <div>
      <label for="alamat">Alamat:</label>
      <textarea id="alamat" name="alamat"></textarea>
    </div>

    <div class="radio-group">
      <label>Jurusan:</label>
      <div class="radio-inline">
        <input type="radio" id="rpl" name="jurusan" value="RPL">
        <label for="rpl">RPL</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="mm" name="jurusan" value="MM">
        <label for="mm">MM</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="bdp" name="jurusan" value="BDP">
        <label for="bdp">BDP</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="akl" name="jurusan" value="AKL">
        <label for="akl">AKL</label>
      </div>
      <div class="radio-inline">
        <input type="radio" id="otkp" name="jurusan" value="OTKP">
        <label for="otkp">OTKP</label>
      </div>
    </div>

    <div>
      <label for="ukuranbaju">Ukuran Baju:</label>
      <select id="ukuranbaju" name="ukuranbaju">
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
      </select>
    </div>

      <div>
      <label for="gbl">Gelombang:</label>
      <select id="gbl" name="gbl">
        <?php
        if ($coba->num_rows > 0) {
            while ($aka = $coba->fetch_assoc()) { ?>
              <option value="<?php echo $aka['gelombang']; ?>">Gelombang <?php echo htmlspecialchars($aka['gelombang']); ?></option>
            <?php }
        } else {
            echo '<option value="">Tidak ada data</option>';
        }
        ?>
      </select>
    </div>

    <h4>Biodata Orang Tua</h4>

    <div>
      <label for="namaortu">Nama Orang Tua:</label>
      <input type="text" id="namaortu" name="namaortu">
    </div>

    <div>
      <label for="alamatortu">Alamat Orang Tua:</label>
      <textarea id="alamatortu" name="alamatortu"></textarea>
    </div>

    <div>
      <label for="notlpn">No. Telepon Orang Tua:</label>
      <input type="text" id="notlpn" name="notlpn">
    </div>

    <div>
      <label for="pekerjaanortu">Pekerjaan Orang Tua:</label>
      <input type="text" id="pekerjaanortu" name="pekerjaanortu">
    </div>

    <h4>Biodata Wali</h4>

    <div>
      <label for="namawali">Nama Wali:</label>
      <input type="text" id="namawali" name="namawali">
    </div>

    <div>
      <label for="alamatwali">Alamat Wali:</label>
      <textarea id="alamatwali" name="alamatwali"></textarea>
    </div>

    <div>
      <label for="notelpon">No. Telepon Wali:</label>
      <input type="text" id="notelpon" name="notelpon">
    </div>

    <div>
      <label for="pekerjaanwali">Pekerjaan Wali:</label>
      <input type="text" id="pekerjaanwali" name="pekerjaanwali">
    </div>

    <button type="submit" name="submit">Kirim</button>
  </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
