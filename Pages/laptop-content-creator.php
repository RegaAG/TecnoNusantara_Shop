<?php
include "../koneksi/koneksi.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TeknoNusantara Shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../dist/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">TeknoNusantara Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../index.php">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="laptop-gaming.php">Laptop Gaming</a></li>
                            <li><a class="dropdown-item" href="laptop-content-creator.php">Laptop Content Creator</a></li>
                            <li><a class="dropdown-item" href="laptop-business.php">Laptop Business</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section-->
    <div id="product">
        <section class="py-5">
            <h3 class=" my-5 text-center fw-bolder">Laptop Gaming</h3>
            <div class="container px-4 px-lg-5 mt-5">
                <form>
                    <div style="max-width: 500px;" class="input-group ms-auto my-3">
                        <input type="text" class="form-control" name="inputpencarian" value="<?php echo isset($_GET['inputpencarian']) ? $_GET['inputpencarian'] : ''; ?>" placeholder="Cari Barang..." autocomplete="off">
                        <button type="submit" name="btncari" class="btn btn-primary mx-1">Cari</button>
                    </div>
                </form>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    if (isset($_GET['inputpencarian']) && $_GET['inputpencarian'] != '') {
                        $where = "AND nama_produk LIKE '%" . $_GET['inputpencarian'] . "%'";
                    } else {
                        $where = "";
                    }
                    $produk = mysqli_query($conn, "SELECT * FROM db_barang WHERE type_produk='Content Creator' $where ");
                    if (mysqli_num_rows($produk) > 0) {
                        while ($p = mysqli_fetch_array($produk)) {
                    ?>
                            <div class="col mb-5">
                                <div class="card shadow shadow-lg h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="../src/img/<?php echo $p['gambar_produk'] ?>" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder"><?php echo $p['nama_produk'] ?></h5>
                                            <!-- Product price-->
                                            <p class="card-text text-danger">Rp. <?php echo number_format($p['harga_produk']) ?></p>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detail-produk.php?id=<?php echo $p['id'] ?>">Buy Now</a></div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; TeknoNusantara Shop 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>