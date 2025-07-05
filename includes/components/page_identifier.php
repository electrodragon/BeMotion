<?php function pageIdentifier($title = 'No Title') { ?>
<section class="page-identifier position-relative text-white d-flex align-items-center justify-content-center">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container text-center position-relative z-2 animate__animated animate__pulse animate__pulse animate__infinite animate__slower">
        <h1 class="display-4 fw-bold"><?php echo $title ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="#" class="text-light text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page"><?php echo $title ?></li>
            </ol>
        </nav>
    </div>
</section>
<?php } ?>
