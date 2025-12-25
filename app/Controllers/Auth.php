<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('/login_view_wafa');
    }

    public function process()
    {
        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        return redirect()->to('/login');
    }
}
