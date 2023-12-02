<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
        ul,
        li,
        a {
            list-style: none;
            text-decoration: none;
        }
        
        .nav_bar {
            padding: 4px;
            padding-left: 25px;
            padding-right: 25px;
            background: #77E583;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            width: 200px;
        }
        
        .logo_div {
            display: inline;
        }
        
        .nav_bar input {
            border-radius: 20px;
            height: 45px;
            padding: 3px;
            font-size: 17px;
            border: none;
            color: #979797;
            width: 35%;
            padding-left: 20px;
        }
        
        .header .nav_bar input[type="text"]:active {
            border: none;
            outline: none;
        }
        
        input[type=text] {
            border: none;
            outline: none;
            font-size: 17px;
        }
        
        .login_cart span {
            color: #ffffff;
            font-size: 25px;
            margin: 10px;
        }
        .login_cart:hover{
            cursor: pointer;;
        }
        
        .login_cart span sup {
            position: relative;
            top: -10px;
        }
        
        .user_icon {
            margin-right: 20px;
        }
        
        .user_span {
            border-right: solid 1px rgb(236, 236, 236);
            padding-right: 20px;
            height: 90px;
        }
        .btn1{
            align-items: center;
            justify-content: center;
            position: relative;
            margin-left: -24%;
            margin-top: 0.3%;
            padding-right: 5%;
            border: none;
            background-color: transparent;
            cursor: pointer;
            opacity: 0.4;
            overflow: hidden;
        }
        .btn1:hover{
            opacity: 0.9;
        }
        
        .categories {
            background-color: rgb(255, 255, 255);
            padding: 15px;
            gap: 40px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            box-shadow: 0px 10px 16px 0px rgba(190, 190, 190, 0.75);
            -webkit-box-shadow: 0px 10px 16px 0px rgba(190, 190, 190, 0.75);
            -moz-box-shadow: 0px 10px 16px 0px rgba(190, 190, 190, 0.75);
        }
        
        .categories a {
            color: #666;
            font-size: 20px;
            font-style: normal;
            font-weight: 300;
            line-height: normal;
            letter-spacing: -0.6px;
        }
        
        .categories a :hover {
            transition: all;
        }
        .slider {
            width: 800px; 
            height: 600px; 
            margin: 0 auto;
            overflow: hidden;
            position: relative;
            padding: 20px; 
        }

        .image-container {
            width: 2400px; 
            background-color: none;
            height: 600px; 
            clear: both;
            position: relative;
            animation: slide 15s linear infinite;
        }

        .slide-container {
            float: left;
            margin: 0;
            padding: 0;
            width: 800px; 
            height: 450px;
        }

        .slide {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            position: relative;
        }

        .dots-container {
            text-align: center;
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #666;
            border-radius: 50%;
            display: inline-block;
            margin: 0 5px;
        }

        .dot.active {
            background-color: #fff;
        }

        .image-container {
            display: flex;
            justify-content: space-between;
        }

        @keyframes slide {
            0% {
                left: 0;
            }
            16.66% {
                left: 0;
            }
            33.33% {
                left: -800px;
            }
            50% {
                left: -800px;
            }
            66.67% {
                left: -1600px;
            }
            83.33% {
                left: -1600px;
            }
            100% {
                left: -2400px;
            }
        }
       </style>
</head>

<body>
    <div class="header">
        <nav class="nav_bar">
            <div class="logo_div"><img src="./logo_updated.png" alt="" class="logo"></div>
            <input type="text" placeholder="Search the products">
            <button class="btn1"><img src="search.png" alt="search" height="10%" width="10%"></button>
            <div class="login_cart"> <span class="user_span"><i class="fa-solid fa-user user_icon" style="color: #ffffff; "></i>Login</span>
                <span><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i><sup>0</sup></span>
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
                <img src="grocery2.png" class="slide">
            </div>
            <div class="slide-container">
                <img src="grocery.png" class="slide">
            </div>
            <div class="slide-container">
                <img src="discount.jpg" class="slide">
            </div>
        </div>
        <div class="dots-container">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
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

        setInterval(nextSlide, 4000); // Auto slideshow every 8 seconds with a seamless transition
    </script>
    </script>
    
</body>

</html>




