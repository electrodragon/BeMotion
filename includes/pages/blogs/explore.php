<?php
if (!file_exists($dbFile)) {
    die("Database file not found: " . $dbFile);
}

R::freeze(true); // ✅ freeze true in production

$tables = R::inspect();
if (!in_array('blogs', $tables)) {
    die("Table 'blogs' does not exist in the SQLite database.");
}

$blogs = R::find('blogs', ' ORDER BY id DESC ');


if (empty($blogs)) {
    die("No blogs found in the database.");
}

?>

<section class="blog-explore-section">
    <div class="blog-explore-layout container-fluid px-5">
        <h1 class="mb-3">Recent Posts</h1>

        <?php foreach ($blogs as $blog): ?>
            <?php
            $contentPath = __DIR__ . '/../admin/upload_blogs/' . $blog->content;
            $blogContent = file_exists($contentPath) ? file_get_contents($contentPath) : 'No content available.';
            $cleanContent = strip_tags($blogContent);
            $shortContent = mb_substr($cleanContent, 0, 400);
            if (mb_strlen($cleanContent) > 400) {
                $shortContent .= '...';
            }

            $tagList = explode(',', $blog->tags);
            ?>

        <a href="blog_description.php?id=<?= $blog->id ?>" class="text-decoration-none text-dark w-100">

            <div class="row mt-4 blog-recent-card" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="col-sm-4">
                    <div class="blog-recent-card-image-container">
                        <img class="rounded" src="/includes/pages/admin/upload_images/blogs_images/<?= htmlspecialchars($blog->image) ?>" alt="<?= htmlspecialchars($blog->title) ?>">
                    </div>
                </div>
                <div class="col-sm-8">
                    <h3 class="mt-3"><?= htmlspecialchars($blog->title) ?></h3>
                    <p class="mt-3"><?= htmlspecialchars($shortContent) ?></p>

                    <div class="chips d-flex flex-wrap gap-3 mt-4">
                        <?php foreach ($tagList as $tag): ?>
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

        <div class="load-more-button-container mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <button class="load-more-button">Load More</button>
        </div>
    </div>
</section>
