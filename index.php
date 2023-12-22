<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="navbar-container">
        <div id="logo-container">
            <img src="logo.png" alt="logo" id="logo">
        </div>
        <span id="search-bar">
            <i id="search-icon" class="fas fa-search"></i>
            <input type="text" placeholder="Search for products">
        </span>
        <div class="login-content">
            <span><i id="user-icon" class="fa-solid fa-user"></i></span>
            <!-- <span id="login-button"> -->
                <!-- popup login -->
            <div class="center">
                <button id="show-login"><a href="#" id="login-button" class="button">Login</a></button>
            </div>
            <span id="bar-line"></span>
            <span><i id="shopping-cart" class="fa-solid fa-cart-shopping"></i><sup>0</sup></span>
        </div>
    </div>
    <div class="nav-content">
        <span><a href="#">Grocery</a></span>
        <span><a href="#">Beverages</a></span>
        <span><a href="#">Meat</a></span>
        <span><a href="#">Desserts</a></span>
        <span><a href="#">Household Items</a></span>
        <span><a href="#">Dairy</a></span>
        <span><a href="#">Personal Care</a></span>
    </div>
    <div class="slide-container">
        <img src="https://picsum.photos/id/236/1000/500" alt="grocery" class="slider">
        <img src="https://picsum.photos/id/237/1000/500" alt="discount" class="slider">
        <img src="https://picsum.photos/id/238/1000/500" alt="discount" class="slider">   
    </div>
    <div class="promo-image">
        <span><img src="products.png" alt="grocery" id="grocery"></span>
        <div class="button-part">
            <span><p>All your essential just one</p></span>
            <div class="shop-now">
                <span><p>CLICK AWAY</p></span>
                <input type="submit" value="SHOP NOW">
            </div>
        </div>
        <span><img src="grocery1.png" alt="grocery1" id="grocery1"></span>
    </div>
    <div class="hot-topic">
        <span><p>Featured Products</p></span>
        <span><p style="font-weight: bold; color: #43d449; cursor: pointer;">See more ></p></span>
    </div>
    <div class="product-container">
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
        </div>
    </div>
    <div class="hot-topic" style="margin: 3rem 0 0 4.8rem;">
        <span><p>Daily Essentials</p></span>
        <span><p style="font-weight: bold; color: #43d449; cursor: pointer;">See more ></p></span>
    </div>
    <div class="product-container">
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
        </div>
    </div>
    <div class="categories-heading">
        <span><p>Shop by categories</p></span>
    </div>
    <div class="categories-container">
        <div class="categories-row">
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
        </div>
    </div>
    <div class="categories-container">
        <div class="categories-row">
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
            <span><img src="razor.png" alt=""><p>Categories Name</p></span>
        </div>
    </div>
    <div class="hot-topic" style="margin: 3rem 0 0 4.8rem;">
        <span><p>Daily Essentials</p></span>
        <span><p style="font-weight: bold; color: #43d449; cursor: pointer;">See more ></p></span>
    </div>
    <div class="product-container">
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
            
            
        </div>
        <div class="product-image">
            <span>
                <img src="razor.png" alt="">
            </span>
            <span id="product-name"><p>Product Name</p></span>
            <p id="shift">Rs.470</p>
            <div class="reactive-area">
                <p id="quantity">Qty</p>
                <div class="reactive-button">
                    <button id="decrease">-</button>
                    <button id="value-area">0</button>
                    <button id="increase">+</button>
                </div>
            </div>
            <div class="cart-button"><i id="shopping-carts" class="fa-solid fa-cart-shopping"></i><input type="submit" value="Add to cart" id="cart"></div>
        </div>
    </div>
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

<!-- Modal Section -->

    <div class="bg-modal">
	    <div class="modal-contents">

		<div class="close">+</div>
		<img src="https://richardmiddleton.me/comic-100.png" alt="">

        <form method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <h3><span><p><a href="">Forgot password?</a></p></span></h3>
                <input type="submit" name="submit" value="Login" id="submit-button">
                <span><p>Don't have an account?<a href="signup.php">Create now</a></p></span>
            </form>

	</div>
    
<script>
    document.getElementById('login-button').addEventListener("click", function() {
        document.querySelector('.bg-modal').style.display = "flex";
    });

    document.querySelector('.close').addEventListener("click", function() {
        document.querySelector('.bg-modal').style.display = "none";
    });

    const image = document.querySelectorAll('.slide-container img');
    let index = 0;

    function showNextImage(){
        image[index].style.opacity = 0;
        index = (index + 1) % image.length;
        image[index].style.opacity = 1;
    }

    setInterval(showNextImage, 4000);
</script>
</body>
</html>