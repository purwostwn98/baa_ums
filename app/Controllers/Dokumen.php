<?php

namespace App\Controllers;

class Dokumen extends BaseController
{
    public function buku_akademik()
    {
        $data = [
            'menu' => 'dokumen',
            'submenu' => 'buku-akademik'
        ];
        return view('dokumen/buku-akademik', $data);
    }

    public function kalender_akademik()
    {
        $data = [
            'menu' => 'dokumen',
            'submenu' => 'kalender-akademik'
        ];
        return view('dokumen/kalender-akademik', $data);
    }

    public function sk_akademik()
    {
        $data = [
            'menu' => 'dokumen',
            'submenu' => 'sk-akademik'
        ];
        return view('dokumen/sk-akademik', $data);
    }

    public function jadwal_ujian()
    {
        $data = [
            'menu' => 'dokumen',
            'submenu' => 'jadwal-ujian'
        ];
        return view('dokumen/jadwal-ujian', $data);
    }
}
