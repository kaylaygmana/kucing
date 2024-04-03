<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];

    $domisili = $_POST['domisili'];
    $siap = isset($_POST['siap']) ? 'Ya' : 'Tidak'; // Menggunakan ternary operator untuk menyesuaikan nilai 'siap'

    $sql = "INSERT INTO anggota (username, pass, nama, domisili, siap) 
            VALUES ('$username','$pass','$nama', '$domisili','$siap')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "<script>alert('Pendaftaran berhasil')</script>";
        echo "<script>window.location.href = '/miniployek2/registrasi.php'</script>";
    } else {
        echo "<script>alert('Pendaftaran Gagal: " . mysqli_error($koneksi) . "')</script>";
        echo "<script>window.location.reload()</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js.js"></script>

<style>
   body::-webkit-scrollbar {
            width: 0; /* Ukuran scrollbar horizontal */
            height: 0; /* Ukuran scrollbar vertical */
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
    <div style="text-align: center; background-color: rgb(81, 96, 81); color: white; margin-bottom: 10px; padding:10px">
        <span class="h1">REGISTRASI</span> <br> <span class="h5">Ayo bergabung dengan kami!</span>
    </div>
    
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <form action="" style="width: 45%; margin-left:250px; margin-bottom:10px" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input style="max-width: 600px;" type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
                <div id="usernameHelp" class="form-text">Username akan muncul sebagai nama anda pada situs ini</div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input style="max-width: 600px;" type="password" class="form-control" id="pass" name="pass" aria-describedby="passHelp">
                <div id="passHelp" class="form-text">Password akan digunakan untuk anda login pada situs ini lagi</div>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama lengkap</label>
                <input style="max-width: 600px;" type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp">
            </div>

            <label for="domisili" class="form-label">Domisili</label>
            <input style="max-width: 600px;" class="form-control" list="datalistOptions" id="domisili" name="domisili" placeholder="Tekan untuk mencari...">
            <datalist id="datalistOptions">
                <option value="Samarinda Utara">
                <option value="Samarinda Ulu">
                <option value="Samarinda Timur">
                <option value="Samarinda Barat">
                <option value="Samarinda Tengah">
            </datalist>

            <div id="popupTrigger" style="cursor: pointer; margin-top: 10px;" onclick="tampilkanSekret()">Klik di sini untuk menampilkan S&K</div>
            <ul id="popupText" style="display: none;">
                <li><strong>Membayar uang pemeliharaan</strong><br> Kami mewajibkan seluruh anggota untuk membayar uang pemeliharaan yang 100% akan kami gunakan untuk keperluan kucing</li>
                <li><strong>Komitmen terhadap Kesejahteraan Kucing</strong><br> Setiap anggota diharapkan memiliki komitmen yang kuat terhadap kesejahteraan kucing. Ini termasuk memberikan perawatan yang baik, memastikan kesehatan mereka, dan memberikan lingkungan yang aman dan nyaman.</li>
                <li><strong>Komitmen terhadap Etika</strong><br> Kami menghargai etika dalam perlakuan terhadap hewan. Setiap anggota diharapkan untuk tidak melakukan tindakan kekerasan, penelantaran, atau eksploitasi terhadap kucing.</li>
                <li><strong>Partisipasi dalam Kegiatan Komunitas</strong><br> Kami mendorong setiap anggota untuk aktif berpartisipasi dalam kegiatan komunitas, seperti kunjungan ke shelter, donasi makanan kucing, atau mengadopsi kucing yang membutuhkan.</li>
                <li><strong>Hormat dan Keterbukaan</strong><br> Kami mendorong lingkungan yang penuh hormat dan keterbukaan di antara anggota. Hindari perilaku yang dapat menyinggung atau merendahkan anggota lain.</li>
                <li><strong>Penyalahgunaan dan Pelanggaran</strong><br> Setiap bentuk penyalahgunaan atau pelanggaran terhadap syarat dan ketentuan komunitas akan ditindaklanjuti sesuai dengan kebijakan yang berlaku. Ini termasuk tindakan seperti penggunaan bahasa kasar, penyebaran informasi palsu, atau perilaku tidak etis lainnya.</li>
                <li><strong>Kebijakan Privasi</strong><br> Kami menghargai privasi setiap anggota. Informasi pribadi yang dibagikan dalam komunitas harus dijaga kerahasiaannya dan tidak boleh disalahgunakan untuk kepentingan pribadi atau komersial.</li>
                <button id="closeButton" style="display: none;">Tutup</button>
            </ul>
            <div class="mb-3 form-check" style="display: flex; justify-content: space-between; align-items: center;">
                <div style="margin-top: 15px;">
                    <input type="checkbox" class="form-check-input" id="siap" name="siap">
                    <label class="form-check-label" for="siap">Saya telah membaca S&K</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
        <img src="https://lh3.googleusercontent.com/d/1KQMfo_en3-oDUuK-qrgQFJR2AJ8ia-eo=s220?authuser=0" alt="GIF" style="width: 25%; margin-right: 80px;margin-top: 50px; margin-bottom: 50px;">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
