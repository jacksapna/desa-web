<?php
session_start();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Villa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pemesanan Villa</h1>
    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        echo "<h2>Pesanan Anda:</h2><ul>";
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>{$item['villa_name']} - Rp {$item['price']}</li>";
            $total += $item['price'];
        }
        echo "</ul><p><strong>Total: Rp $total</strong></p>";
    } else {
        echo "<p>Keranjang Anda kosong. Silakan tambahkan villa terlebih dahulu.</p>";
    }
    ?>
    
    <form action="pemesanan.php" method="POST">
        <h3>Isi Data Pemesan</h3>
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Nomor Telepon:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <button type="submit" class="btn">Konfirmasi Pemesanan</button>
    </form>
    <a href="cart.php" class="btn">Kembali ke Keranjang</a>
</body>
</html>
