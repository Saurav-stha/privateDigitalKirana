<footer>
        <div class="footer_logos">
            <span><a href="" class="facebook-link">
                <i class="fa-brands fa-facebook footer-logo"></i>
            </a></span>
            <span><a href="" class="instagram-link">
                <i class="fa-brands fa-instagram footer-logo"></i>
            </a></span>
            <span><a href="" class="x-link">
                <i class="fa-brands fa-x-twitter footer-logo"></i>
            </a></span>
            <span><a href="" class="tiktok-link">
                <i class="fa-brands fa-tiktok footer-logo"></i>
            </a></span>
        </div>
        <div class="footer-navs">
            <a href="#" class="footer-home footer-nav-link">Home</a>
            <a href="#" class="footer-about footer-nav-link">About Us</a>
            <a href="#" class="footer-customer footer-nav-link">Customer Support</a>
        </div>
        <div class="footer-contact">
            <span class="footer-contact-items"><i class="fa-solid fa-mobile-screen"></i></i> +977 XXXXXXX </span>
            <span class="footer-contact-items"><i class="fa-solid fa-location-dot"></i> Newroad,Pokhara</span>
            <span class="footer-contact-items"><i class="fa-solid fa-envelope"></i> info@gmail.com</span>
        </div>
        <span class="copyright">Copyright © 2023 beasty corp</span>
    </footer>
    <script>
        let currentSlide = 1;
        const slideContainers = document.querySelectorAll('.slide-container');
        const dots = document.querySelectorAll('.dot');
        
        function nextSlide() {
            if (currentSlide < slideContainers.length) {
                currentSlide++;
            } else {
                currentSlide = 1;
                slideContainers[0].style.left = '0';
            }

            updateSlide();
        }

        function updateSlide() {
            slideContainers.forEach((container, index) => {
                if (index === currentSlide - 1) {
                    container.style.left = '0';
                    dots[index].classList.add('active');
                } else {
                    container.style.left = '100%';
                    dots[index].classList.remove('active');
                }
            });
        }

        setInterval(nextSlide, 8000); // Auto slideshow every 8 seconds with a seamless transition
    </script>
    </script>
    
</html>