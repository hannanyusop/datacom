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
    <div class="site-blocks-cover overlay" style="background-image: url(asset/images/upload/subnet.jpg);" data-aos="fade" id="home-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 mt-lg-5 text-center">
                    <h2 class="section-title mb-3 text-white" data-aos="fade-up" data-aos-delay="">Subnetting Calculation</h2>
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

                    <h4>Subnetting Calculation</h4>

                    <p>Default IP :<mark>192.168.0.0/2924</mark></p>
                    <h6>The range between 192.168.0.0 and 192.168.0.255 with possible hosts</h6>
                    <h6>For an example :</h6>
                    <p>
                        <small>
                            11111111.11111111.00000000.00000000, which equals to 255.255.0.0
                            when converted from binary into decimal.
                        </small>
                    </p>

                    <div class="m-4 text-center">
                        <img src="../../asset/images/upload/subnet1.png" width="500px">
                        <p class="font-weight-light">Diagram 1</p>
                    </div>

                    <div class="m-4 text-center">
                        <img src="../../asset/images/upload/subnet2.png" width="500px">
                        <p class="font-weight-light">Diagram 2</p>
                    </div>

                    <p>
                        Every device has an IP address with two pieces: the client or host address and the server or network address.
                        The subnet mask splits the IP address into the host and network addresses, thereby defining which part of the
                        IP address belongs to the device and which part belongs to the network. A subnet mask hides (or masks)
                        the network part of a system's IP address and leaves only the host part as the machine identifier.
                        It uses the same format as an IPv4 address four sections of one to three numbers, separated by dots.
                        Each section of the subnet mask can contain a number from 0 to 255,
                        just like an IP address. For example, a typical subnet mask for a Class C IP address is: 255.255.255.0
                    </p>


                    <h5>Two types of subnetting</h5>
                    <h6>1.	FLSM (Fixed Length Subnet Mask)</h6>
                    <h6>2.	VLSM (Variable Length Subnet Mask)</h6>

                    <p>FLSM</p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-info">
                                    <th>Group size</th>
                                    <th>128</th>
                                    <th>64</th>
                                    <th>32</th>
                                    <th>16</th>
                                    <th>8</th>
                                    <th>4</th>
                                    <th>2</th>
                                    <th>1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Subnet</td>
                                    <td>128</td>
                                    <td>192</td>
                                    <td>224</td>
                                    <td>240</td>
                                    <td>248</td>
                                    <td>252</td>
                                    <td>254</td>
                                    <td>255</td>
                                </tr>
                                <tr>
                                    <td>CIDR</td>
                                    <td>/25</td>
                                    <td>/26</td>
                                    <td>/27</td>
                                    <td>/28</td>
                                    <td>/29</td>
                                    <td>/30</td>
                                    <td>/31</td>
                                    <td>/32</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h6>Private address scheme for OUM network = 192.168.0.0/24</h6>
                    <h6>Number of faculty = 8 subnet</h6>

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