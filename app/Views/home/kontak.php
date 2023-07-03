<?= $this->extend("/theme/template.php"); ?>
<?= $this->section("isi_konten"); ?>

<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h5>Kontak kami</h5>
                        <h2>Saran dan Masukan</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form id="contact-form" action="contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea name="message" placeholder="Message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button type="submit" class="main-btn">Send</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            <div class="col-lg-5">
                <div class="contact-address mt-30">
                    <ul>
                        <li>
                            <div class="single-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>
                                        Gedung Induk Siti Walidah - Lantai 2 <br>
                                        Jl. A. Yani Tromol Pos 1 Kartasura, Pabelan, Kartasura, Sukoharjo 57169, Jawa Tengah, Indonesia
                                    </p>
                                </div>
                            </div> <!-- single address -->
                        </li>
                        <li>
                            <div class="single-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+6271 717417 ext 1173; 1139</p>
                                    <p>+6287833705854 (WhatsApp)</p>
                                </div>
                            </div> <!-- single address -->
                        </li>
                        <li>
                            <div class="single-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>baa@ums.ac.id</p>
                                </div>
                            </div> <!-- single address -->
                        </li>
                    </ul>
                </div> <!-- contact address -->
                <div class="map mt-30">
                    <div id="contact-map"></div>
                </div> <!-- map -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<?= $this->endSection(); ?>
<!--====== PATNAR LOGO PART ENDS ======-->