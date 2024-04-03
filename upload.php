<?php 
    include "koneksi.php";

    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $nama = $_POST['nama'];
    $nowa = $_POST['nowa'];

    // Ubah nomor WhatsApp jika dimulai dengan '08' menjadi '+62'
    if (substr($nowa, 0, 2) == '08') {
        $nowa = '+628' . substr($nowa, 2);
    }

    move_uploaded_file($file_tmp, 'file/'.$foto);

    $query = "INSERT INTO unggahan (nama, foto, nowa) VALUES ('$nama', '$foto', '$nowa')";

    mysqli_query($koneksi, $query) or die("SQL Error " . mysqli_error());

    header('location:adopsi.php');
?>
