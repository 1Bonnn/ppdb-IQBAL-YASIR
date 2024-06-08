<?php 
session_start();
if (isset($_POST['submit'])) {
    include 'koneksi.php';
    $gelombang = $_POST['gelombang'];
    $nominal = $_POST['nominal'];

    $kuari = mysqli_query($koneksi,"SELECT * FROM tbl_gel WHERE gelombang = '$gelombang'");
    $data = mysqli_fetch_assoc($kuari);
    if ($data['gelombang'] == $gelombang) {
        echo "<script>
        alert('Gelombang tersedia');
        </script>";
    }else{
        $quary = mysqli_query($koneksi, "INSERT INTO tbl_gel VALUES('','$gelombang','$nominal')");
        if ($quary) {
            $_SESSION["berhasil"] = "true";
            echo "<script>
            alert('Berhasil daftar');
            document.location.href = 'input_gel.php'
            </script>";
        }else{
            echo "<script>
            alert('gagal daftar');
            document.location.href = 'gelombang.php'
            </script>"; 
        }
    }
    

    
}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Gelombang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Gelombang</h4>
                    </div>
                    <div class="card-body">
                        <form  method="post">
                            <div class="form-group">
                                <label for="username">Gelombang</label>
                                <input type="text" class="form-control" id="gelombang" name="gelombang" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Harga</label>
                                <input type="text" class="form-control" id="nominal" name="nominal" required>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
