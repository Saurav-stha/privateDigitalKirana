    <!-- footer -->
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
        const image = document.querySelectorAll('.slide-container img');
        let index = 0;

        function showNextImage(){
            image[index].style.opacity = 0;
            index = (index + 1) % image.length;
            image[index].style.opacity = 1;
        }

        setInterval(showNextImage, 4000);

        // popup
        document.querySelector("#show-login").addEventListener("click",function(){
  document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click",function(){
  document.querySelector(".popup").classList.remove("active");
});
    </script>
</body>
</html>