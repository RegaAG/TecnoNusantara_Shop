<?php
include "../koneksi/koneksi.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Login Form</title>
    <style>
        body {
            background-color: #0D1C33;
        }


        .card {
            background-color: #BAC6D6;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow shadow-lg">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" autocomplete="off" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        // Mengecek apakah username dan password cocok
        $sql = "SELECT * FROM db_admin WHERE Username = '$username' AND Password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login berhasil
            echo "<script>alert('Login Berhasil')</script>";
            echo "<script>window.location = 'data-produk.php'</script>";
        } else {
            // Login gagal
            echo "<script>alert('Login gagal! Periksa kembali username dan password Anda')</script>";
        }
    }

    $conn->close();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>