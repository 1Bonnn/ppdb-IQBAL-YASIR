<?php 
session_start();
if (isset($_POST['submit'])) {
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	
	$kuari = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");
	$data = mysqli_fetch_assoc($kuari);
	if ($data['username'] == $username) {
		echo "<script>
		alert('username sudah ada');
		</script>";
	}else{
		$quary = mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$username','$password','$level')");
		if ($quary) {
			$_SESSION["berhasil"] = "true";
			echo "<script>
			alert('Berhasil daftar');
			document.location.href = 'regis.php'
			</script>";
		}else{
			echo "<script>
			alert('gagal daftar');
			document.location.href = 'admin.php'
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
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Registrasi</h4>
                    </div>
                    <div class="card-body">
                        <form  method="post">
                            <div class="form-group">
                                <label for="username">Nama User</label>
                                <input type="text" class="form-control" id="username" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">username</label>
                                <input type="text" class="form-control" id="nama" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="admin" value="admin" required>
                                    <label class="form-check-label" for="admin">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="user" value="petugas" required>
                                    <label class="form-check-label" for="user">Petugas</label>
                                </div>
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
