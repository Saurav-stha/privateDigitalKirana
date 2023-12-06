<?php
    // if (isset($_POST['who']) && isset($_POST['pass']) && ($_POST['pass'])=="php123"){
    //     header("Location: homepage.php?name=".urlencode($_POST['who']));
    // }
    if (isset($_POST['cancel'])){
        header("Location: index.php");
    }
    $salt = 'XyZzy12*_';

    $stored_hash = '218140990315bb39d948a523d61549b4';  // Pw is php123

    $failure = false;

    // Check to see if we have some POST data, if we do process it
    if ( isset($_POST['who']) && isset($_POST['pass']) ) {
        if (strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1 ) {
            $failure = "User name and password are required";
        }
        // else if(strpos($_POST['who'], '@') == false){
        //     $failure = "Email must have an at-sign (@)";
        else {
            $check = hash('md5', $_POST['pass']);
            if ( $check == $stored_hash ) {
                header("Location: homepage.php?name=".urlencode($_POST['who']));
                error_log("Login success ".$_POST['who']);

                return;
            } else {

                $failure = "Incorrect password";
                error_log("Login fail ".$_POST['who']." $check");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoronoaSaurav's Login</title>
</head>
<body>
    <div class="container">
    <h1>Please Log In</h1>
    <?php
        if ($failure!=false){
            echo "<p style='color:red'>.$failure.</p>";
        }
    ?>
    <form method="POST">
        <label for="nam">User Name</label>
        <input type="text" name="who" id="nam"><br/>
        <label for="id_1723">Password</label>
        <input type="text" name="pass" id="id_1723"><br/>
        <input type="submit" value="Log In">
        <input type="submit" name="cancel" value="Cancel">
    </form>
</body>
</html>