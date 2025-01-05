<?php

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']); 

    
    $items = [
        'villa1' => [
            'title' => 'Villa Asri',
            'description' => 'Villa nyaman dengan suasana asri dan fasilitas lengkap.',
            'price' => 'Rp 1.500.000/malam',
            'image' => 'images/villa1.jpg'
        ],
        'villa2' => [
            'title' => 'Villa Harmoni',
            'description' => 'Villa luas dengan pemandangan alam yang indah.',
            'price' => 'Rp 2.000.000/malam',
            'image' => 'images/villa2.jpg'
        ],
        'alam' => [
            'title' => 'Keindahan Alam',
            'description' => 'Nikmati pemandangan alam Desa Harmoni yang memukau.',
            'price' => 'Gratis',
            'image' => 'images/nature.jpg'
        ],
      
    ];

    if (array_key_exists($id, $items)) {
        $item = $items[$id];
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detail - <?php echo $item['title']; ?></title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <header>
                <h1><?php echo $item['title']; ?></h1>
            </header>
            <main>
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                <p><?php echo $item['description']; ?></p>
                <p><strong>Harga:</strong> <?php echo $item['price']; ?></p>
                <a href="index.php" class="btn">Kembali ke Beranda</a>
            </main>
        </body>
        </html>
        <?php
    } else {
        echo "<p>Item tidak ditemukan.</p>";
    }
    exit;
}
?>
s