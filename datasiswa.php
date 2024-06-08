<?php

include 'koneksi.php';

$query = mysqli_query($koneksi,"SELECT * FROM data_siswa "); 
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MADEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<br>
<div class="container-fluid">
  <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No Pendaftaran</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
       $no = 1;while (
       
       $data = mysqli_fetch_assoc($query)) { ?>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data['tanggal'] ?></td>
      <td><?php echo $data['nama_siswa'] ?></td>
      <td><?php echo $data['asal_sekolah'] ?></td>
      <td><?php echo $data['jurusan'] ?></td>
      <td><a class="btn btn-warning" href="editdata.php?id=<?php echo $data['id'] ?>" role="button">EDIT</a> | <a class="btn btn-danger" href="hapusdata.php?idsiswa=<?php echo $data['id'] ?>" role="button">HAPUS</a> | <a class="btn btn-primary" href="trans.php?id=<?php echo $data['id'] ?>" role="button">BAYAR</a></td>
   
    </tr> <?php } ?>
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>