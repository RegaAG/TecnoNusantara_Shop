<?php
include "../koneksi/koneksi.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin Data Produk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css">

    <!-- CSS Eksternal -->
    <style>
        body {
            background-color: #0D1C33;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center text-light m-5">Data Produk TecnoNusantara Shop</h1>
        <div class="my-3">
            <a href="tambah-produk.php" class="btn btn-primary">Tambah Produk</a>
            <a href="../index.php" class="btn btn-outline-secondary float-right">Logout</a>
            <button class="btn btn-success" onclick="saveAsPDF('report.php')">Cetak Data</button>
        </div>
        <form method="get">
            <div style="max-width: 500px;" class="input-group ms-auto my-3">
                <input type="text" class="form-control" name="inputpencarian" value="<?php echo isset($_GET['inputpencarian']) ? $_GET['inputpencarian'] : ''; ?>" placeholder="Cari Barang..." autocomplete="off">
                <button type="submit" name="btncari" class="btn btn-info mx-2">Cari</button>
                <button type="submit" name="reset" class="btn btn-secondary" onclick="resetInput()">Reset</button>
            </div>
        </form>
        <table class="table table-secondary table-bordered table-striped shadow shadow-lg">
            <thead class="text-center">
                <tr>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Type Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['inputpencarian']) && $_GET['inputpencarian'] != '') {
                    $where = "WHERE nama_produk LIKE '%" . $_GET['inputpencarian'] . "%'";
                } else {
                    $where = "";
                }
                $produk = mysqli_query($conn, "SELECT * FROM db_barang $where ORDER BY id DESC");
                if (mysqli_num_rows($produk) > 0) {

                    while ($p = mysqli_fetch_array($produk)) {
                ?>
                        <tr class="align-middle">
                            <td class="text-center">
                                <img src="../src/img/<?php echo $p['gambar_produk'] ?>" class="rounded" style="width: 100px;">
                            </td>
                            <td><?php echo $p['nama_produk'] ?></td>
                            <td class="text-danger text-center">Rp. <?php echo number_format($p['harga_produk']) ?></td>
                            <td><?php echo $p['type_produk'] ?></td>
                            <td class="text-center">
                                <a href="edit-produk.php?id=<?php echo $p['id'] ?>" class="btn btn-warning  btn-sm my-3">Edit Barang</a>
                                <a href="?hapus=<?php echo $p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus Barang</a>
                            </td>
                        </tr>
                <?php

                    }
                }
                ?>
            </tbody>
        </table>
        <?php
        if (isset($_GET['hapus'])) {
            $id_hapus = $_GET['hapus'];
            $query = mysqli_query($conn, "DELETE FROM db_barang WHERE id = '$id_hapus'");

            if ($query) {
                echo "<script>alert('Produk berhasil dihapus');</script>";
                echo "<script>window.location.href = 'data-produk.php';</script>"; // Ganti 'halaman-berikutnya.php' dengan halaman yang diinginkan setelah penghapusan
            } else {
                echo "<script>alert('Gagal menghapus produk');</script>";
            }
        }
        ?>
    </div>


    <script>
        function resetInput() {
            document.getElementsByName('inputpencarian')[0].value = '';
        }

        function saveAsPDF(url) {
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    const element = document.createElement('div');
                    element.innerHTML = html;

                    html2pdf()
                        .from(element)
                        .save('data_barang.pdf');
                });
        }
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</body>


</html>