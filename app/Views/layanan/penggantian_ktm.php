<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h3>Pengajuan Penggantian KTM</h3><br>
                </div> <!-- section title -->
                <div class="about-cont">
                    <h6>Berikut Prosedur Pengurusan dan Penggantian Kartu Tanda Mahasiswa (KTM) Hilang/Rusak :</h6>
                    <div class="ollist"><br>
                        <ol>
                            <li>Mahasiswa mengajukan permintaan pembuatan KTM melalui laman <a href="https://star.ums.ac.id/" target="_blank">star.ums.ac.id</a> <strong> menu Layanan BAA -> Pengajuan Pembuatan KTM</strong></li>
                            <li>Melakukan validasi pembayaran ke BAA</li>
                            <div class="privacy-list">
                                <ul>
                                    <li>KTM Hilang -> membawa <strong>Surat Laporan Kehilangan yang dikeluarkan oleh POS Satpam Kampus 1</strong></li>
                                    <li>KTM Rusak -> membawa KTM yang lama</li>
                                </ul>
                            </div>
                            <li>Pengambilan KTM dapat diambil di loket Biro Administrasi Akademik</li>
                        </ol>
                    </div>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="<?= base_url(); ?>/images/penggantian-ktm.jpg" alt="ganti">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->