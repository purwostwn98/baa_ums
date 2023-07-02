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
        return view('profil/tentang-kami', $data);
    }
}
