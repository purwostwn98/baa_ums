<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h3>Perbaikan Data Diri Mahasiswa</h3><br>
                </div> <!-- section title -->
                <div class="about-cont">
                    <h6>Berikut panduan perbaikan data diri mahasiswa :</h6>
                    <h6><strong>BAGI MAHASISWA YANG SUDAH LULUS :</strong></h6>
                    <p>Mengirimkan scan berikut ke email <strong>khuluq@ums.ac.id</strong> :</p>
                    <div class="privacy-list"><br>
                        <ul>
                            <li>Scan Kartu Tanda Penduduk asli (max 500kB)</li>
                            <li>Scan Akta Lahir asli (max 500kB)</li>
                            <li>Scan Kartu Keluarga asli (max 500kB)</li>
                            <li>Scan Ijazah asli (max 500kB)</li>
                            <li>Scan Transkrip asli (max 500kB)</li>
                            <li>Lampiran Keterangan Perbaikan Data asli (contoh dibawah)</li>
                        </ul>
                    </div><br>
                    <h6><strong>BAGI MAHASISWA YANG BELUM LULUS :</strong></h6>
                    <div class="privacy-list"><br>
                        <ul>
                            <li>Menyerahkan copy ijazah SMA ke BAA</li>
                            <li>Mengirimkan scan berikut ke email khuluq@ums.ac.id :</li>
                            <div class="ollist">
                                <ol>
                                    <li>Scan Kartu Tanda Mahasiswa (KTM) <strong>asli (max 500kB)</strong></li>
                                    <li>Scan Akta Lahir <strong>asli (max 500kB)</strong></li>
                                    <li>Scan Kartu Keluarga <strong>asli (max 500kB)</strong></li>
                                    <li>Lampiran Keterangan Perbaikan Data asli (contoh dibawah)</li>
                                </ol>
                            </div>
                            <a href="<?= base_url(); ?>/lampiran/lampiran-perbaikan-data-diri.pdf" target="_blank"><u>Download Contoh Lampiran Keterangan Perbaikan Data (dalam format *.pdf)</u></a>
                        </ul>
                    </div>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="<?= base_url(); ?>/images/perbaikan-data-diri.jpg" alt="ganti">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->