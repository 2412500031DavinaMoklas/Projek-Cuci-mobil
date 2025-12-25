<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function kasir()
    {
        return view('transaksi/kasir_wafa', [
            'layanan' => [
                ['id' => 1, 'nama_layanan' => 'Cuci Biasa'],
                ['id' => 2, 'nama_layanan' => 'Cuci Premium']
            ],
            'petugas' => [
                ['id' => 1, 'nama_petugas' => 'Andi'],
                ['id' => 2, 'nama_petugas' => 'Budi']
            ],
            'nomor_antrian' => 'A015'
        ]);
    }

    public function nota()
    {
        return view('transaksi/nota_wafa', [
            'transaksi' => [
                'nomor_antrian' => 'A015',
                'nama_layanan' => 'Cuci Premium',
                'nama_petugas' => 'Budi',
                'total_bayar' => 50000
            ]
        ]);
    }
}
