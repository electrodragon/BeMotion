<section class="product-hero-section position-relative">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container text-center text-md-start position-relative z-2">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 container-left mb-4 mb-md-0">
                <div class="orange-head" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-out">
                    <div class="img">
                        <img src="/assets/images/product_page/sc_icon.png" alt="logo" />
                    </div>
                    <p class="medium" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">Our best Product</p>
                </div>
                <h1 class="display-4 fw-bold" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">Our Product</h1>
            </div>

            <div class="col-12 col-md-6 px-4 container-right" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">
                <p class="lead text-start">
                    Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia sit  aspernatur aut odit aut fugit, sed quia sit
                </p>
            </div>
        </div>
    </div>
</section>

<section class="product-section py-5">
    <div class="container text-center">

        <!-- Filter Buttons -->
        <div class="button-slider d-flex justify-content-start gap-2 mb-5">
            <button type="button" class="btn btn-pills-1 rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">SEE ALL</button>
            <button type="button" class="btn btn-pills btn-outline-dark rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">Lorem</button>
            <button type="button" class="btn btn-pills btn-outline-dark rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">Ispum</button>
            <button type="button" class="btn btn-pills btn-outline-dark rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">loream</button>
            <button type="button" class="btn btn-pills btn-outline-dark rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">loreamsaa</button>
            <button type="button" class="btn btn-pills btn-outline-dark rounded-pill px-4 py-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">loream</button>
        </div>

        <!-- Product Cards -->
        <div class="row g-5 justify-content-center">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <img src="/assets/images/product_page/product.png" class="product-img mb-3" alt="Product Image" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">
                    <div class="card border shadow-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="100" data-aos-easing="ease-in-out">
                        <div class="card-body text-start">
                            <h5 class="">Lpsam quia</h5>
                            <p class="text-muted small">
                                Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia sit
                            </p>
                            <a href="/product_detail.php" class="shop-now small">Shop now →</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Load More Button -->
        <button class="btn load-btn mt-5 px-5 py-2 rounded">LOAD MORE</button>
    </div>
</section>
