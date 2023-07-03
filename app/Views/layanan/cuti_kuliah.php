<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h2>Pengajuan Cuti Kuliah</h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>Cuti/Selang adalah suatu periode dimana seorang mahasiswa tidak mengikuti kegiatan akademik namun tetap terdaftar resmi sebagai mahasiswa dengan ketentuan :</a> </p><br>
                    <div class="privacy-list">
                        <ul>
                            <li>Permohonan cuti akademik dilakukan bersamaan dengan waktu registrasi, maksimal 1 hari efektif sebelum Ujian Tengah Semester</li>
                            <li>Cuti akademik diberikan persemester dan dapat diambil sebanyak-banyaknya 4 semester selama studi</li>
                            <li>Masa cuti akademik akan mengurangi masa studi maksimal</li>
                            <li>Selama cuti akademik mahasiswa dibebaskan dari kewajiban SPP, tetapi wajib registrasi</li>
                        </ul><br>
                    </div>
                    <h5>Berikut panduan pengajuan Cuti Kuliah :</h5>
                    <div class="privacy-list">
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
                    <img src="<?= base_url(); ?>/images/pengajuan-cuti.jpg" alt="wisuda ums">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->