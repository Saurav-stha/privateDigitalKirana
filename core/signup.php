<?php
    if (isset($_POST['signup'])){
    require "./init.php";
    $firstname = $_POST["firstName"];
    $lastname=$_POST["lastName"];
    $contact =$_POST["phoneNumber"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST['confirmPassword'];
    
    $passwordHash = hash('md5', $_POST['password']);
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
            header("Location: ../login.php");
        }
    }
}