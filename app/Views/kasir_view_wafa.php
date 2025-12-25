<?= $this->extend('main_view_wafa') ?>

<?= $this->section('content') ?>

<h3 class="mb-4">Transaksi Kasir</h3>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <!-- Alert Promo (Hidden by Default) -->
        <div class="alert alert-success d-none" role="alert">
            Member berhak klaim 7x cuci gratis
        </div>

        <form method="post" action="<?= site_url('transaksi/simpan') ?>">

            <!-- Nomor Member -->
            <div class="mb-3">
                <label class="form-label">Nomor Member (Opsional)</label>
                <input type="text" name="nomor_member" class="form-control">
            </div>

            <!-- Layanan -->
            <div class="mb-3">
                <label class="form-label">Pilih Layanan</label>
                <select name="layanan_id" class="form-select" required>
                    <option value="">-- Pilih Layanan --</option>
                    <?php foreach ($layanan as $item): ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_layanan'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Petugas -->
            <div class="mb-3">
                <label class="form-label">Pilih Petugas</label>
                <select name="petugas_id" class="form-select" required>
                    <option value="">-- Pilih Petugas --</option>
                    <?php foreach ($petugas as $p): ?>
                        <option value="<?= $p['id'] ?>">
                            <?= $p['nama_petugas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Promo -->
            <div class="mb-3">
                <label class="form-label d-block">Promo</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="promo" value="ya">
                    <label class="form-check-label">
                        Gunakan Promo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="promo" value="tidak" checked>
                    <label class="form-check-label">
                        Tidak Gunakan Promo
                    </label>
                </div>
            </div>

            <!-- Hidden Nomor Antrian -->
            <input type="hidden" name="nomor_antrian" value="<?= $nomor_antrian ?? '' ?>">

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">
                Simpan Transaksi
            </button>

        </form>

    </div>
</div>

<?= $this->endSection() ?>