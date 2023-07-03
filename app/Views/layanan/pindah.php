<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h3>Pindah Program Studi/Perguruan Tinggi Swasta Lain</h3><br>
                </div> <!-- section title -->
                <div class="about-cont">
                    <h6>Berikut panduan pengajuan Pindah Program Studi / Pindah Perguruan Tinggi Swasta Lain :</h6>
                    <div class="privacy-list"><br>
                        <ul>
                            <li>Mahasiswa mendownload form perubahan status melalui laman <a href="https://star.ums.ac.id/" target="_blank">star.ums.ac.id</a> pada menu Pengajuan Surat Perubahan Status</li>
                            <li>Melengkapi data diri dan tanda tangan, serta stempel progdi pada tanda tangan ketua prodi</li>
                            <li>Scan Form Perubahan Status dan upload di pengajuan Layanan BAA melalui laman <a href="https://star.ums.ac.id/" target="_blank">star.ums.ac.id</a>pada menu Pengajuan Surat Perubahan Status</li>
                            <li>Pengajuan berhasil dan silakan konfirmasi ke :</li>
                            <ol class="continuous-list">
                                <li>Biro Administrasi Keuangan -> Validasi bebas administrasi keuangan</li>
                                <li>Perpustakaan -> Validasi bebas pinjaman buku</li>
                                <li>TU Fakultas -> Validasi permohonan cuti/selang studi</li>
                            </ol>
                        </ul>
                    </div>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="<?= base_url(); ?>/images/pindah-pt.jpg" alt="pindah">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->