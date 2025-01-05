<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    

    echo "<h1>Terima Kasih, $name!</h1>";
    echo "<p>Pesanan Anda telah diterima. Kami akan menghubungi Anda di email $email atau telepon $phone untuk konfirmasi lebih lanjut.</p>";

  
    unset($_SESSION['cart']);
} else {
    echo "<p>Proses pemesanan gagal. Silakan coba lagi.</p>";
}
?>
