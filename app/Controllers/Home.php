<?php

namespace App\Controllers;

use App\Models\basemodel;//ini di isi model

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
        //return redirect()->to(site_url('i')); masi kosong
    }
}
