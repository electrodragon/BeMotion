<?php
//require '../../../RedBeanPHP5_7_5-mysql/rb-mysql.php';
R::setup('mysql:host=localhost;dbname=bemotion', 'root', '');
R::freeze(true); // ✅ freeze true in production
$blogs = R::findAll('blogs');
?>

<section class="blogs-page-features">
    <div class="container-fluid px-5">
        <div class="row">

            <?php foreach ($blogs as $blog): ?>
                <div class="col-sm-6 d-flex justify-items-center align-items-center px-4 mt-5" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="blog-card">
                        <div class="card-image-container">
                            <img src="/includes/pages/admin/upload_images/blogs_images/<?= htmlspecialchars($blog->image) ?>" alt="<?= htmlspecialchars($blog->title) ?>" class="rounded">
                        </div>
                        <h3 class="mt-4"><?= htmlspecialchars($blog->title) ?></h3>
                        <?php
                        $contentPath = __DIR__ . '/../admin/upload_blogs/' . $blog->content;
                        $blogContent = file_exists($contentPath) ? file_get_contents($contentPath) : 'No content available.';
                        ?>
                        <p class="mt-4"><?= nl2br(htmlspecialchars($blogContent)) ?></p>


                        <div class="chips d-flex flex-wrap gap-3 mt-4">
                            <?php
                            $tagList = explode(',', $blog->tags);
                            foreach ($tagList as $tag): ?>
                                <span class="chip"><?= htmlspecialchars(trim($tag)) ?></span>
                            <?php endforeach; ?>
                            <span class="chip">
                                <img src="/assets/images/blogs_page/Boston%20Celtics.svg" alt="boston">
                                <?= htmlspecialchars($blog->location) ?>
                            </span>
                        </div>

                        <div class="d-flex align-items-center gap-5 mt-3">
                            <span class="blog-publish-date">
                                <span class="blog-publish-date-dot"></span>
                                <?= date('F j, Y', strtotime($blog->created_at)) ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
