<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h2>Panduan KRS Online </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>Pengisian KRS ONLINE dapat dilakukan melalui laman STAR UMS <a href="https://myakademik.ums.ac.id">(https://star.ums.ac.id/)</a> sesuai jadwal yang ditentukan pada setiap jeda semester </p>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="<?= base_url(); ?>/images/layanan/krs_online.png" alt="About">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->