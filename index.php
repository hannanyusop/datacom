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
    <div class="site-blocks-cover overlay" style="background-image: url(asset/images/home.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
                    <p class="mb-5 desc font-weight-bold " data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio soluta eius error.</p>
                    <div data-aos="fade-up" data-aos-delay="100">
                        <a href="member.php" class="btn smoothscroll btn-primary mr-2 mb-2">Our Hardworking Team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('include/script.php') ?>
</body>
</html>