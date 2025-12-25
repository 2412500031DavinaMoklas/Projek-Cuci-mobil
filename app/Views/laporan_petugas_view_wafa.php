<?= $this->extend('main_wafa') ?>

<?= $this->section('content') ?>

<h3 class="mb-4">Laporan Petugas</h3>

<!-- Filter Tanggal -->
<div class="card mb-4 shadow-sm border-0">
    <div class="card-body">
        <form method="get" action="">

            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label">Dari Tanggal</label>
                    <input type="date" name="dari_tanggal" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Sampai Tanggal</label>
                    <input type="date" name="sampai_tanggal" class="form-control">
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">
                        Filter
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

<!-- Tabel Laporan Petugas -->
<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="d-flex justify-content-end mb-3">
            <a href="#" class="btn btn-outline-danger">
                Cetak PDF
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr class="text-center">
                        <th>Nama Petugas</th>
                        <th>Jumlah Mobil Dicuci</th>
                    </tr>
                </thead>
                <tbody>

                <?php if (!empty($laporan)): ?>
                    <?php foreach ($laporan as $row): ?>
                        <tr>
                            <td><?= $row['nama_petugas'] ?></td>
                            <td class="text-center">
                                <?= $row['jumlah_mobil'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2" class="text-center text-muted">
                            Data tidak tersedia
                        </td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?= $this->endSection() ?>