<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('login_view');
    }
     
    public function process()
    {
        return redirect()->to(site_url('dashboard'));
    }
}