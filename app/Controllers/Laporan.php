<?php

namespace App\Controllers;

class Laporan extends BaseController
{
    public function transaksi()
    {
        return view('laporan/transaksi_wafa', [
            'laporan' => [
                [
                    'tanggal' => '2025-01-20',
                    'nomor_antrian' => 'A001',
                    'layanan' => 'Cuci Biasa',
                    'petugas' => 'Andi',
                    'total_bayar' => 30000
                ]
            ]
        ]);
    }

    public function petugas()
    {
        return view('laporan/petugas_Wafa', [
            'laporan' => [
                ['nama_petugas' => 'Andi', 'jumlah_mobil' => 10]
            ]
        ]);
    }
}
