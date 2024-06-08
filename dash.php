<?php 
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
<br>
<div class="container-fluid">
  <div class="container-fluid bg-light py-4">
  <div class="container mt-4">
    <div class="row">
      <!-- Box 1 -->
      <div class="col-md-3 mb-4">
        <div class="p-3 bg-primary text-white rounded shadow">
          <h5 class="mb-3">Dashboard Item 1</h5>
          <p>Content for dashboard item 1.</p>
        </div>
      </div>
      <!-- Box 2 -->
      <div class="col-md-3 mb-4">
        <div class="p-3 bg-success text-white rounded shadow">
          <h5 class="mb-3">Dashboard Item 2</h5>
          <p>Content for dashboard item 2.</p>
        </div>
      </div>
      <!-- Box 3 -->
      <div class="col-md-3 mb-4">
        <div class="p-3 bg-warning text-white rounded shadow">
          <h5 class="mb-3">Dashboard Item 3</h5>
          <p>Content for dashboard item 3.</p>
        </div>
      </div>
      <!-- Box 4 -->
      <div class="col-md-3 mb-4">
        <div class="p-3 bg-danger text-white rounded shadow">
          <h5 class="mb-3">Dashboard Item 4</h5>
          <p>Content for dashboard item 4.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>