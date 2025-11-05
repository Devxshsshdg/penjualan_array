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
        /* CSS Baru untuk Commit 2 */
        .transaction-item {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid rgb(219, 173, 168);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .item-name {
            font-weight: bold;
            color: #2c3e50;
            font-size: 1.1em;
        }
        
        .item-details {
            color: #7f8c8d;
            margin: 5px 0;
        }
        
        .item-total {
            color: #27ae60;
            font-weight: bold;
            font-size: 1.1em;
        }
        .total-box {
            margin-top: 20px;
            padding: 15px;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
            font-size: 1.2em;
        }
        .receipt {
            background: white;
            border: 2px dashed #bdc3c7;
            border-radius: 10px;
            padding: 25px;
            margin-top: 20px;
            font-family: 'Courier New', monospace;
        }
        
        .receipt-header {
            text-align: center;
            border-bottom: 2px solid rgb(219, 173, 168);
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        
        .receipt-title {
            font-size: 1.8em;
            font-weight: bold;
            color: #2c3e50;
        }
        
        .receipt-info {
            display: flex;
            justify-content: space-between;
            margin: 8px 0;
            font-size: 0.9em;
        }
        
        .receipt-items {
            margin: 15px 0;
        }
        
        .receipt-item {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
            padding: 3px 0;
        }
        
        .receipt-divider {
            border-top: 1px dashed #7f8c8d;
            margin: 10px 0;
        }
        
        .receipt-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 1.1em;
            background: #ecf0f1;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .receipt-footer {
            text-align: center;
            margin-top: 20px;
            color: #7f8c8d;
            font-style: italic;
        }
        
        .print-btn {
            background: linear-gradient(135deg, rgb(219, 173, 168), rgb(204, 149, 177));
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
        }
        
        .print-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(219, 173, 168, 0.4);
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
    <?php

?>

   
            
            
           

            <!-- COMMIT 2 - LOGIKA PEMBELIAN -->
            <?php
            $pembelian = [];
            $grand_total = 0;
            $jumlah_item_dibeli = rand(2, 4);

            for ($i = 0; $i < $jumlah_item_dibeli; $i++) {
                $random_barang = rand(0, 4);
                $random_jumlah = rand(1, 3);
                $total_item = $barang[$random_barang][1] * $random_jumlah;
                $grand_total += $total_item;
                
                $pembelian[] = [
                    'nama' => $barang[$random_barang][0],
                    'harga' => $barang[$random_barang][1],
                    'jumlah' => $random_jumlah,
                    'total' => $total_item
                ];
            }
            ?>

            <div class="section">
                <div class="section-title"> DETAIL PEMBELIAN</div>
                
                <?php foreach ($pembelian as $item): ?>
                <div class="transaction-item">
                    <div class="item-name"><?= $item['nama'] ?></div>
                    <div class="item-details">
                        <?= $item['jumlah'] ?> pcs × Rp <?= number_format($item['harga'], 0, ',', '.') ?>
                    </div>
                    <div class="item-total">Rp <?= number_format($item['total'], 0, ',', '.') ?></div>
                </div>
                <?php endforeach; ?>

                <div style="margin-top: 20px; padding: 15px; background: #2ecc71; color: white; border-radius: 8px; text-align: center;">
                    <strong>TOTAL: Rp <?= number_format($grand_total, 0, ',', '.') ?></strong>
                </div>
            </div>
        </div>
    </div>

<!-- COMMIT 4: Struk Belanja -->
<div class="section">
                <div class="section-title">🧾 STRUK BELANJA</div>
                
                <div class="receipt">
                    <div class="receipt-header">
                        <div class="receipt-title">POLGAN MART</div>
                        <div>Toko Serba Ada</div>
                    </div>
                    
                    <div class="receipt-info">
                        <span>No. Transaksi:</span>
                        <span><?= $transaction_id ?></span>
                    </div>
                    <div class="receipt-info">
                        <span>Tanggal:</span>
                        <span><?= $current_date ?></span>
                    </div>
                    <div class="receipt-info">
                        <span>Kasir:</span>
                        <span>System Auto</span>
                    </div>
                    
                    <div class="receipt-divider"></div>
                    
                    <div class="receipt-items">
                        <?php foreach ($pembelian as $item): ?>
                        <div class="receipt-item">
                            <span><?= $item['nama'] ?> x<?= $item['jumlah'] ?></span>
                            <span>Rp <?= number_format($item['total'], 0, ',', '.') ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="receipt-divider"></div>
                    
                    <div class="receipt-total">
                        <span>TOTAL:</span>
                        <span>Rp <?= number_format($grand_total, 0, ',', '.') ?></span>
                    </div>
                    
                    <div class="receipt-info">
                        <span>Items:</span>
                        <span><?= $total_quantity ?> pcs</span>
                    </div>
                    
                    <div class="receipt-footer">
                        Terima kasih atas kunjungan Anda!<br>
                        *** Barang yang sudah dibeli tidak dapat ditukar ***
                    </div>
                </div>
                
                        </div>
        </div>
    </div>
</body>
</html>