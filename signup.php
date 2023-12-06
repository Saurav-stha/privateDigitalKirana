<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
    <div class="login-file">
        <div class="close-button" onclick="closeLogin()">✖</div>
        <div class="image-container">
            <img src="login.png" alt="login">
        </div>
        <div class="login-content">
            <h2 style="color: #2a2a2a; font-family: Open sans serif; font-weight: 200;">Sign Up</h2>
            <p>First Name</p>
            <input type="text">
            <p>Last Name</p>
            <input type="text">
            <p>Phone Number</p>
            <input type="number">
            <p>Email</p>
            <input type="email">
            <p>Password</p>
            <input type="password">
            <p>Confirm Password</p>
            <input type="password">
            <p>By Clicking "Sign Up", I agree to <a href="#">Terms of Services and Privacy Policy</a></p>
            <div class="signup">
                <input type="submit" value="Sign Up" style="height: 46px; font-size: 19px; background-color:#45d84b; color: white;">
            </div>
            <p>Already Have an Account?<a href="#">Login Now</a></p>
        </div>
    </div>

    <script>
        function closeLogin() {
            document.querySelector(".login-file").style.display = "none";
        }
    </script>
</body>
</html>