

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - E-commerce WEB</title>
    <!--Bootstrap Style Link-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Custom Style Link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productStyle.css">
    <link rel="stylesheet" href="product1.css">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="index.css">

    <!--Font Awesome Style Link-->
    <link rel="stylesheet" href="CSS/all.css">

    <!--Google Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    
    <!--Top bar-->
    <!-- header part code -->
    <div class="navbar navbar-light navbar-expand-md" style="background-color: rgb(255,227,225);">
        <h1 class="navbar-brand"><a class="text-decoration-none" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; cursor:pointer;"><i class="fab fa-bootstrap text-danger mr-2"></i><span style="color: rgb(231,150,130);" class="b_1">BHAR</span><span style="color: rgb(90,75,73);" class="b_1">GAV'S</span></a></h1>
    </div>


    <!--Front Two Column-->
    <div class="container-fluid" style="background-color: rgb(255,227,225); background: radial-gradient(#fff,#ffd6d6);">
        <div class="container">
            <div class="row c_1">
                <div class="col-12 col-md-6">
                    <img src="images/image1.png" class="img-fluid d-block img_6">
                </div>
                <div class="col-12 col-md-6 my-auto form_container">
                    <div class="containers">
                        <div class="d-flex justify-content-center h-100">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Sign In</h3>
                                    <div class="d-flex justify-content-end social_icon">
                                        <span><a href="https://www.facebook.com" class="text-decoration-none text-warning"><i class="fab fa-facebook-square"></i></a></span>
                                        <span><a href="https://myaccount.google.com" class="text-decoration-none text-warning"><i class="fab fa-google-plus-square"></i></a></span>
                                        <span><a href="https://www.twitter.com" class="text-decoration-none text-warning"><i class="fab fa-twitter-square"></i></a></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="message.php" method="POST">
                                        <!-- <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="username">
                                            
                                        </div> -->
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                                            </div>
                                            <input type="email" autocomplete="off" name="mail" class="form-control" placeholder="email-id" required>
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="pass" class="form-control" placeholder="password" required>
                                        </div>
                                        
                                        <div class="row align-items-center remember">
                                            <input type="checkbox"><span class="remember_me">Remember Me</span> 
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Login" name="submit" class="btn float-right login_btn" style="position: relative; bottom: 28px;">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center links">
                                        Don't have an account?<a href="signUp.php">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal-->
    <?php
        include_once 'modal.php';
    ?>

    <!--Footer-->
    <footer style="background-color: rgb(1,0,1);">
        <div class="container pt-5" style="padding-bottom: 16px;">
            <div class="row c_6">
                <div class="col-12 col-sm-3 text-white">
                    <h4 class="mb-4">Download Our App</h4>
                    <p class="text-muted mb-4">Download App for Android and ios mobile phone.</p>
                    <div class="row c_9">
                        <div class="col-6 col-sm-6">
                            <a href="#google_play" data-toggle="modal" class="text-decoration-none"><img src="images/play-store.png" class="img-fluid d-block"></a>
                        </div>
                        <div class="col-6 col-sm-6">
                            <a href="#google_play" data-toggle="modal" class="text-decoration-none"><img src="images/app-store.png" class="img-fluid d-block img_5"></a>
                        </div>
                    </div>      
                </div>
                <div class="col-12 col-sm-3 text-white text-center c_10">
                    <h1 class="footer-brand mb-4"><a class="text-decoration-none text-white" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; cursor:pointer;"><i class="fab fa-bootstrap mr-2"></i><span class="b_2">BHAR</span><span class="b_2">GAV'S</span></a></h1>
                    <p class="text-muted mb-4">our Purpose is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="col-12 col-sm-3 text-white text-center">
                    <h4 class="mb-4">Useful Links</h4>
                    <p class="c_11">
                        <a href="#google_play" data-toggle="modal" class="text-decoration-none text-muted">Coupons</a><br>
                        <a href="#google_play" data-toggle="modal" class="text-decoration-none text-muted">Blog Post</a><br>
                        <a href="#google_play" data-toggle="modal" class="text-decoration-none text-muted">Return Policy</a><br>
                        <a href="#google_play" data-toggle="modal" class="text-decoration-none text-muted">Join Affiliate</a>
                    </p>
                </div>
                <div class="col-12 col-sm-3 text-white text-center">
                    <h4 class="mb-4">Follow Us</h4>
                    <p class="c_11">
                        <a href="https://www.facebook.com/bhargav.sonagra" class="text-decoration-none text-muted">Facebook</a><br>
                        <a href="https://twitter.com/BhargavSonagar2" class="text-decoration-none text-muted">Twitter</a><br>
                        <a href="https://www.instagram.com/sonagara_bhargav/" class="text-decoration-none text-muted">Instagram</a><br>
                        <a href="https://www.youtube.com/channel/UC-rA33_DgEXdazJMwTIPaSw" class="text-decoration-none text-muted">Youtube</a><br>
                        <a href="https://www.linkedin.com/in/bhargavsonagara/" class="text-decoration-none text-muted">Linkedin</a>
                    </p>
                </div>
            </div>
            <hr class="hr_2">
            <p class="text-center text-muted p_1 pb-1" style="margin-bottom: -8px">Copyright &copy; 2020 - Designed and Developed by <a class="text-decoration-none text-muted">BHARGAV'S</a></p>
        </div>
    </footer>


    <!--jquery Script Link-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <!--Popper Script Link-->
    <script src="js/popper.js"></script>
    
    <!--Bootstrap JS Script Link-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 
