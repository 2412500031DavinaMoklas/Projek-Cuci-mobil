<?= $this->extend('main_view_wafa') ?>

<?= $this->section('content') ?>

<h3 class="mb-4">Dashboard</h3>

<div class="row">

    <!-- Total Transaksi -->
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Total Transaksi Hari Ini</h6>
                <h3 class="fw-bold text-primary">
                    <?= $totalTransaksi ?>
                </h3>
            </div>
        </div>
    </div>

    <!-- Total Pendapatan -->
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Total Pendapatan Hari Ini</h6>
                <h3 class="fw-bold text-success">
                    Rp <?= number_format($totalPendapatan, 0, ',', '.') ?>
                </h3>
            </div>
        </div>
    </div>

    <!-- Jumlah Mobil -->
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Jumlah Mobil Dicuci Hari Ini</h6>
                <h3 class="fw-bold text-dark">
                    <?= $jumlahMobil ?>
                </h3>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>