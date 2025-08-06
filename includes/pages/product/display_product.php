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

<?php
R::setup('mysql:host=localhost;dbname=bemotion', 'root', '');
$products = R::findAll('products', 'ORDER BY id DESC LIMIT 6');

// Unique titles for filters
$titles = R::getCol('SELECT DISTINCT title FROM products');
?>


<section class="product-section py-5">
    <div class="container text-center">

        <!-- Filter Buttons -->
        <div class="button-slider d-flex justify-content-start gap-2 mb-5">
            <button type="button" class="btn btn-pills-1 rounded-pill px-4 py-2 filter-btn active" data-title="all"
                    data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">
                SEE ALL
            </button>

            <?php foreach ($titles as $title): ?>
                <button type="button"
                        class="btn btn-pills btn-outline-dark rounded-pill px-4 py-2 filter-btn"
                        data-title="<?= htmlspecialchars($title) ?>"
                        data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">
                    <?= htmlspecialchars($title) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Product Cards -->
        <!-- Product Cards -->
        <div class="row g-5 justify-content-center" id="productGrid">
            <?php foreach ($products as $product): ?>
                <div class="col-12 col-sm-6 col-lg-4 product-card"
                     data-title="<?= htmlspecialchars($product->title) ?>">

                    <img src="/assets/images/product_detail_page/<?= htmlspecialchars($product->image_1) ?>"
                         class="product-img mb-3"
                         alt="<?= htmlspecialchars($product->title) ?>"
                         data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">

                    <div class="card border shadow-sm"
                         data-aos="fade-right" data-aos-duration="1000" data-aos-offset="100" data-aos-easing="ease-in-out">
                        <div class="card-body text-start">
                            <h5><?= htmlspecialchars($product->title) ?></h5>
                            <p class="text-muted small">
                                <?= htmlspecialchars(mb_strimwidth($product->description, 0, 100, '...')) ?>
                            </p>
                            <a href="/product_detail.php?id=<?= $product->id ?>" class="shop-now small">Shop now →</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More Button -->
        <button class="btn load-btn mt-5 px-5 py-2 rounded">LOAD MORE</button>
    </div>
</section>
