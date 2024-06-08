<?php
// Mulai sesi
session_start();

// Koneksi ke database
include 'koneksi.php';

// Mengambil data pengguna berdasarkan ID
$id = $_GET['id'];
$ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
$data = mysqli_fetch_assoc($ambil);

// Memproses form ketika disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // Cek apakah username sudah ada
    $kuari = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    $user_data = mysqli_fetch_assoc($kuari);

        // Menyimpan data pengguna ke database
        $quary = mysqli_query($koneksi,"UPDATE user SET `id`='$id',`nama`='$nama',`username`='$username',`password`='$password',`level`='$level' WHERE id = '$id'");
        if ($quary) {
            $_SESSION["berhasil"] = "true";
            echo "<script>
            alert('Berhasil diubah nyet');
            document.location.href = 'regis.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal daftar');
            document.location.href = 'admin.php';
            </script>";
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
                        <form method="post">
                            <div class="form-group">
                                <label for="nama">Nama User</label>
                                <input type="text" class="form-control" id="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="<?php echo htmlspecialchars($data['username']); ?>" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" value="<?php echo htmlspecialchars($data['password']); ?>" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="admin" value="admin" <?php echo ($data['level'] == 'admin') ? 'checked' : ''; ?> required>
                                    <label class="form-check-label" for="admin">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas" <?php echo ($data['level'] == 'petugas') ? 'checked' : ''; ?> required>
                                    <label class="form-check-label" for="petugas">Petugas</label>
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
