
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fa fa-shopping-cart"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="profile.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="far fa-address-card"></i> Welcome <?php echo $_SESSION['username']  ?>
                    </h5>
                </a>
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="  fa fa-shopping-bag"></i> Cart
                       
                    </h5>
                </a>
                <a href="../logout.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="far fa-arrow-alt-circle-right "></i> Logout
                    </h5>
                </a>

            </div>
        </div>

    </nav>
</header>






