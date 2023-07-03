<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function tentang_kami()
    {
        $data = [
            'menu' => 'profil',
            'submenu' => 'tentang-kami'
        ];
        return view('/profil/tentang_kami', $data);
    }
    public function struktur_organisasi()
    {
        $data = [
            'menu' => 'profil',
            'submenu' => 'struktur_organisasi'
        ];
        return view('/profil/struktur_organisasi', $data);
    }
    public function program_studi()
    {
        $data = [
            'menu' => 'profil',
            'submenu' => 'program_studi'
        ];
        return view('/profil/program_studi', $data);
    }
}
