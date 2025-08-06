<?php
R::setup('mysql:host=localhost;dbname=bemotion', 'root', '');
R::freeze(false);

// DELETE functionality
if (isset($_GET['page']) && $_GET['page'] === 'blogs' && isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $blog = R::load('blogs', $id);

    if ($blog->id > 0) {
        R::trash($blog);
        header("Location: admin.php?page=blogs&status=deleted&source=blog");
        exit;
    } else {
        header("Location: admin.php?page=blogs&status=failed&source=blog");
        exit;
    }
}

// UPDATE blog
if (isset($_POST['update_blog'])) {
    $id = intval($_POST['edit_id']);
    $blog = R::load('blogs', $id);

    if ($blog->id > 0) {
        $blog->title = $_POST['title'];
        $blog->content = $_POST['content'];
        $blog->tags = $_POST['tags'];
        $blog->location = $_POST['location'];
        $blog->created_at = $_POST['created_at'];

        // Image check
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $uploadDir = '../../../db/handlers/uploads/';
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
            $path = $uploadDir . basename($image);
            move_uploaded_file($tmp, $path);
            $blog->image = $image;
        } else {
            // Keep the old image if none is uploaded
            $existingBlog = R::load('blogs', $id);
            $blog->image = $existingBlog->image;
        }

        R::store($blog);
        header("Location: admin.php?page=blogs&status=updated&source=blog");
        exit;
    }
}

// ADD NEW blog
if (isset($_POST['add_blog'])) {
    $blog = R::dispense('blogs');
    $blog->title = $_POST['title'];
    $blog->content = $_POST['content'];
    $blog->tags = $_POST['tags'];
    $blog->location = $_POST['location'];
    $blog->created_at = $_POST['created_at'];

    // Upload image
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $uploadDir = '../../../db/handlers/uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
    $path = $uploadDir . basename($image);
    move_uploaded_file($tmp, $path);

    $blog->image = $image;
    R::store($blog);
    header("Location: admin.php?page=blogs&status=success&source=blog");
    exit;
}

$blogs = R::findAll('blogs', 'ORDER BY id DESC');

$editMode = false;
$editBlog = null;

if (isset($_GET['edit'])) {
    $editId = intval($_GET['edit']);
    $editBlog = R::load('blogs', $editId);
    if ($editBlog->id) {
        $editMode = true;
    }
}
?>

<div class="container">

<!--    --><?php //if (isset($_GET['status'])): ?>
<!--        <div class="alert alert---><?php //= $_GET['status'] == 'success' ? 'success' : 'danger' ?><!--">-->
<!--            --><?php //= $_GET['status'] == 'success' ? '✅ Blog Added Successfully' :
//                ($_GET['status'] == 'deleted' ? '🗑️ Blog Deleted' : '❌ Operation Failed') ?>
<!--        </div>-->
<!--    --><?php //endif; ?>

    <!-- Add Blog Toggle -->
    <div class="d-flex justify-content-between mb-2 flex-row">
        <h2>All Blogs</h2>
        <button class="btn btn-dark" onclick="toggleForm()">+ Add Blog</button>
    </div>

    <!-- Add Blog Form (Initially hidden) -->
    <div class="card shadow-sm" id="blogForm" style="display:none;">
        <div class="d-flex justify-content-between align-items-center card-header bg-dark text-white">
            <h5 class="mb-0">Add New Blog Post</h5>
            <button class="btn-close btn-close-white" onclick="toggleForm()" aria-label="Close"></button>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="edit_id" value="<?= $editMode ? $editBlog->id : '' ?>">

                <div class="mb-2">
                    <label for="title" class="form-label">Blog Title</label>
                    <input
                            type="text"
                            class="form-control"
                            name="title"
                            placeholder="Enter blog title here"
                            required
                            value="<?= $editMode ? htmlspecialchars($editBlog->title) : '' ?>">
                </div>

                <div class="mb-2">
                    <label for="content" class="form-label">Content</label>
                    <div id="editor" style="height: 200px;">
                        <?= $editMode ? $editBlog->content : '' ?>
                    </div>
                    <input type="hidden" name="content" id="hiddenContent">
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input
                            class="form-control"
                            type="file"
                            name="image"
                            placeholder="Upload blog image"
                        <?= $editMode ? '' : 'required' ?>>
                </div>

                <div class="mb-2">
                    <label class="form-label">Tags (comma-separated)</label>
                    <input
                            type="text"
                            class="form-control"
                            name="tags"
                            placeholder="e.g. finance, accounting, AI"
                            required
                            value="<?= $editMode ? htmlspecialchars($editBlog->tags) : '' ?>">
                </div>

                <div class="mb-2">
                    <label class="form-label">Location</label>
                    <input
                            type="text"
                            class="form-control"
                            name="location"
                            placeholder="Enter blog location (e.g. New York, USA)"
                            required
                            value="<?= $editMode ? htmlspecialchars($editBlog->location) : '' ?>">
                </div>

                <div class="mb-1">
                    <label class="form-label">Date</label>
                    <input
                            type="date"
                            class="form-control"
                            name="created_at"
                            placeholder="Select blog publish date"
                            required
                            value="<?= $editMode ? date('Y-m-d', strtotime($editBlog->created_at)) : '' ?>">
                </div>

                <button type="submit" name="<?= $editMode ? 'update_blog' : 'add_blog' ?>" class="btn btn-primary w-100">
                    <?= $editMode ? 'Update Blog' : 'Submit Blog' ?>
                </button>
            </form>

        </div>
    </div>

    <!-- Blog Table -->
    <div class="table-responsive" id="blogTable">
        <table class="table table-bordered table-hover align-middle bg-white">
            <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Tags</th>
                <th>Location</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td><?= $blog->id ?></td>
                    <td><img src="/db/handlers/uploads/<?= $blog->image ?>" width="80"></td>
                    <td><?= $blog->title ?></td>
                    <td>
                        <?php foreach (explode(',', $blog->tags) as $tag): ?>
                            <span class="chip"><?= trim($tag) ?></span>
                        <?php endforeach; ?>
                    </td>
                    <td><?= $blog->location ?></td>
                    <td><?= date('M d, Y', strtotime($blog->created_at)) ?></td>
                    <td class="text-center">
                        <a href="?page=blogs&delete=<?= $blog->id ?>" class="btn btn-sm btn-danger"
                           onclick="return confirm('Are you sure to delete this blog?')">Delete</a>

                        <a href="?page=blogs&edit=<?= $blog->id ?>" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

<!--<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'script': 'sub'}, { 'script': 'super' }],
                [{ 'indent': '-1'}, { 'indent': '+1' }],
                [{ 'direction': 'rtl' }],
                [{ 'size': ['small', false, 'large', 'huge'] }],
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'font': [] }],
                [{ 'align': [] }],
                ['clean'],
                ['link', 'image']
            ]
        }
    });

    document.querySelector('form').addEventListener('submit', function () {
        const html = quill.root.innerHTML;
        document.querySelector('#hiddenContent').value = html;
    });
</script>


<script>
    function toggleForm() {
        const form = document.getElementById('blogForm');
        const table = document.getElementById('blogTable');

        if (form.style.display === 'none') {
        form.style.display = 'block';
        table.style.display = 'none';
    } else {
        form.style.display = 'none';
        table.style.display = 'block';
        }
    }

    <?php if ($editMode): ?>
    document.addEventListener('DOMContentLoaded', function () {
        toggleForm();
    });
    <?php endif; ?>
</script>

