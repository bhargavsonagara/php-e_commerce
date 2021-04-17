

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
    <link rel="stylesheet" href="account.css">

    <!--Font Awesome Style Link-->
    <link rel="stylesheet" href="CSS/all.css">

    <!--Google Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    
    <!--Top bar-->
    <!-- header part code -->
    <?php
        include_once 'header.php';
    ?>

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
                                            <input type="email" autocomplete="off" name="mail" class="form-control" placeholder="email-id">
                                        </div>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" name="pass" class="form-control" placeholder="password">
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
                                        Don't have an account?<a href="signup.php">Sign Up</a>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a href="#">Forgot your password?</a>
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
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="card">
                <div class="card-body text-center modals bg-white">
                    <i class="fas fa-quote-left fa-2x mb-3"></i>
                    <p class="text-muted">I am currently pursuing my Bachelor of Technology in Computer Science and looking for carrer in the field of Computer Science and Technology. I mostly work as a front end web developer well known on HTML5, CSS3, Bootstrap and JavaScript languages.</p>
                    <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star mb-4"></i>
                    <img src="images/bhargav.jpg" class="img-fluid d-block mx-auto w-25 mb-1">
                    <p class="font-weight-bold text-dark">Bhargav Sonagara</p>
                </div>
            </div>
		</div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="google_play" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Sorry...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Our Team Working On It.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

    <!--Footer-->
    <?php
        include_once 'footer.php';
    ?>


    <!--jquery Script Link-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <!--Popper Script Link-->
    <script src="js/popper.js"></script>
    
    <!--Bootstrap JS Script Link-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 
