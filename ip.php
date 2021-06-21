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
    <div class="site-blocks-cover overlay" style="background-image: url(asset/images/upload/ip.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">TCP/IP Setting</h2>
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
            <div class="row mb-5">
                <div class="col-md-8">

                    <h4>Using Terminal</h4>
                    <div class="m-2">
                        <h6>1.	Search command prompt at button start. Open CMD and type ipconfig/all after that enter</h6>
                        <code><mark>ipconfig/all</mark></code>
                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/1.png" width="500px">
                            <p class="font-weight-light">Diagram 1</p>
                        </div>

                    </div>

                    <div class="m-2">
                        <h6>2. The details</h6>
                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/2.png" width="500px">
                            <p class="font-weight-light">Diagram 2</p>
                        </div>

                    </div>


                    <hr>
                    <h4>Using Windows GUI</h4>
                    <div class="m-2">
                        <h6>1.	Setting TCP/IP by using Control Panel</h6>
                        <h6>2.	Clicked on Network and internet</h6>
                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/3.png" width="500px">
                            <p class="font-weight-light">Diagram 3</p>
                        </div>

                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/4.png" width="500px">
                            <p class="font-weight-light">Diagram 4</p>
                        </div>


                    </div>

                    <div class="m-2">
                        <h6>3.	Clicked on the Network and Sharing Center</h6>
                        <h6>4.	Clicked at the Change adapter and setting option </h6>
                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/5.png" width="300px">
                            <p class="font-weight-light">Diagram 5</p>
                        </div>


                        <h6>5.	Right click at Wi-Fi and clicked properties</h6>
                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/6.png" width="300px">
                            <p class="font-weight-light">Diagram 6</p>
                        </div>


                        <h6>6.	Search for Internet Protocol Version 4 (IPv4) and clicked properties</h6>
                        <h6>7.	Click at the check box “use the following IP address”</h6>
                        <h6>8.	Set the IP address <mark>192.168.8.160</mark> and the subnet automatic appear</h6>
                        <h6>9.	Set default gateway <mark>192.168.8.161</mark></h6>
                        <h6>10.	Select check box “use the following DNS server address”</h6>
                        <h6>11.	Set the preferred DNS Server <mark>192.168.100.75</mark></h6>
                        <h6>12.	Set the alternate DNS Server <mark>192.168.100.76</mark></h6>

                        <div class="m-4 text-center">
                            <img src="../../asset/images/upload/7.png" width="300px">
                            <p class="font-weight-light">Diagram 7</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>
</div>
<?php include('include/script.php') ?>
</body>
</html>