<?php // TODO: Fix the smoothness using Bootstrap ?>
<header class="shadow-sm fixed-top bg-white">
    <nav class="navbar navbar-expand-lg container-fluid px-3 position-relative">
        <div class="w-100 d-flex justify-content-between align-items-center gap-3">

            <div class="row w-100 flex align-items-center">
                <div class="col-lg-5">
                    <ul class="navbar-nav nav-left d-none d-lg-flex flex-row gap-3">
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/index.php">Home</a></li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/about.php">About</a></li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/product.php">Products</a></li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/index.php#dealership-section">Dealership</a></li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/blogs.php">Blog</a></li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/contact.php">Contact</a></li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link" href="/faq.php">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="navbar-brand logo animate__animated animate__pulse animate__infinite animate__slower mx-auto py-3">
                        <img src="/assets/images/logo.png" alt="logo" class="logo-img" height="20" />
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="social-icons d-none d-lg-flex gap-3">
                        <div class="flex-fill"></div>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#"><i class="fab fa-whatsapp"></i></a>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Hamburger Button (Right corner) -->
            <button class="navbar-toggler position-absolute top-0 end-0 mt-2 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Mobile Menu Collapse -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav flex-column text-center w-100 mt-3 d-lg-none">
                <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/product.php">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="/index.php#dealership-section">Dealership</a></li>
                <li class="nav-item"><a class="nav-link" href="/blogs.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
                <li class="nav-item mt-3 d-flex justify-content-center gap-3">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
