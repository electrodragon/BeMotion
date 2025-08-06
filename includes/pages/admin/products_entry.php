<?php
R::setup('mysql:host=localhost;dbname=bemotion', 'root', '');
R::freeze(false);

// DELETE functionality
if (isset($_GET['page']) && $_GET['page'] === 'products' && isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $product = R::load('products', $id);

    if ($product->id > 0) {
        R::trash($product);
        header("Location: admin.php?page=products&status=deleted&source=product");
        exit;
    } else {
        header("Location: admin.php?page=products&status=failed&source=product");
        exit;
    }
}

// UPDATE product
if (isset($_POST['update_product'])) {
    $id = intval($_POST['edit_id']);
    $product = R::load('products', $id);

    if ($product->id > 0) {
        foreach ([
                     'title', 'subtitle', 'description', 'position', 'experience', 'location', 'email', 'phone'
                 ] as $field) {
            $product->$field = $_POST[$field];
        }

        // Image upload
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $image = $_FILES[$field]['name'];
                $tmp = $_FILES[$field]['tmp_name'];
                $uploadDir = '../../../db/handlers/uploads/';
                if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
                $path = $uploadDir . basename($image);
                move_uploaded_file($tmp, $path);
                $product->$field = $image;
            }
        }

        R::store($product);
        header("Location: admin.php?page=products&status=updated&source=product");
        exit;
    }
}

// ADD NEW product
if (isset($_POST['add_product'])) {
    $product = R::dispense('products');

    foreach ([
                 'title', 'subtitle', 'description', 'position', 'experience', 'location', 'email', 'phone'
             ] as $field) {
        $product->$field = $_POST[$field];
    }

    $product->created_at = date('Y-m-d');

    $uploadDir = '../../../db/handlers/uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $field) {
        $image = $_FILES[$field]['name'];
        $tmp = $_FILES[$field]['tmp_name'];
        $path = $uploadDir . basename($image);
        move_uploaded_file($tmp, $path);
        $product->$field = $image;
    }

    R::store($product);
    header("Location: admin.php?page=products&status=success&source=product");
    exit;
}

$products = R::findAll('products', ' ORDER BY `id` ASC ');

$editMode = false;
$editProduct = null;

if (isset($_GET['edit'])) {
    $editId = intval($_GET['edit']);
    $editProduct = R::load('products', $editId);
    if ($editProduct->id) {
        $editMode = true;
    }
}
?>

<div class="container">

    <div class="d-flex justify-content-between mb-2 flex-row">
        <h2>All Products</h2>
        <button class="btn btn-dark" onclick="toggleForm()">+ Add Product</button>
    </div>

    <!-- Add Product Form (Initially hidden) -->
    <div class="card shadow-sm" id="productForm" style="display: none;">
        <div class="d-flex justify-content-between align-items-center card-header bg-dark text-white">
            <h5 class="mb-0"><?= $editMode ? 'Edit Product' : 'Add New Product' ?></h5>
            <button class="btn-close btn-close-white" onclick="toggleForm()" aria-label="Close"></button>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="edit_id" value="<?= $editMode ? $editProduct->id : '' ?>">

                <!-- Title & Subtitle -->
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter product title" required value="<?= $editMode ? htmlspecialchars($editProduct->title) : '' ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" name="subtitle" placeholder="Short subtitle or tagline" required value="<?= $editMode ? htmlspecialchars($editProduct->subtitle) : '' ?>">
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-2">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="2" placeholder="Enter detailed product description" required><?= $editMode ? htmlspecialchars($editProduct->description) : '' ?></textarea>
                </div>

                <!-- Other Fields -->
                <?php
                $placeholders = [
                    'position' => 'Enter product-related position e.g. Sales Manager',
                    'experience' => 'e.g. 5+ Years',
                    'location' => 'e.g. New York, USA',
                    'email' => 'e.g. contact@company.com',
                    'phone' => 'e.g. +123-456-7890'
                ];

                foreach ($placeholders as $field => $placeholder): ?>
                    <div class="mb-2">
                        <label class="form-label"><?= ucfirst($field) ?></label>
                        <input type="<?= ($field === 'email') ? 'email' : 'text' ?>" class="form-control"
                               name="<?= $field ?>"
                               placeholder="<?= $placeholder ?>"
                               required
                               value="<?= $editMode ? htmlspecialchars($editProduct->$field) : '' ?>">
                    </div>
                <?php endforeach; ?>

                <!-- Thumbnail Images -->
                <div class="row">
                    <?php foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $image): ?>
                        <div class="col-md-6 mb-2">
                            <label class="form-label"><?= ucwords(str_replace('_', ' ', $image)) ?></label>
                            <input class="form-control" type="file" name="<?= $image ?>" <?= $editMode ? '' : 'required' ?>>
                            <?php if ($editMode && !empty($editProduct->$image)): ?>
                                <img src="/assets/images/product_detail_page/<?= $editProduct->$image ?>" width="80" class="mt-1">
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button type="submit" name="<?= $editMode ? 'update_product' : 'add_product' ?>" class="btn btn-primary mt-2 w-100">
                    <?= $editMode ? 'Update Product' : 'Submit Product' ?>
                </button>
            </form>

        </div>

    </div>

    <!-- Product Table -->
    <div class="table-responsive" id="productTable">
        <table class="table table-bordered table-hover align-middle bg-white">
            <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Description</th>
                <th>Position</th>
                <th>Experience</th>
                <th>Location</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach ($products as $product): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><img src="/assets/images/product_detail_page/<?= $product->image_1 ?>" width="80"></td>
                    <td><?= $product->title ?></td>
                    <td><?= $product->subtitle ?></td>
                    <td><?= $product->description ?></td>
                    <td><?= $product->position ?></td>
                    <td><?= $product->experience ?></td>
                    <td><?= $product->location ?></td>
                    <td><?= $product->email ?></td>
                    <td><?= $product->phone ?></td>
                    <td class="text-center">
                        <a href="?page=products&delete=<?= $product->id ?>" class="btn btn-sm btn-danger"
                           onclick="return confirm('Are you sure to delete this product?')">Delete</a>
                        <a href="?page=products&edit=<?= $product->id ?>" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleForm() {
        const form = document.getElementById('productForm');
        const table = document.getElementById('productTable');

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
