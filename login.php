<?php
require 'koneksi.php';
$error = "";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $query = "SELECT * FROM anggota WHERE username=? AND pass=?";
    $stmt = mysqli_prepare($koneksi, $query);
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $pass);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['sudah_login'] = true;
            $_SESSION['username'] = $username; // Set sesi username setelah login berhasil

            if(isset($_POST['ingatSaya'])){
                setcookie(
                    'ingat_saya',
                    'true',
                    time() + 10, // 10 detik
                    '/'
                );
            }
            
            // Periksa apakah pengguna adalah admin
            if ($username == 'admin') {
                $_SESSION['is_admin'] = true; // Set sesi is_admin jika pengguna adalah admin
            } else {
                $_SESSION['is_admin'] = false; // Set sesi is_admin jika pengguna bukan admin
            }

            header("Location: adopsi.php");
            exit();
        } else {
            $error = "Username atau password salah.";
        }
    } else {
        $error = "Kesalahan database: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body::-webkit-scrollbar {
            width: 0; /* Ukuran scrollbar horizontal */
            height: 0; /* Ukuran scrollbar vertical */
        }
    .navbar {
            position: sticky;
            top: 0;
            z-index: 1001;
            background-color: rgba(255, 255, 255, 0); 
        }

    .navbar-nav .nav-link.active:hover {
        color: #fff; 
        background-color: rgb(81, 96, 81); 
        transition: all 0.5s ease; 
    }


</style>
</head>
<body>
 <!-- navigasi -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php#program-kerja">Program Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php#shelter">Shelter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php#kalender">Jadwal kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="adopsi.php">Adopsi kucing</a>
                </li>
        </div>
    </div>
</nav>
<div style="text-align: center; background-color: rgb(81, 96, 81); color: white; padding:10px;">
        <span class="h1">LOGIN</span> <br> <span class="h5">adopsi kucing sekarang!</span>
    </div>
    
    <div class="container d-flex justify-content-center align-items-center" style="height: 76.5vh; background-color: #90AD90;">
    <form style="max-width:35%"  class="px-4 py-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input"type="checkbox"value="true" name ="ingatSaya" id = "ingatSaya">
            <label class = "form-check-label" for="ingatSaya">
                Ingat saya 
            </label> 
            <div class="container text-center mt-3">
            <a style="margin: 20px; text-decoration: underline; text-align:center;" class="dropdown-item" href="registrasi.php">Tidak punya akun? Klik disini</a>
        </div>
        <button type="submit" style="background-color: rgb(81, 96, 81);  margin-left:250px" class="btn btn-primary">Masuk</button>
        <?php if(!empty($error)) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $error; ?>
            </div>
        <?php } ?>
    </form>
    <img src="bg-img/gifsnack.gif" alt="GIF" style="width: 85%; margin-left: 400px; margin-top:-250px">
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-oc5w1I1FmobXK2ud7XHPlzU8h74jjj1lGevcZ1n8+50=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>