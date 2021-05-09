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
    <div class="site-blocks-cover overlay" style="background-image: url(asset/images/osi-head.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h1 class="text-uppercase" data-aos="fade-up">OSI Layer</h1>
                    <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">
                        The Open Systems Interconnection model is a conceptual model that characterises and standardises the communication functions
                        of a telecommunication or computing system without regard to its underlying internal structure and technology
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="site-section border-bottom bg-light" id="services-section">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-12">
                    <img src="asset/images/osi.png" width="100%">
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('include/script.php') ?>
</body>
</html>