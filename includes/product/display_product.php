<section class="hero-section position-relative text-white d-flex align-items-center justify-content-center">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container text-center position-relative z-2">
        <p class="text-warning small">Our best Product</p>
        <h1 class="display-4 fw-bold">Our Product</h1>
        <p class="lead d-none d-md-block mx-auto" style="max-width: 600px;">
            Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia sit
        </p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="#" class="text-light text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</section>

<section class="product-section py-5">
    <div class="container text-center">

        <!-- Filter Buttons -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">
            <button type="button" class="btn btn-primary rounded-pill px-4 py-2">SEE ALL</button>
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2">Lorem</button>
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2">Ispum</button>
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2">loream</button>
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2">loreamsaa</button>
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2">loream</button>
        </div>

        <!-- Product Cards -->
        <div class="row g-5 justify-content-center">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <img src="/assets/images/product_page/bottle.png" class="product-img mb-3" alt="Product Image">
                    <div class="card border shadow-sm">
                        <div class="card-body text-start">
                            <h5 class="fw-bold">Lpsam quia</h5>
                            <p class="text-muted small">
                                Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia sit
                            </p>
                            <a href="#" class="text-primary small">Shop now →</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Load More Button -->
        <button class="btn btn-primary mt-5 px-5 py-2 rounded">LOAD MORE</button>
    </div>
</section>
