<?php
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: /product.php?status=notfound");
    exit;
}

R::setup('mysql:host=localhost;dbname=bemotion', 'root', '');
$id = intval($_GET['id']);
$product = R::load('products', $id);

if (!$product || $product->id == 0) {
    header("Location: /product.php?status=notfound");
    exit;
}

// Optional: If your table has image_2, image_3, image_4 columns
$images = [];
if ($product->image_1) $images[] = $product->image_1;
if ($product->image_2) $images[] = $product->image_2;
if ($product->image_3) $images[] = $product->image_3;
if ($product->image_4) $images[] = $product->image_4;
?>

<div class="product-profile-container">
    <div class="product-profile-wrapper">

        <!-- Left: Product Image -->
        <div class="product-image"  data-aos="fade-right" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">
            <img id="mainProductImage" src="/includes/pages/admin/upload_images/products_images/<?= htmlspecialchars($product->image_1) ?>" alt="<?= htmlspecialchars($product->title) ?>">
        </div>

        <!-- Right: Info Panel -->
        <div class="product-info">
            <h2 class="product-title"  data-aos="fade-down" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out"><?= htmlspecialchars($product->title) ?></h2>
            <p class="highlight-text"  data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"  data-aos-offset="200" data-aos-easing="ease-in-out"><?= htmlspecialchars($product->highlight) ?: 'Featured Product' ?></p>
            <p class="product-description"  data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out">
                <?= nl2br(htmlspecialchars($product->description)) ?>
            </p>

            <ul class="info-list">
                <li data-aos="fade-down" data-aos-duration="1000" data-aos-offset="200" data-aos-easing="ease-in-out"><strong>Position:</strong> <?= htmlspecialchars($product->position ?: 'N/A') ?></li>
                <li data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"  data-aos-offset="200" data-aos-easing="ease-in-out"><strong>Experience:</strong>&nbsp;&nbsp;<?= htmlspecialchars($product->experience ?: 'N/A') ?></li>
                <li data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150"  data-aos-offset="200" data-aos-easing="ease-in-out"><strong>Location:</strong>  <?= htmlspecialchars($product->location ?: 'N/A')?></li>
                <li data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200"  data-aos-offset="200" data-aos-easing="ease-in-out"><strong>Email:</strong>  <?= htmlspecialchars($product->email ?: 'N/A') ?> </li>
                <li data-aos="fade-down" data-aos-duration="1000" data-aos-delay="250"  data-aos-easing="ease-in-out"><strong>Phone:</strong>  <?= htmlspecialchars($product->phone ?: 'N/A')?></li>
            </ul>

            <div class="social-buy">
                <div class="social-media">
                    <p>Social Media</p>
                    <div class="social-icons" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <a href="#">
                            <div>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                        <a href="#">
                            <div>
                                <i class="fab fa-twitter"></i>
                            </div>
                        </a>
                        <a href="#">
                            <div>
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </div>

    <!-- Slider -->
    <div class="product-carousel">
        <button class="arrow-btn" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="50" data-aos-easing="ease-in-out">
            <i class="fas fa-arrow-left"></i>
        </button>
        <div class="carousel-track">
                <?php foreach ($images as $index => $img): ?>
                    <img class="thumbnail-img <?= $index === 0 ? 'selected' : '' ?>"
                         src="/includes/pages/admin/upload_images/products_images/<?= htmlspecialchars($img) ?>"
                         alt="Product image"
                         data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <?php endforeach; ?>
        </div>

        <button class="arrow-btn" data-aos="fade-right" data-aos-offset="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const thumbnails = Array.from(document.querySelectorAll('.thumbnail-img'));
        const mainImage = document.getElementById('mainProductImage');
        const leftBtn = document.querySelectorAll('.arrow-btn')[0];
        const rightBtn = document.querySelectorAll('.arrow-btn')[1];

        let currentIndex = 0;

        const updateMainImage = (index) => {
            currentIndex = index;
            thumbnails.forEach((thumb, i) => {
                thumb.classList.toggle('selected', i === index);
            });
            mainImage.src = thumbnails[index].src;
        };

        // Arrow button click events
        leftBtn.addEventListener('click', () => {
            const newIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
            updateMainImage(newIndex);
        });

        rightBtn.addEventListener('click', () => {
            const newIndex = (currentIndex + 1) % thumbnails.length;
            updateMainImage(newIndex);
        });

        // Thumbnail click (optional)
        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener('click', () => updateMainImage(index));
        });
    });
</script>
