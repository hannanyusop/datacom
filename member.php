<!doctype html>
<html lang="en">
<?php include('include/head.php'); ?>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="site-wrap">
    <?php include('include/topbar.php') ?>
    <div class="site-blocks-cover overlay" style="background-image: url(asset/images/hero_2.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Our Team</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>

                </div>
            </div>
        </div>
        <a href="#about-section" class="mouse smoothscroll">
            <span class="mouse-icon">
            <span class="mouse-wheel"></span>
            </span>
        </a>
    </div>
    <section class="site-section border-bottom" id="team-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-8 text-center">
                                 </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                    <div class="team-member">
                        <figure>
                            <img src="asset/images/hannan.PNG" alt="Image" class="img-fluid">
<!--                            <img src="asset/images/person_5.jpg" alt="Image" class="img-fluid">-->
                        </figure>
                        <div class="p-3">
                            <h3>ABDUL HANNAN</h3>
                            <span class="position">B031910175</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <figure>
<!--                            <img src="asset/images/person_6.jpg" alt="Image" class="img-fluid">-->
                            <img src="asset/images/azly.PNG" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3>MOHD AZLY</h3>
                            <span class="position">B031910235</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <figure>
<!--                            <img src="asset/images/person_7.jpg" alt="Image" class="img-fluid">-->
                            <img src="asset/images/aisyah%20.PNG" alt="Image" class="img-fluid">
                        </figure>
                        <div class="p-3">
                            <h3>NURUL AISHAH</h3>
                            <span class="position">B031910219</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('include/script.php') ?>
</body>
</html>