<?php
include "../koneksi/koneksi.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tabel Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered border-dark">
            <thead class="text-center">
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Type Produk</th>
                </tr>
            </thead>
            <?php
            $produk = mysqli_query($conn, "SELECT * FROM db_barang $where ORDER BY id DESC");
            if (mysqli_num_rows($produk) > 0) {
                $no = 1;
                while ($p = mysqli_fetch_array($produk)) {
            ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><?php echo $no; ?></td>
                            <td><?php echo $p['nama_produk'] ?></td>
                            <td>Rp. <?php echo number_format($p['harga_produk']) ?></td>
                            <td><?php echo nl2br($p['deskripsi_produk']) ?></td>
                            <td><?php echo $p['type_produk'] ?></td>
                        </tr>
                    </tbody>
            <?php
                    $no++;
                }
            }
            ?>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>