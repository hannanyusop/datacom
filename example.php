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
                    <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
                    <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio soluta eius error.</p>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#about-section" class="mouse smoothscroll">
            <span class="mouse-icon">
            <span class="mouse-wheel"></span>
            </span>
        </a>
    </div>
    <?php include('include/footer.php') ?>
</div>
<?php include('include/script.php') ?>
</body>
</html>