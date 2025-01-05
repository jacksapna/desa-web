<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Keranjang Belanja</h1>
    <table>
        <tr>
            <th>Villa</th>
            <th>Harga</th>
        </tr>
        <?php
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            $total = 0;
            foreach ($_SESSION['cart'] as $item) {
                echo "<tr><td>{$item['villa_name']}</td><td>Rp {$item['price']}</td></tr>";
                $total += $item['price'];
            }
            echo "<tr><td>Total</td><td>Rp $total</td></tr>";
        } else {
            echo "<tr><td colspan='2'>Keranjang kosong</td></tr>";
        }
        ?>
    </table>
    <a href="booking.php" class="btn">Lanjutkan ke Pemesanan</a>
    <a href="index.php" class="btn">Kembali ke Beranda</a>
</body>
</html>
