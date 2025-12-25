<?= $this->extend('main_view_wafa') ?>

<?= $this->section('content') ?>

<h3 class="mb-4">Nota Transaksi</h3>

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-sm border-0">
            <div class="card-body">

                <div class="mb-3">
                    <strong>Nomor Antrian:</strong><br>
                    <?= $transaksi['nomor_antrian'] ?>
                </div>

                <div class="mb-3">
                    <strong>Nama Layanan:</strong><br>
                    <?= $transaksi['nama_layanan'] ?>
                </div>

                <div class="mb-3">
                    <strong>Nama Petugas:</strong><br>
                    <?= $transaksi['nama_petugas'] ?>
                </div>

                <div class="mb-4">
                    <strong>Total Bayar:</strong><br>
                    <span class="fw-bold text-success">
                        Rp <?= number_format($transaksi['total_bayar'], 0, ',', '.') ?>
                    </span>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-outline-primary">
                        Cetak
                    </a>

                    <a href="<?= site_url('transaksi') ?>" class="btn btn-secondary">
                        Kembali ke Transaksi
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>