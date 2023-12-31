<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/layanan', 'Layanan::layanan');
$routes->get('/layanan/krs', 'Layanan::krs');
$routes->get('/layanan/wisuda', 'Layanan::wisuda');
$routes->get('/layanan/aktif_kuliah', 'Layanan::aktif_kuliah');
$routes->get('/layanan/cuti_kuliah', 'Layanan::cuti_kuliah');
$routes->get('/layanan/pindah', 'Layanan::pindah');
$routes->get('/layanan/ganti', 'Layanan::ganti');
$routes->get('/layanan/perbaikan', 'Layanan::perbaikan_data');

$routes->get('/dokumen/buku-akademik', 'Dokumen::buku_akademik');
$routes->get('/dokumen/kalender-akademik', 'Dokumen::kalender_akademik');
$routes->get('/dokumen/sk-akademik', 'Dokumen::sk_akademik');
$routes->get('/dokumen/jadwal-ujian', 'Dokumen::jadwal_ujian');

$routes->get('/profil/tentang_kami', 'Profil::tentang_kami');
$routes->get('/profil/struktur_organisasi', 'Profil::struktur_organisasi');
$routes->get('/profil/program_studi', 'Profil::program_studi');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
