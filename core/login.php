<?php
if (isset($_POST['login'])){

            $username = $_POST['username'];
            $password = $_POST['password'];
            $hash = hash('md5', $_POST['password']);
            require_once "./init.php";
            $sql = "SELECT * from customers where username ='$username'";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
            
            if($user){
                if (strcmp($hash,$user["pwd"])==0){
                    // echo "hre";
                    session_start();
                    $_SESSION['username']=$user['username'];
                    header("Location: ../homepage.php");
                    die();
                    
                }else{
                    die("Wrong password");
                }
            }else{
                die("No such customers with that username.");
            }

        }