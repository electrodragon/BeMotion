<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h4 class="mb-0">Add New Blog Post</h4>
        </div>

        <div class="card-body">
            <form action="/db/handlers/blog_handler.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="1" placeholder="Write blog content..." required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="image" name="image" required>
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="e.g. travel, food, tech" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="e.g. Pakistan, India" required>
                </div>

                <div class="mb-3">
                    <label for="created_at" class="form-label">Date</label>
                    <input type="date" class="form-control" id="created_at" name="created_at" required>
                </div>

                <button type="submit" name="add_blog" class="btn btn-primary w-100">Submit Blog</button>
            </form>
        </div>
    </div>
</div>