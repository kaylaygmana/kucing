<?php
// Periksa apakah parameter notlp ada di URL
if(isset($_GET['notlp'])) {
    $nomor_telepon = $_GET['notlp'];
    echo "Nomor Telepon: $nomor_telepon"; // Tampilkan nomor telepon
} else {
    echo "Nomor telepon tidak tersedia.";
}
?>
