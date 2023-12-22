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
    <title>Login</title>
    <style>
       * {
            padding: 0;
            margin: 0;
        }

        html {
            font-size: 16px; /* Set a base font size for rem units */
        }

        .login-container {
            position: relative;
            border: 0.03125rem solid none;
            border-radius: 0.9375rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 6.25rem 12.5rem;
            max-width: 68.75rem;
            width: 100%;
            box-shadow: 0 0.3125rem 0.625rem rgba(0, 0, 0, 0.1);
        }

        .close-button {
            position: absolute;
            top: 0.625rem;
            right: 0.625rem;
            cursor: pointer;
            font-size: 1.125rem;
            color: #555;
            font-weight: 800;
        }

        .image-content {
            flex: 0 0 32.8125rem;
            max-width: 32.8125rem;
        }

        .image-content img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .login-content {
            flex: 1;
            padding: 1.25rem;
            border: 0.03125rem solid none;
        }

        .login-content h1 {
            font-family: Open Sans;
            font-size: 2.5rem;
            font-weight: 400;
            line-height: 3.375rem;
            letter-spacing: -0.0375rem;
            text-align: left;
            margin-bottom: 1.25rem;
        }

        input {
            border: 0.03125rem solid black;
            width: calc(100% - 0.3125rem);
            box-sizing: border-box;
            margin-bottom: 0.9375rem;
            border-radius: 0.375rem;
            display: block;
            height: 2.8125rem;
        }

        #submit-button {
            text-align: center;
            background-color: #45d84b;
            color: white;
            height: 2.8125rem;
            border: none;
        }

        .login-content h3 span p {
            font-family: Open Sans;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.25rem;
            letter-spacing: -0.0375rem;
            text-align: right;
        }

        .login-content span a {
            text-decoration: none;
        }

        @media screen and (max-width: 48rem) {
            .login-container {
                margin: 1.875rem 0.625rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="close-button" onclick="closeLogin()">✕</div>
        <div class="image-content">
            <img src="./assets/Images/login.png" alt="">
        </div>
        <div class="login-content">
            <h1>Welcome Back,</h1>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <h3><span><p><a href="">Forgot password?</a></p></span></h3>
                <input type="submit" name="login" value="Login" id="submit-button">
                <span><p>Don't have an account?<a href="signup.php">Create now</a></p></span>
            </form>
        </div>
    </div>
    <?php 
        if (isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hash = hash('md5', $_POST['password']);
            require_once "./core/init.php";
            $sql = "SELECT * from customers where username ='$username'";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result,MYSQLI_ASSOC);

            if($user){
                if (strcmp($hash,$user["pwd"])==0){
                    session_start();
                    $_SESSION['username']=$user['username'];
                    header("Location: homepage.php");
                    die();
                }else{
                    die("Wrong password");
                }
            }else{
                die("No such customers with that username.");
            }

        }
?>
    <script>
        function closeLogin() {
            var loginContainer = document.querySelector(".login-container");
            loginContainer.style.display = "none";
        }
    </script>

</body>
</html>
<!-- include "includes/footer.php"; ?> -->