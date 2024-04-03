<?php
session_start();

if(isset($_COOKIE['ingat_saya'])){
    $_SESSION['sudah_login']= true;
    
}

if (!isset($_SESSION['sudah_login'])){
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav style="position: sticky; top: 0; z-index: 1000;" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Kembali</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="form_upload.php">Unggah</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-12 row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="col-md-12 mt-4">
                <h2>"Kucing-kucing lucu siap menemani Anda!"</h2>
            </div>
            <div class="col-md-12 mt-4">
                <?php 
                    include "koneksi.php" ;
                    $data = mysqli_query($koneksi, "SELECT * FROM unggahan order by nama DESC") ;
                    while ($row = mysqli_fetch_array($data)) {
                ?>

                <div class="col-md-12 row mb-5">
                    <div class="col-md-3">
                        <img src="file/<?php echo $row['foto'] ; ?>" style="width: 100%;">
                    </div>
                    <div class="col-md-9">
                        <h2><?php echo $row['nama'] ; ?></h2>
                        <p><?php echo $row['deskripsi'] ; ?></p> <!-- Ubah ke elemen <p> -->
                        <a href="https://wa.me/<?php echo $row['nowa']; ?>" class="btn btn-success mt-4">Hubungi</a>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
