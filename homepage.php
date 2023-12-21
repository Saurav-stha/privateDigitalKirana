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
            <div class="logo_div"><img src="./assets/Images/logo_updated.png" alt="" class="logo"></div>
            <input type="text" placeholder="Search the products">
            <button class="btn1"><img src="./assets/Images/search.png" alt="search" height="10%" width="10%"></button>
            <div class="login_cart"> <span class="user_span"><i class="fa-solid fa-user user_icon" style="color: #ffffff; "></i><?php session_start(); echo $_SESSION['username']; ?></span>
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
        <a href="./core/logout.php">Logout</a> <!-- NOT SUPPOSED TO BE HERE -->
    </div>
    <div class="slider">
        <div class="image-container">
            <div class="slide-container">
                <img src="./assets/Images/grocery1.png" class="slide">
            </div>
            <div class="slide-container">
                <img src="./assets/Images/grocery.png" class="slide">
            </div>
            <div class="slide-container">
                <img src="./assets/Images/discount.jpg" class="slide">
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
<?php 
include "includes/footer.php";?>
