<?php 
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>demo</title>
</head>

<body>
    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container-fluid px-3">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p><a href="mailto:info@venturaincorporated.com" class="text-white text-decoration-none"><i
                                class='bx bxs-envelope me-1'></i> info@example.com</a></p>

                </div>
                <div class="col-auto">
                    <p><a href="tel:++65-98330211" class="text-white text-decoration-none"><i
                                class='bx bxl-whatsapp'></i> +61-987654321</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-royal sticky-top">
        <div class="container-fluid px-3">
            <a class="navbar-brand" href="#">demo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="menu-item">
                        <a class="menu-link" href="index.html">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="about.html" class="menu-link">About Us</a>
                        <div class="menu-content">
                            <div class="container-fluid">
                                <div class="row g-3">
                                    <div class="col-md-3 p-3">
                                        <nav id="aboutTab" class="nav nav-pills flex-column" data-mouse="hover">
                                            <a href="#category1" class="active nav-link"
                                                data-bs-toggle="pill">History</a>
                                            <a href="#category2" class="nav-link" data-bs-toggle="pill">Our Team</a>
                                            <a href="#category3" class="nav-link" data-bs-toggle="pill">Our Strategy</a>
                                            <a href="#category4" class="nav-link" data-bs-toggle="pill">Ethics &
                                                Compliance</a>
                                        </nav>
                                    </div>
                                    <div class="col-md-9 tab-content p-3">
                                        <article class="tab-pane fade show active" id="category1">
                                            <p class="menu-head">History</p>
                                            <div class="col-md-9 ">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</div>
                                        </article>
                                        <article class="tab-pane fade" id="category2">
                                            <p class="menu-head">Our Team Members</h6>
                                            <div class="row mt-4">
                                                <div class="col-sm-2">
                                                    <div class="card">
                                                        <img src="img/team_1.jpg" class="card-img-top" alt="...">
                                                        <span class="member-name">jhon Deo</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="card">
                                                        <img src="img/team_2.jpg" class="card-img-top" alt="...">
                                                        <span class="member-name">jhon Deo</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="card">
                                                        <img src="img/team_3.jpg" class="card-img-top" alt="...">
                                                        <span class="member-name">jhon Deo</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="tab-pane fade" id="category3">
                                            <p class="menu-head">Our Strategy</p>
                                            <div class="col-md-9 ">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</div>
                                        </article>
                                        <article class="tab-pane fade" id="category4">
                                            <p class="menu-head">Ethics & Compliance</p>
                                            <div class="col-md-9 ">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum. </div>

                                        </article>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div> <!-- menu-content > .container -->
                        </div> <!-- menu-content -->
                    </li>

                    <li class="menu-item">
                        <a href="#" class="menu-link">Products & Services</a>
                        <div class="menu-content">
                            <div class="container-fluid">
                                <div class="row g-3">
                                    <div class="col-md-3 p-3">
                                        <nav id="productTab" class="nav nav-pills flex-column" data-mouse="hover">
                                            <a href="#product" class="active nav-link" data-bs-toggle="pill">Product</a>
                                            <a href="#service" class="nav-link" data-bs-toggle="pill">Services</a>
                                        </nav>
                                    </div>
                                    <div class="col-md-9 tab-content p-3">
                                        <article class="tab-pane fade show active" id="product">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <nav id="prodCat" class="nav nav-pills flex-column"
                                                        data-mouse="hover">
                                                        <a href="#rice" class="nav-link" data-bs-toggle="pill">
                                                            <img src="img/rice.jpg" class="menu-icon rounded-circle">
                                                            demo1</a>
                                                        <a href="#sugar" class="nav-link" data-bs-toggle="pill">
                                                            <img src="img/rice.jpg" class="menu-icon rounded-circle">
                                                            demo2</a>
                                                    </nav>
                                                </div>
                                                <div class="col-md-10 tab-content">
                                                    <article class="tab-pane dropdown fade" id="rice">
                                                        <div class="dropdown-submenu">
                                                            <a href="javascript:void(0)"
                                                                class="dropdown active nav-link"
                                                                data-toggle="dropdown">India</a>
                                                            <div class="dropdown-menu col-md-12">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#indiaRice1">demodfdfgf</a>
                                                                <a>demodfdfgf</a>
                                                                <a>demodfdfgf</a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-submenu">
                                                            <a href="javascript:void(0)" class="nav-link">USA</a>
                                                            <div class="dropdown-menu col-md-12">
                                                                <a>11111111111</a>
                                                                <a>222222222</a>
                                                                <a>333333333</a>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0)" class="nav-link">UK</a>
                                                        <a href="javascript:void(0)" class="nav-link">NewYork</a>
                                                    </article>
                                                    <article class="tab-pane fade" id="sugar">
                                                        <a href="#India" class="active nav-link">AA</a>
                                                        <a href="#India" class="nav-link">BB</a>
                                                    </article>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="tab-pane fade" id="service">
                                            <p class="menu-head">Our Services</p>
                                            <div class="col-sm-9 mt-4">
                                                <p><strong>FOREIGN EXCHANGE:</strong></p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div> <!-- menu-content > .container -->
                        </div> <!-- menu-content -->
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="bg-img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">design Driven for professional</h6>
                        <h1 class="display-2 my-4">Pure Organic Products</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container zoom-out">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">We craft digital experiances</h6>
                        <h1 class="display-2 my-4">Pure Organic Products</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="container zoom-out">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">We craft digital experiances</h6>
                        <h1 class="display-2 my-4">Pure Organic Products</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <span class="sub-heading">About Us</span>
                        <h1 class="my-4">What We Do?</h1>
                        <p class="mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="container">
        <div class="row">
            <div class="col-12">
                <div class="intro">
                    <span class="sub-heading">Team Members</span>
                    <h1>Meet Our Partners</h1>
                    <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 p-5">
                <div class="team-one__single">
                    <div class="team-one__shape-1">
                        <img src="img/team-one-shape-1.png" alt="">
                    </div>
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="img/team_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__title"><span>Aleesha Brown</span></h3>
                        <p class="team-one__subtitle">Senior Farmer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-5">
                <div class="team-one__single">
                    <div class="team-one__shape-1">
                        <img src="img/team-one-shape-1.png" alt="">
                    </div>
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="img/team_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__title"><span>Aleesha Brown</span></h3>
                        <p class="team-one__subtitle">Senior Farmer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-5">
                <div class="team-one__single">
                    <div class="team-one__shape-1">
                        <img src="img/team-one-shape-1.png" alt="">
                    </div>
                    <div class="team-one__img-box">
                        <div class="team-one__img">
                            <img src="img/team_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="team-one__content">
                        <h3 class="team-one__title"><span>Aleesha Brown</span></h3>
                        <p class="team-one__subtitle">Senior Farmer</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- modal 1 -->
    <div class="modal fade" id="indiaRice1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close d-flex align-items-center justify-content-center"
                        data-bs-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="modal-body">
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./img/mery-khachatryan-H-a_AaPyxKw-unsplash.jpg" alt="Los Angeles"
                                            class="d-block" style="width:100%">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/mery-khachatryan-H-a_AaPyxKw-unsplash.jpg" alt="Chicago"
                                            class="d-block" style="width:100%">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./img/mery-khachatryan-H-a_AaPyxKw-unsplash.jpg" alt="New York"
                                            class="d-block" style="width:100%">
                                    </div>
                                </div>

                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="modal-body p-3 d-flex align-items-center">
                            <div class="text w-100 text-center py-5">
                                <h2 class="mb-0">On all Colorlib Brands</h2>
                                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima quidem,
                                    maxime molestias cum delectus, fuga beatae assumenda animi non voluptatibus dolorum
                                    natus consectetur hic? Aspernatur veniam dolorem tenetur hic illo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <a class="navbar-brand" href="index.html">demo</a>
                        <p class="mb-0">Copyright 2022. All rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>
?>