<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="header">
        <nav class="nav_bar">
            <div class="logo_div"><img src="./assets/img/logo_updated.png" alt="" class="logo"></div>
            <input type="text" placeholder="Search the products">
            <button class="btn1"><img src="./assets/img/search.png" alt="search" height="10%" width="10%"></button>
            <div class="login_cart"> <span class="user_span"><i class="fa-solid fa-user user_icon" style="color: #ffffff; "></i><a href="login.php">Login</a></span>
                <span><a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a><sup>0</sup></span>
            </div>
        </nav>
    </div>

    <div class="categories">
        
        <a href="#">Grocery</a>
        <a href="#">Beverages</a>
        <a href="#">Meat</a>
        <a href="#">Desserts</a>
        <a href="#">Household items</a>
        <a href="#">Dairy</a>
        <a href="#">Oils</a>
        <a href="#">Cleaning Products</a>

    </div>
    <div class="slider">
        <div class="image-container">
            <div class="slide-container">
                <img src="./assets/img/grocery2.png" class="slide">
            </div>
            <div class="slide-container">
                <img src="./assets/img/grocery.png" class="slide">
            </div>
            <div class="slide-container">
                <img src="./assets/img/discount.jpg" class="slide">
            </div>
        </div>
        <div class="dots-container">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <!-- product view/edit part -->
    <div class="products">
        <h2>Today's Top picks</h2>
        <h3 class="colr">See more ></h3>
    </div>

    <div class="product-container">
        <div class="image-container1">
            <div class="detailing">
                <img src="./assets/Images/razor.png" alt="razor">
                <p>Razor</p>
                <p class="ok">Rs.120</p>
                <p class="ok" style="color: black;">Qty</p>
                <div class="option">
                    <button class="btn3">-</button>
                    <button class="btn2"></button>
                    <button class="btn3">+</button>
                </div>
            </div>
        </div>
        <div class="image-container1">
            <div class="detailing">
                <img src="./assets/Images/bread.png" alt="bread">
                <p>Bread</p>
                <p class="ok">Rs.60</p>
                <p class="ok" style="color: black;">Qty</p>
                <div class="option">
                    <button class="btn3">-</button>
                    <button class="btn2"></button>
                    <button class="btn3">+</button>
                </div>
            </div>
        </div>
        <div class="image-container1">
            <div class="detailing">
                <img src="./assets/Images/Cheetos.png" alt="cheetos">
                <p>Cheetos</p>
                <p class="ok">Rs.320</p>
                <p class="ok" style="color: black;">Qty</p>
                <div class="option">
                    <button class="btn3">-</button>
                    <button class="btn2"></button>
                    <button class="btn3">+</button>
                </div>
            </div>
        </div>
        <div class="image-container1">
            <div class="detailing">
                <img src="./assets/Images/milk.png" alt="milk">
                <p>milk</p>
                <p class="ok">Rs.80</p>
                <p class="ok" style="color: black;">Qty</p>
                <div class="option">
                    <button class="btn3">-</button>
                    <button class="btn2"></button>
                    <button class="btn3">+</button>
                </div>
            </div>
        </div>
        <div class="image-container1">
            <div class="detailing">
                <img src="./assets/Images/rice.png" alt="rice">
                <p>Rice</p>
                <p class="ok">Rs.70</p>
                <p class="ok" style="color: black;">Qty</p>
                <div class="option">
                    <button class="btn3">-</button>
                    <button class="btn2"></button>
                    <button class="btn3">+</button>
                </div>
            </div>
        </div>
    </div>

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
    
</body>

</html>




