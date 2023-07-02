<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h2>Informasi Wisuda </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>Semua informasi terkait wisuda UMS dapat dilihat pada laman <a href="https://wisuda.ums.ac.id">wisuda.ums.ac.id</a> </p>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="<?= base_url(); ?>/images/layanan/ss_wisuda.png" alt="wisuda ums">
                </div> <!-- about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->