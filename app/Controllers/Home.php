<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'menu' => 'beranda',
            'submenu' => ''
        ];
        return view('home/index', $data);
    }
}
