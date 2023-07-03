<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mt-50">
                    <h2>Jadwal Ujian</h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <div class="row mt-20">
                        <div class="col-md-6">
                            <form class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Pilih Jadwal</label>
                                    <select class="form-control mb-20" id="exampleFormControlSelect2" name="Jadwal">
                                        <option value="" selected>Pilih Jadwal</option>
                                        <option value="20222">UAS 20222</option>
                                        <option value="20222">UTS 20221</option>
                                        <option value="20222">UAS 20212</option>
                                        <option value="20222">UTS 20211</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="ollist mt-0  text-justify">
                                <h4 class="mb-20">Jadwal UTS 2022</h4>
                                <div class="privacy-list">
                                    <ul>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_jadwal_ujian/Jadwal_UTS_20222/A210.docx">Program Studi Akuntansi</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_jadwal_ujian/Jadwal_UTS_20222/D600.docx">Program Studi Teknik Industri</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_jadwal_ujian/Jadwal_UTS_20222/L200.docx">Program Studi Teknik Informatika</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- about cont -->
        </div>

    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->