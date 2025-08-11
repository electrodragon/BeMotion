<?php
use RedBeanPHP\R;

$tables = R::inspect();

if (!in_array('blogs', $tables)) {
    die("Table 'blogs' does not exist in the SQLite database.");
}

$blogs = array_slice(R::findAll('blogs'), 0, 2);

if (empty($blogs)) {
    die("No blogs found in the database.");
}
?>

<section class="blogs-page-features">
    <div id="majorBlogs" class="container-fluid px-5">
        <div class="row">

            <?php foreach ($blogs as $blog): ?>
                <div class="blog-area col-sm-6 d-flex justify-items-center align-items-center px-4 mt-5" data-aos="fade"
                     data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="blog_description.php?id=<?= $blog->id ?>" class="text-decoration-none text-dark w-100">
                        <div class="blog-card">

                            <div class="card-image-container">
                                <img src="/includes/pages/admin/upload_images/blogs_images/<?= htmlspecialchars($blog->image) ?>"
                                     alt="<?= htmlspecialchars($blog->title) ?>" class="rounded">
                            </div>
                            <h3 class="mt-4"><?= htmlspecialchars($blog->title) ?></h3>
                            <?php
                            $contentPath = __DIR__ . '/../admin/upload_blogs/' . $blog->content;
                            $blogContent = file_exists($contentPath) ? file_get_contents($contentPath) : 'No content available.';

                            $charLimit = 200;
                            $cleanContent = strip_tags($blogContent);
                            $shortContent = mb_substr($cleanContent, 0, $charLimit); // mb_substr supports UTF-8 characters
                            if (mb_strlen($cleanContent) > $charLimit) {
                                $shortContent .= '...';
                            }
                            ?>
                            <p class="mt-4"><?= htmlspecialchars($shortContent) ?></p>



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
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
