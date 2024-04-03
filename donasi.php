<?php
// Pastikan formulir di-submit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tentukan direktori tempat menyimpan file yang diunggah
    $target_dir = "buktitf/";
    
    // Membuat nama file baru dengan menggunakan waktu unggah untuk menghindari duplikasi nama file
    $foto = time() . '_' . basename($_FILES["bukti"]["name"]);
    
    // Path lengkap untuk file yang disimpan
    $target_file = $target_dir . $foto;
    
    // Periksa apakah file yang diunggah adalah gambar atau bukan
    $check = getimagesize($_FILES["bukti"]["tmp_name"]);
    if($check !== false) {
        // File adalah gambar, bisa dilanjutkan dengan proses upload
        if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars( $foto). " berhasil diunggah.";

        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    } else {
        echo "File yang diunggah bukan merupakan gambar.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            /* max-width: 800px; */
            margin: 20px auto;
            /* padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        h1 {
            text-align: center;
        }
        .donation-info {
            margin-bottom: 20px;
        }
        .donation-info h2 {
            margin-bottom: 10px;
        }
        .bank-details {
            margin-bottom: 20px;
        }
        .bank-details ul {
            list-style: none;
            padding: 0;
        }
        .bank-details li {
            margin-bottom: 10px;
        }
        .bank-details li span {
            font-weight: bold;
            margin-right: 10px;
        }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
        <span class="h1">DONASI</span> <br> <span class="h5">Mari bantu kami tingkatkan kualitas shelter!</span>
   
    </div>
    </div>
    <div class="container">
        <div class="donation-info">
            <p>Silakan pilih salah satu nomor rekening di bawah ini untuk melakukan donasi:</p>
        </div>
        
        <div class="bank-details">
            <h2>Informasi Rekening Bank</h2>
            <ul>
                <li>
                    <span>Bank ABC:</span> 1234567890 (a.n. Donasi ABC)
                </li>
                <li>
                    <span>Bank XYZ:</span> 0987654321 (a.n. Donasi XYZ)
                </li>
                <li>
                    <span>Bank 123:</span> 9876543210 (a.n. Donasi 123)
                </li>
            </ul>
        </div>      
        <p>Setelah melakukan transfer, mohon untuk mengirimkan bukti transfer agar dapat kami verifikasi.<br> Terima kasih atas kontribusinya!</p>
        <div class="form-group" style="margin: 30px 50px 10px 10px;">  
        <form enctype="multipart/form-data" method="post" action="donasi.php">
                <label for="bukti">Upload Bukti Donasi:</label>
                <input type="file" id="bukti" name="bukti" accept=".jpg, .jpeg, .png, .pdf" required>
            </div>
            <div class="form-group" style="margin-left: 10px; margin-bottom:10px">
                <input type="submit" value="Kirim">
            </div>
            <img src="https://lh3.googleusercontent.com/d/17f2Yx8DcK1QgYxcIWQj9ZPAtG1vvQ4GB=s220?authuser=0" 
     style="margin-left: 700px; margin-top: -185px; width: 40%;" alt="GIF">

    </form>
    </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-oc5w1I1FmobXK2ud7XHPlzU8h74jjj1lGevcZ1n8+50=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
