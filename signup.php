<?php 
session_start();
if (isset($_SESSION['user'])){
    header("Location: index.php");
}
// global $rowCount,$errors;

// error_reporting(0);
?>
        
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
            <img src="./assets/Images/login.png" alt="">
        </div>

        <div class="login-content">
            <h2 style="color: #2a2a2a; font-family: 'Open Sans', sans-serif; font-weight: 200;">Sign Up</h2>
            <?php
            if (isset($_POST['submit'])){
            require "./database.php";
            $firstname = $_POST["firstName"];
            $lastname=$_POST["lastName"];
            $contact =$_POST["phoneNumber"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmPassword = $_POST['confirmPassword'];
            
            $passwordHash = password_hash($password,PASSWORD_DEFAULT);
            $errors = array();
            
            $sql = "SELECT * FROM customers WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);
            $rowCount = mysqli_num_rows($result);
            
            if ($rowCount>0){
                array_push($errors,"Email already exists.");
            }
            if (count($errors)>0){
                foreach($errors as $error){
                    echo "<script>alert('$error');</script>";            
                }
            }
            else{
                $sql = "INSERT INTO customers (fname,lname,contact,email,username,pwd) VALUES (?,?,?,?,?,?)";//$firstname','$lastname','$contact','$email','$username','$password');
                $stmt = mysqli_stmt_init($conn);
                $prepStmt = mysqli_stmt_prepare($stmt,$sql);
                if (!$prepStmt){
                    echo "<script>alert('Having some problems with server.')</script>";// havign problems
                }else{
                    mysqli_stmt_bind_param($stmt,"ssisss",$firstname,$lastname,$contact,$email,$username,$passwordHash); // s for string i for int
                    mysqli_stmt_execute($stmt);
                    header("Location: login.php");
                }
            }
        }
        ?>
            <form method="POST" action="signup.php">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
                
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" required>

                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>

                <p>By clicking "Sign Up," I agree to <a href="#">Terms of Services and Privacy Policy</a></p>
                <div class="signup">
                    <input type="submit" name ="submit" value="Sign Up" style="height: 46px; font-size: 19px; background-color:#45d84b; color: white;">
                </div>
            </form>
            <p>Already have an account? <a href="./login.php">Login Now</a></p>
        </div>
    </div>


    <script>
        function closeLogin() {
            document.querySelector(".login-file").style.display = "none";
        }
    </script>
</body>
</html>