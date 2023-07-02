<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="about-page" class=" pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mt-50">
                    <h2>SK Akademik</h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <div class="row mt-20">
                        <div class="col-md-6">

                            <form class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Pilih Tahun</label>
                                    <select class="form-control mb-20" id="exampleFormControlSelect2" name="tahun">
                                        <option value="" selected>Pilih Tahun</option>
                                        <option value="20222">20222</option>
                                        <option value="20222">20221</option>
                                        <option value="20222">20212</option>
                                        <option value="20222">20211</option>
                                        <option value="20222">20202</option>
                                        <option value="20222">20201</option>
                                        <option value="20222">20192</option>
                                        <option value="20222">20191</option>
                                        <option value="20222">20182</option>
                                        <option value="20222">20181</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jenjang</label>
                                    <select class="form-control mb-20" id="exampleFormControlSelect1">
                                        <option disabled value="" selected>Pilih Jenjang</option>
                                        <option value="S1">S1</option>
                                        <option value="Pascasarjana">Pascasarjana</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Program Studi</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option disabled value="" selected>Pilih Prodi</option>
                                        <option value="S1">Teknik Industri</option>
                                        <option value="D600">Teknik Mesin</option>
                                        <option value="D100">Teknik Mesin</option>
                                        <option value="L200">Teknik Informatika</option>
                                        <option value="A210">Akuntansi</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="ollist mt-0  text-justify">
                                <h4 class="mb-20">SK Akademik 20222 Prodi A210</h4>
                                <div class="privacy-list">
                                    <ul>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2022-2023.jpg"> A210 SK MK.pdf</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2021-2022.jpg"> A210 SK PA.pdf</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2020-2021.jpg"> A210 SK PS.pdf</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2019-2020.png"> LAMP SK PEMBIMBING AKADEMIK.pdf</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2018-2019.jpg"> LAMP SK PEMBIMBING SKRIPSI.pdf</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2017-2018.jpg"> LAMP SK PENGAMPU MK.pdf</a></li>
                                        <li><a target="_blank" href="https://baa.ums.ac.id/akademik/data_kaldik/KA_Tahun2016-2017.jpg"> LAMP SK PENGUJI SKRIPSI.pdf</a></li>
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