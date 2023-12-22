<?php
if (!isset($_SESSION)){
    session_start();
    if (isset($_SESSION['username'])){
        header("Location: homepage.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 3;
        }
        .login-container{
            position: fixed;
            width: 70%;
            border-radius: 10px;
            background-color: white;
            margin: 12% 0 0 15%;
            display: inline-flex;
            box-shadow: 2px 4px 10px 2px  rgba(0, 0, 0, 0.1);
            visibility: collapse;
            z-index: 4;
        }
        .close-button{
            position: relative;
            float: right;
            padding-right: 1%;
            padding-top: .5%;
            font-weight: 200;
            font-size: 110%;
            color: rgb(73, 72, 72);
            cursor: pointer;
        }
        .image-content{
            width: fit-content;
            justify-content: flex-start;
            margin-left: 2%;
        }
        .image-content img{
            height: 100%;   
            width: 100%;
        }
        .login-content{
            position: relative;
            width: 50%;
        }
        .login-content h1{
            margin: 10% 0 0 0;
            font-family: sans-serif;
            font-weight: 100;
            color: rgb(46, 46, 46);
        }
        .login-content input{
            display: block;
            top: 100px;
            width: 94%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #bdbdbd;
            outline: none;
            margin: 10% 0 -2% 0;
            padding-left: 20px;
            background-color: #f7f7f7;
        }
        #password-reset{
            margin: 3% 1% 0 0;
            float: right;
        }
        #login-field{
            width: 99%;
            border: none;
            background-color: #45d84b;
            color: white;
            font-family: sans-serif;
            font-size: 105%;
            align-items: center;
        }
        #create-id{
            position: relative;
            margin: 3% 0 0 0;
            color: #817F7F;
        }   
        .navbar{
            position: relative;
            width: 100%;
        }
        .navbar-head{
            position: relative;
            width: 100%;
            background-color: #77e583;
            display: inline-flex;
            align-items: center;
        }
        #logo-container{
            position: relative;
            height: 90px;
        }
        #logo-container img{
            height: 100%;
        }
        #search-bar{
            margin-left: 15%;
            display: inline-flex;
            border: 1px solid white;
            width: 40%;
            background-color: white;
            border-radius: 20px;
        }
        #search-bar input{
            width: 90%;
            height: 40px;  
            border-radius: 8px; 
            border: none;
            outline: none;
            padding-left: 2%;
        }
        #search-icon{
            margin-top: 1.99%;
            margin-left: 3%;
            cursor: pointer;
        }
        .user-content {
            position: relative;
            display: flex;
            background-color: transparent;
            margin-left: 6rem;
            width: 15rem;
            justify-content: space-evenly;
        }
        #bar-line {
            height: 3.5rem;
            border: 2px solid white;
            margin: 0.7rem 0 0 0;
        }
        #user-icon,
        #shopping-cart {
            font-size: 200%;
            color: aliceblue;
            margin: 63% 0 0 0;
            cursor: pointer;
        }
        #login-button {
            font-weight: 200;
            font-size: 150%;
            margin: 1.5rem 0 0 0;
            color: white;
            cursor: pointer;
        }
        sup {
            position: absolute;
            font-weight: 300;
            font-size: 150%;
            color: white;
        }
        .nav-content {
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            height: 3rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: -2px;
        }
        .nav-content span {
            margin: 1rem;
        }
        .nav-content span a {
            text-decoration: none;
            padding: 1rem;
            font-size: 1.3rem;
            text-align: center;
            color: #666666;
        }
        .slide-container {
            position: relative;
            width: 75rem;
            border: none;
            margin: 2% 0 0 11%;
            display: inline-flex;
            height: 31.3rem;
            overflow: hidden;
        }
        .slide-container img {
            position: absolute;
            transition: 1s;
            width: 100%;
        }
        .promo-image{
            position: absolute;
            width: 75rem;
            margin-right: 10rem;
            margin-left: 10rem;
            height: fit-content;
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            justify-content: space-between;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.5);
        }
        .promo-image span{
            height: 13rem;
            width: 20rem;
        }
        .promo-image span img{
            position: relative;
            height: 100%;
        }
        .promo-image  span p{
            font-weight: 200;
            font-size: 3rem;
            color: #1d4151;
        }
        .button-part{
            position: relative;
        }
        #grocery1{
            position: relative;
            margin-left: 4rem;
        }
        .shop-now span{
            height: fit-content;
        }
        .shop-now{
            position: relative;
            display: flex;
        }
        .shop-now  input{
            border: none;
            border-radius: 1rem;
            background-color: #43d449;
            width: 10rem;
            font-size: 1.6rem;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="login-container">
        <div class="image-content">
            <img src="./assets/Images/Products/login.png" alt="LoginPicture">
        </div>
            
        <div class="login-content">
            <h1>Welcome Back,</h1>
            <form action="./core/login.php" method="post">
                <label for="Username"></label>
                <input type="text" placeholder="Username" name="username">
                <label for="Password"></label>
                <input type="password" placeholder="Password" name="password">
                <p id="password-reset" style="color: #817F7F;">Forget Password?</p>
                <input type="submit" value="Login" id="login-field" name="login">
                <p id="create-id">Don't have an account? <b style="color: black;">Create now</b></p>
            </form>
        </div>
        <div class="close-button" onclick="closeLogin()">X</div>
    </div>
    <div class="navbar">
        <div class="navbar-head">
            <div id="logo-container">
                <img src="./../Assets/Images/Products/logo.png" alt="Logo">
            </div>
            <div id="search-bar">
                <i id="search-icon" class="fas fa-search"></i>
                <input type="text" placeholder="Search for products">
            </div>
            <div class="user-content">
                <span><i id="user-icon" class="fa-solid fa-user"></i></span>
                <span id="login-button" onclick="toggleLoginPopup()">Login</span>
                <span id="bar-line"></span>
                <span><i id="shopping-cart" class="fa-solid fa-cart-shopping"></i><sup>0</sup></span>
            </div>
        </div>
        <nav class="nav-content">
            <span><a href="#">Grocery</a></span>
            <span><a href="#">Beverages</a></span>
            <span><a href="#">Meat</a></span>
            <span><a href="#">Desserts</a></span>
            <span><a href="#">Household Items</a></span>
            <span><a href="#">Dairy</a></span>
            <span><a href="#">Personal Care</a></span>
        </nav>
    </div>
    <section>
        <div class="slide-container">
            <img src="https://picsum.photos/id/236/1000/500" alt="grocery" class="slider">
            <img src="https://picsum.photos/id/237/1000/500" alt="discount" class="slider">
            <img src="https://picsum.photos/id/238/1000/500" alt="discount" class="slider">   
        </div>
        <div class="promo-image">
            <span><img src="./../Assets/Images/Products/products.png" alt="grocery" id="grocery"></span>
            <div class="button-part">
                <span><p>All your essential just one</p></span>
                <div class="shop-now">
                    <span><p>CLICK AWAY</p></span>
                    <input type="submit" value="SHOP NOW">
                </div>
            </div>
            <span><img src="./../Assets/Images/Products/grocery1.png" alt="grocery1" id="grocery1"></span>
        </div>
    </section>
    <script>
        function closeLogin() {
            const overlay = document.getElementById("overlay");
            const loginBox = document.querySelector(".login-container");

            overlay.style.display = "none";
            loginBox.style.visibility = "hidden";   
        }
        
        function toggleLoginPopup() {
            const overlay = document.getElementById("overlay");
            const loginBox = document.querySelector(".login-container");

            if (loginBox.style.visibility === "hidden" || loginBox.style.visibility === "") {
                overlay.style.display = "block";
                loginBox.style.visibility = "visible";
            } else {
                overlay.style.display = "none";
                loginBox.style.visibility = "hidden";
            }
        }
        const image = document.querySelectorAll('.slide-container img');
        let index = 0;

        function showNextImage(){
            image[index].style.opacity = 0;
            index = (index + 1) % image.length;
            image[index].style.opacity = 1;
        }
        setInterval(showNextImage,4000);
    </script>
    
</body>
</html>