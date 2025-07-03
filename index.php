<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeMotion - Automotive Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <?php include('includes/hero.php'); ?>
    <?php include('includes/features.php'); ?>
    <?php include('includes/explore.php'); ?>
    <?php include('includes/dealership.php'); ?>
    <?php include('includes/team.php'); ?>
    <?php include('includes/benefits.php'); ?>
    <?php include('includes/contact.php'); ?>
    <?php include('includes/footer.php'); ?>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>