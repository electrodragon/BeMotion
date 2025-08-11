<?php
require 'connection.php';

// Force cache to clear every time
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php include('includes/partials/header.php'); page_header('BeMotion - Home');// Partials ?>
<?php include('includes/components/header.php'); // Component ?>


<?php
$id = intval($_GET['id']);
$blog = R::load('blogs', $id);

if (!$blog || $blog->id == 0) {
    echo "Blog not found.";
    exit;
}

// Read blog content file
$contentPath = __DIR__ . '/uploads/blogs/' . $blog->content;
$blogContent = file_exists($contentPath) ? file_get_contents($contentPath) : 'No content available.';
?>

<section class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">

            <!-- Blog Title -->
            <h1 class="mb-4 text-center fw-bold"><?= htmlspecialchars($blog->title) ?></h1>

            <!-- Blog Image -->
            <div class="text-center mb-4">
                <img src="/includes/pages/admin/upload_images/blogs_images/<?= htmlspecialchars($blog->image) ?>"
                     class="img-fluid rounded shadow"
                     alt="<?= htmlspecialchars($blog->title) ?>">
            </div>

            <!-- Blog Content -->
            <div class="blog-full-content">
                <?= nl2br(htmlspecialchars($blogContent)) ?>
            </div>

            <!-- Tags & Location -->
            <!-- Date -->
            <div class="small mb-3">
                <i class="bi bi-calendar-event me-1"></i> <?= date('F j, Y', strtotime($blog->created_at)) ?>
            </div>

            <!-- Tags & Location -->
            <div class="d-flex flex-wrap justify-content-start gap-2 mt-2">
                <?php foreach (explode(',', $blog->tags) as $tag): ?>
                    <span class="text-primary fw-semibold">#<?= htmlspecialchars(trim($tag)) ?></span>
                <?php endforeach; ?>

                <span class="text-primary fw-semibold">#<?= htmlspecialchars($blog->location) ?></span>
            </div>

        </div>
    </div>
</section>


<?php include('includes/components/footer.php'); // Partials ?>
<?php include('includes/partials/footer.php'); // Partials ?>
