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
    <title>Form Edit Data Produk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #0D1C33;
        }

        .card {
            background-color: #BAC6D6;
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Form Edit Data Produk</h1>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" value="<?php echo $p->nama_produk ?>" id="namaProduk" name="nama" placeholder="Masukkan nama produk" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="hargaProduk" class="form-label">Harga Produk</label>
                            <input type="number" class="form-control" value="<?php echo $p->harga_produk ?>" id="hargaProduk" name="harga" placeholder="Masukkan harga produk" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsiProduk" name="deskripsi" rows="2" placeholder="Masukkan deskripsi produk" autocomplete="off"><?php echo $p->deskripsi_produk ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="typeProduk" class="form-label">Tipe Produk</label>
                            <select class="form-select" id="typeProduk" name="type">
                                <option value="">Pilih Type Produk</option>
                                <option value="Gaming" <?php echo ($p->type_produk == 'Gaming') ? 'selected' : ''; ?>>Gaming</option>
                                <option value="ContentCreator" <?php echo ($p->type_produk == 'ContentCreator') ? 'selected' : ''; ?>>Content Creator</option>
                                <option value="Business" <?php echo ($p->type_produk == 'Business') ? 'selected' : ''; ?>>Business</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambarProduk" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" value="<?php echo $p->gambar_produk ?>" id="gambarProduk" name="gambar" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <a href="data-produk.php" class="btn btn-danger">Batal</a>
                    </form>
                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    if (isset($_POST['submit'])) {
                        // Mengambil nilai dari formulir
                        $namaProduk = $_POST['nama'];
                        $hargaProduk = $_POST['harga'];
                        $deskripsiProduk = $_POST['deskripsi'];
                        $typeProduk = $_POST['type'];

                        // Mengupload gambar produk
                        $namaGambar = $_FILES['gambar']['name'];
                        $lokasiGambar = $_FILES['gambar']['tmp_name'];
                        $folderTujuan = '../src/img/'; // Ganti dengan folder tujuan penyimpanan gambar

                        // Pindahkan gambar ke folder tujuan
                        if (move_uploaded_file($lokasiGambar, $folderTujuan . $namaGambar)) {
                            echo "Gambar berhasil diunggah dan disimpan.";

                            // Menyimpan data ke database
                            // Tambahkan kode koneksi ke database di sini
                            $query = "UPDATE db_barang SET 
                            nama_produk = '$namaProduk',
                            harga_produk = $hargaProduk,
                            deskripsi_produk = '$deskripsiProduk',
                            type_produk = '$typeProduk',
                            gambar_produk = '$namaGambar'
                          WHERE id = $p->id";

                            if (mysqli_query($conn, $query)) {
                                echo "<script>alert('Berhasil Ubah Data')</script>";
                                echo "<script>window.location = 'data-produk.php'</script>";
                            } else {
                                echo "Error: " . $query . "<br>" . mysqli_error($conn);
                            }

                            mysqli_close($conn); // Tutup koneksi database setelah selesai
                        } else {
                            echo "Terjadi kesalahan saat mengunggah gambar.";
                        }
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>