<?php
    require_once 'core/init.php';
    include 'includes/head.php';
    include 'includes/navigation.php';
?>
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

<?php include "includes/footer.php";?>




