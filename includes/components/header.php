<?php // TODO: Fix the smoothness using Bootstrap ?>
<header class="shadow-sm fixed-top bg-white">
    <nav class="navbar navbar-expand-lg container-fluid px-3 position-relative">
        <div class="w-100 d-flex justify-content-between align-items-center gap-3">

            <div class="row w-100 flex align-items-center">
                <div class="col-lg-5">
                    <ul class="navbar-nav nav-left d-none d-lg-flex flex-row gap-3">
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/index.php">Home</a>
                        </li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/about.php">About</a>
                        </li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/product.php">Products</a>
                        </li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/index.php#dealership-section">Dealership</a>
                        </li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/blogs.php">Blog</a>
                        </li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/faq.php">FAQ</a>
                        </li>
                        <li class="nav-item animate__animated animate__fadeInDown animate__slow"><a class="nav-link"
                                                                                                    href="/contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="navbar-brand logo animate__animated animate__pulse animate__infinite animate__slower mx-auto py-3">
                        <img src="/assets/images/logo.png" alt="logo" class="logo-img" height="20"/>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="social-icons d-none d-lg-flex gap-3">
                        <div class="flex-fill"></div>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#">
                            <svg class="twitter-icon" stroke="currentColor" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="Twitter">
                                    <path d="M19.913,5.322a1.034,1.034,0,0,1,.837,1.629L19.708,8.432c-.064,5.086-1.765,8.539-5.056,10.264A10.917,10.917,0,0,1,9.6,19.835a12.233,12.233,0,0,1-6.2-1.524.76.76,0,0,1-.317-.8.768.768,0,0,1,.63-.6,20.6,20.6,0,0,0,3.745-.886C2,13.5,3.19,7.824,3.71,6.081a1.028,1.028,0,0,1,1.729-.422,9.931,9.931,0,0,0,5.995,2.95A4.188,4.188,0,0,1,12.725,5.3a4.125,4.125,0,0,1,5.7.02ZM4.521,17.794c1.862.872,6.226,1.819,9.667.016,2.955-1.549,4.476-4.732,4.521-9.461a.771.771,0,0,1,.142-.436l1.081-1.538-.041-.053c-.518-.007-1.029-.014-1.55,0a.835.835,0,0,1-.547-.221,3.13,3.13,0,0,0-4.383-.072,3.174,3.174,0,0,0-.935,2.87.646.646,0,0,1-.154.545.591.591,0,0,1-.516.205A10.924,10.924,0,0,1,4.722,6.354c-.67,2.078-1.52,7.094,3.869,9.065a.632.632,0,0,1,.416.538.625.625,0,0,1-.3.6A13.178,13.178,0,0,1,4.521,17.794ZM11.875,8.65h0Zm7.793-.161,0,0Z"></path>
                                </g>
                            </svg>
                        </a>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#">
                            <svg viewBox="0 0 35 35" stroke="currentColor" fill="currentColor" stroke-width="0"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.7814 7.16039C26.4442 5.81013 24.8517 4.73951 23.0965 4.01092C21.3414 3.28233 19.4588 2.91035 17.5585 2.91664C9.596 2.91664 3.10641 9.40623 3.10641 17.3687C3.10641 19.9208 3.77725 22.4 5.03141 24.5875L2.98975 32.0833L10.646 30.0708C12.7606 31.2229 15.1377 31.8354 17.5585 31.8354C25.521 31.8354 32.0106 25.3458 32.0106 17.3833C32.0106 13.5187 30.5085 9.88748 27.7814 7.16039ZM17.5585 29.3854C15.4002 29.3854 13.2856 28.8021 11.4335 27.7083L10.996 27.4458L6.446 28.6416L7.65641 24.2083L7.36475 23.7562C6.16534 21.8415 5.5286 19.6281 5.52725 17.3687C5.52725 10.7479 10.9231 5.35206 17.5439 5.35206C20.7522 5.35206 23.771 6.60623 26.0314 8.88123C27.1509 9.99519 28.038 11.3204 28.6413 12.7798C29.2446 14.2393 29.5521 15.8041 29.546 17.3833C29.5752 24.0041 24.1793 29.3854 17.5585 29.3854ZM24.1502 20.4021C23.7856 20.2271 22.0064 19.3521 21.6856 19.2208C21.3502 19.1041 21.1168 19.0458 20.8689 19.3958C20.621 19.7604 19.9356 20.5771 19.7314 20.8104C19.5272 21.0583 19.3085 21.0875 18.9439 20.8979C18.5793 20.7229 17.4127 20.3291 16.0418 19.1041C14.9627 18.1416 14.2481 16.9604 14.0293 16.5958C13.8252 16.2312 14.0002 16.0416 14.1897 15.8521C14.3502 15.6916 14.5543 15.4291 14.7293 15.225C14.9043 15.0208 14.9772 14.8604 15.0939 14.6271C15.2106 14.3791 15.1522 14.175 15.0647 14C14.9772 13.825 14.2481 12.0458 13.9564 11.3166C13.6647 10.6166 13.3585 10.7041 13.1397 10.6896H12.4397C12.1918 10.6896 11.8127 10.7771 11.4772 11.1416C11.1564 11.5062 10.2231 12.3812 10.2231 14.1604C10.2231 15.9396 11.521 17.6604 11.696 17.8937C11.871 18.1416 14.2481 21.7875 17.8647 23.3479C18.7252 23.7271 19.396 23.9458 19.921 24.1062C20.7814 24.3833 21.5689 24.3396 22.196 24.2521C22.896 24.15 24.3397 23.3771 24.6314 22.5312C24.9377 21.6854 24.9377 20.9708 24.8356 20.8104C24.7335 20.65 24.5147 20.5771 24.1502 20.4021Z"
                                      fill="black"/>
                            </svg>
                        </a>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#">
                            <svg class="facebook-icon" viewBox="0 0 35 35" stroke="currentColor" fill="currentColor" stroke-width="0"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.7917 2.91669H20.4167C18.4828 2.91669 16.6281 3.68491 15.2607 5.05237C13.8932 6.41982 13.125 8.27448 13.125 10.2084V14.5834H8.75V20.4167H13.125V32.0834H18.9583V20.4167H23.3333L24.7917 14.5834H18.9583V10.2084C18.9583 9.82158 19.112 9.45065 19.3855 9.17716C19.659 8.90367 20.0299 8.75002 20.4167 8.75002H24.7917V2.91669Z"
                                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a class="animate__animated animate__fadeInRight animate__slow" href="#">
                            <svg viewBox="0 0 35 35" stroke="currentColor" fill="none" stroke-width="0"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4998 23.3334C19.0469 23.3334 20.5307 22.7188 21.6246 21.6248C22.7186 20.5308 23.3332 19.0471 23.3332 17.5C23.3332 15.9529 22.7186 14.4692 21.6246 13.3752C20.5307 12.2813 19.0469 11.6667 17.4998 11.6667C15.9527 11.6667 14.469 12.2813 13.375 13.3752C12.2811 14.4692 11.6665 15.9529 11.6665 17.5C11.6665 19.0471 12.2811 20.5308 13.375 21.6248C14.469 22.7188 15.9527 23.3334 17.4998 23.3334Z"
                                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.375 23.3333V11.6667C4.375 9.7328 5.14323 7.87813 6.51068 6.51068C7.87813 5.14323 9.7328 4.375 11.6667 4.375H23.3333C25.2672 4.375 27.1219 5.14323 28.4893 6.51068C29.8568 7.87813 30.625 9.7328 30.625 11.6667V23.3333C30.625 25.2672 29.8568 27.1219 28.4893 28.4893C27.1219 29.8568 25.2672 30.625 23.3333 30.625H11.6667C9.7328 30.625 7.87813 29.8568 6.51068 28.4893C5.14323 27.1219 4.375 25.2672 4.375 23.3333Z"
                                      stroke="black" stroke-width="1.5"/>
                                <path d="M25.521 9.49468L25.5364 9.47772" stroke="black" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Hamburger Button (Right corner) -->
            <button class="navbar-toggler ham position-absolute top-0 end-0 mt-2 me-2" type="button"
                    data-bs-toggle="collapse" data-bs-target="#mainNavbar">
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
                <li class="nav-item"><a class="nav-link" href="/faq.php">FAQ</a></li>
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
