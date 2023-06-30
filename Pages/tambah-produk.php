<?php
include "../koneksi/koneksi.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Produk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="../dist/css/tambah-produk.css"> -->
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
            <div class="card shadow shadow-lg">
                <div class="card-body">
                    <h1 class="card-title text-center">Form Input Data Produk</h1>
                    <form class="fw-bolder mt-3" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaProduk" name="nama" placeholder="Masukkan nama produk" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="hargaProduk" class="form-label">Harga Produk</label>
                            <input type="number" class="form-control" id="hargaProduk" name="harga" placeholder="Masukkan harga produk" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsiProduk" name="deskripsi" rows="3" placeholder="Masukkan deskripsi produk" autocomplete="off" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="typeProduk" class="form-label">Tipe Produk</label>
                            <select class="form-select" id="typeProduk" name="type" required>
                                <option value="">Pilih Type Produk</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Content Creator">Content Creator</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambarProduk" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" id="gambarProduk" name="gambar" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" onclick="goBack()" class="btn btn-danger">Batal</button>
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
                            $query = "INSERT INTO db_barang (nama_produk, harga_produk, deskripsi_produk, type_produk, gambar_produk) VALUES ('$namaProduk', $hargaProduk, '$deskripsiProduk', '$typeProduk', '$namaGambar')";

                            if (mysqli_query($conn, $query)) {
                                echo "<script>alert('Data Berhasil Ditambahkan')</script>";
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
    <script>
        function goBack() {
            window.history.back();
        }

        function formatDeskripsi() {
            var deskripsi = document.getElementById('deskripsiProduk').value;
            deskripsi = deskripsi.replace(/\n/g, "<br>");
            document.getElementById('deskripsiProduk').innerHTML = deskripsi;
        }
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>