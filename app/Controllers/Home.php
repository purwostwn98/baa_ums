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

    public function kontak()
    {
        $data = [
            'menu' => 'kontak',
            'submenu' => ''
        ];
        return view('home/kontak', $data);
    }
}
