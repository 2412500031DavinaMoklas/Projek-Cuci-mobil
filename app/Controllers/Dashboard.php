<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('/dashboard_view', [
            'totalTransaksi' => 12,
            'totalPendapatan' => 600000,
            'jumlahMobil' => 10
        ]);
    }
}
