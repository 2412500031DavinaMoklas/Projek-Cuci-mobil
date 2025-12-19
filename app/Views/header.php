<!DOCTYPE html>
<html>
<head>
    <title>Menu Utama</title>
    <link rel="stylesheet" href="<?= base_url('css/w3.css'); ?>">
</head>
<body>
    <div class="w3-bar w3-light-grey">
        <a href="<?= site_url('/') ?>" class="w3-bar-item w3-button">Home</a>

        <div class="w3-dropdown-hover">
            <button class="w3-button">Master</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="barang" class="w3-bar-item w3-button">Barang</a>
                <a href="<?= site_url('pelanggan_2412500031'); ?>" class="w3-bar-item w3-button">Pelanggan</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button">Transaksi</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
              <a href="<?= site_url('penjualan_2412500031'); ?>" class="w3-bar-item w3-button">Nota Penjualan</a>
            </div>
        </div>

    </div>
</body>
</html>
