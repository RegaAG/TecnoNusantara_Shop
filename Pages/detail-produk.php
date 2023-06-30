<?php
include "../koneksi/koneksi.php";
error_reporting(0);

$produk = mysqli_query($conn, "SELECT * FROM db_barang WHERE id = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($produk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buka Warung</title>
    <!-- Tambahkan link CSS Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../dist/css/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../index.php">TeknoNusantara Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <h3 class="my-3">Detail Produk</h3>
                <div class="card mb-3 mb-3 shadow-lg">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../src/img/<?php echo $p->gambar_produk ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $p->nama_produk ?></h5>
                                <h6 class="card-subtitle mb-2 text-danger">Rp. <?php echo number_format($p->harga_produk) ?></h6>
                                <p class="card-text font-weight-normal"><?php echo nl2br($p->deskripsi_produk) ?></p>
                                <div class="kontak card-footer">
                                    <a href="https://wa.me/6281381842717" target="_blank" class="btn btn-success">
                                        <i class="fab fa-whatsapp me-2"></i>
                                        Beli Via WhatsApp
                                    </a>
                                    <button onclick="goBack()" class="btn btn-danger">
                                        Kembali
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="sticky-footer">
        <div class="container">
            <p class="mb-0">Copyright &copy; TeknoNusantara Shop 2023</p>
        </div>
    </footer>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <!-- Tambahkan script JavaScript Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>