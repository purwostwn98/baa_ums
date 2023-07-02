<?php

namespace App\Controllers;

class Layanan extends BaseController
{
    public function layanan()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/layanan', $data);
    }

    public function krs()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/krs', $data);
    }
    public function wisuda()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/wisuda', $data);
    }
    public function aktif_kuliah()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/aktif_kuliah', $data);
    }
    public function cuti_kuliah()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/aktif_kuliah', $data);
    }
}
