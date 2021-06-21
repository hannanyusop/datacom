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
    <div class="site-blocks-cover overlay" style="background-image: url(asset/images/upload/home.svg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase text-dark" data-aos="fade-up">Project</h1>
                    <p class="mb-5 desc font-weight-bold text-dark" data-aos="fade-up" data-aos-delay="100">
                        DATA COMMUNICATION AND NETWORKING
                    </p>
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