<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        mirror: false,  // no animation on scroll-up
        once: true
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
<!-- ✅ Add this before closing </body> -->
<!--<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.9/glider.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Glider(document.querySelector('.company-cards'), {
            slidesToShow: 'auto',
            slidesToScroll: 1,
            draggable: true,
            arrows: false, // 🔥 Disable arrows
            scrollLock: true,
        });
    });
</script>

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
