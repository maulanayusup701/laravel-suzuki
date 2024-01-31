<script src="{{ asset('front-end/owl/assets/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('front-end/owl/owl-carousel/owl.carousel.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            $("#carousell").owlCarousel({
                items: 1,
                loop: true,
                autoPlay: true,
                goToFirst: true,
                goToFirstSpeed: 1000,

                // Responsive
                responsive: true,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [980, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1]

            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="{{ asset('front-end/owl/assets/js/bootstrap-collapse.js') }}"></script>
    <script src="{{ asset('front-end/owl/assets/js/bootstrap-transition.js') }}"></script>
    <script src="{{ asset('front-end/owl/assets/js/bootstrap-tab.js') }}"></script>

    <script src="{{ asset('front-end/owl/assets/js/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('front-end/owl/assets/js/application.js') }}"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById('navbar');
    const brandLogo = document.getElementById('brand-logo');

    window.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;

        if (scrollPosition > 0) {
            // Adding classes
            navbar.classList.remove('opacity-60');
            navbar.classList.add('opacity-100');
            brandLogo.classList.add('text-white');
        } else {
            // Removing classes
            navbar.classList.add('opacity-60');
            navbar.classList.remove('opacity-100');
            brandLogo.classList.remove('text-white');
        }
    });
});

</script>
@livewireScripts
</body>

</html>