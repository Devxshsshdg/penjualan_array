<?php
// COMMIT 1 - SETUP AWAL POLGAN MART
// Tanpa kode barang, hanya nama, harga, kategori
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLGAN MART</title>
    <style>
        /* COMMIT 1 - CSS DASAR */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg,rgb(223, 151, 207) 0%,rgb(223, 164, 213) 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg,rgb(204, 149, 177), #34495e);
            color: white;
            text-align: center;
            padding: 25px;
            border-bottom: 5px solidrgb(219, 173, 168);
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .header .subtitle {
            font-size: 1.2em;
            opacity: 0.9;
        }
        
        .content {
            padding: 30px;
        }
        
        .section {
            margin-bottom: 30px;
            padding: 20px;
            border: 2px solid #ecf0f1;
            border-radius: 10px;
            background: #f8f9fa;
        }
        
        .section-title {
            color: #2c3e50;
            font-size: 1.5em;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .product-card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #3498db;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .product-name {
            font-weight: bold;
            color: #2c3e50;
            margin: 5px 0;
            font-size: 1.1em;
        }
        
        .product-price {
            color: #27ae60;
            font-weight: bold;
            font-size: 1.1em;
        }
        
        .product-category {
            font-size: 0.8em;
            color: #7f8c8d;
            margin-top: 5px;
            padding: 3px 8px;
            background: #ecf0f1;
            border-radius: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏪 POLGAN MART</h1>
            <div class="subtitle">Toko Serba Ada - Harga Terjangkau</div>
        </div>
        
        <div class="content">
            <?php
            // Array multidimensi tanpa kode barang [nama, harga, kategori]
            $barang = [
                ["BUKU TULIS", 5000, "Alat Tulis"],
                ["PENSIL 2B", 2000, "Alat Tulis"],
                ["PULPEN STANDARD", 1500, "Alat Tulis"],
                ["PENGGARIS 30CM", 3000, "Alat Tulis"],
                ["SPIDOL WHITEBOARD", 7000, "Alat Tulis"]
            ];
            ?>
            
            <div class="section">
                <div class="section-title">
                     DAFTAR BARANG POLGAN MART
                </div>
                <div class="product-grid">
                    <?php foreach ($barang as $item): ?>
                    <div class="product-card">
                        <div class="product-name"><?= $item[0] ?></div>
                        <div class="product-price">Rp <?= number_format($item[1], 0, ',', '.') ?></div>
                        <div class="product-category"><?= $item[2] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>