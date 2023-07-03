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
        return view('layanan/cuti_kuliah', $data);
    }
    public function pindah()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/pindah', $data);
    }
    public function ganti()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/penggantian_ktm', $data);
    }

    public function perbaikan_data()
    {
        $data = [
            'menu' => 'layanan',
            'submenu' => ''
        ];
        return view('layanan/perbaikan_data', $data);
    }
}
