<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Simpan data ke file atau database
    $data = "Nama: $name\nEmail: $email\nTanggal: $date\nPesan: $message\n\n";
    file_put_contents('messages.txt', $data, FILE_APPEND);

    echo "<h1>Terima Kasih, $name!</h1>";
    echo "<p>Pesan Anda telah kami terima.</p>";
}
?>
