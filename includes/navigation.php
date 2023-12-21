<div class="navbar-container">
        <div id="logo-container">
            <img src="logo.png" alt="logo" id="logo">
        </div>
        <span id="search-bar">
            <i id="search-icon" class="fas fa-search"></i>
            <input type="text" placeholder="Search for products">
        </span>
        <div class="login-content">
            <span><i id="user-icon" class="fa-solid fa-user"></i></span>
            <!-- <span id="login-button"> -->
                <!-- popup login -->
                <div class="center">
  <button id="show-login"><a href="#" id="button" class="button">Login</a></button>
</div>
            <!-- </span> -->
            <span id="bar-line"></span>
            <span><i id="shopping-cart" class="fa-solid fa-cart-shopping"></i><sup>0</sup></span>
        </div>
    </div>
    <div class="nav-content">
        <span><a href="#">Grocery</a></span>
        <span><a href="#">Beverages</a></span>
        <span><a href="#">Meat</a></span>
        <span><a href="#">Desserts</a></span>
        <span><a href="#">Household Items</a></span>
        <span><a href="#">Dairy</a></span>
        <span><a href="#">Personal Care</a></span>
    </div>

    <!-- Modal Section -->

<div class="bg-modal">
	<div class="modal-contents">

		<div class="close">+</div>
		<img src="https://richardmiddleton.me/comic-100.png" alt="">

        <form method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <h3><span><p><a href="">Forgot password?</a></p></span></h3>
                <input type="submit" name="submit" value="Login" id="submit-button">
                <span><p>Don't have an account?<a href="signup.php">Create now</a></p></span>
            </form>

	</div>
    <script>
        document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
</script>