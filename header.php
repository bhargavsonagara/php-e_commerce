   
    <!--Top bar-->
    <div class="navbar navbar-light navbar-expand-md" style="background-color: rgb(255,227,225);">
        <h1 class="navbar-brand"><a href="index.php" class="text-decoration-none" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><i class="fab fa-bootstrap text-danger mr-2"></i><span style="color: rgb(231,150,130);" class="b_1">BHAR</span><span style="color: rgb(90,75,73);" class="b_1">GAV'S</span></a></h1>
        <button type="button" class="navbar-toggler" data-target="#my_bar" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="my_bar">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="#exampleModalCenter1" class="nav-link" data-toggle="modal">About</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <?php
                
                    if(isset($_SESSION['user']))
                    {
                        echo '<li class="nav-item"><a href="logout.php" class="nav-link">'.$_SESSION["user"].'</a></li>';
                    } 
                    else {
                        echo '<li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>';
                    }   
                ?>
                
                <a href="cart.php"><img src="images/cart.png" class="img-fluid img_1 d-md-block d-none mt-1"></a>
            </ul>
        </div>
        <a href="cart.php"><img src="images/cart.png" class="img-fluid img_1 mt-1 d-md-none c_12"></a>
    </div>