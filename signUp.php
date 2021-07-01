<?php
    include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - E-commerce WEB</title>
    <!--Bootstrap Style Link-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Custom Style Link-->
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productStyle.css">
    <link rel="stylesheet" href="product1.css">
    <link rel="stylesheet" href="cart.css">

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
                <div class="col-12 col-md-6 my-auto">
                    <img src="images/image1.png" class="img-fluid d-block img_6">
                </div>
                
                <div class="col-12 col-md-6 my-auto">
                    
                    <div class="container signUpContainer card">
                        <p class="signup_head">Please fill in this form to create an account.</p>
                        <hr>
                            <div class="card-body">
                                <form action="signUp.php" method="post">
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-envelope-square"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="text" placeholder="Name" autocomplete="off" name="Name" class="w-100" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-envelope-square"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="email" autocomplete="off" placeholder="Email-Id" name="email" class="w-100" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="password" placeholder="Password" name="pass" class="w-100" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="password" placeholder="Repeat Password" name="pass1"class="w-100" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <p>By creating an account you agree to our <a href="">Terms & Privacy</a>.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 pl-0 pr-0">
                                            <button type="button" class="btn btn-danger w-100" onclick="cancel()">Cancel</button>
                                        </div>
                                        <div class="col-6 pl-0 pr-0">
                                            <button type="submit" name="submit" class="btn btn-success w-100">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
<?php
        if(isset($_POST['submit']))
        {
            $Name = $_POST['Name'];
            $Email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass1 = $_POST['pass1'];
            if($pass==$pass1)
            {
                $query = "INSERT INTO users (`Name`,`Email`,`Password`) VALUES ('$Name','$Email','$pass')";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo "
                    <script>
                    alert('Your Account is Created.');
                    window.location.href = 'index.php';
                    </script>
                    ";
                        
                }
            }
            else {
                
            echo '
            <script>
            alert("mismatch password");
            </script>
            ';
            }
        }
?>

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

    <script>
        const cancel = ()=>{
            window.location.href = "index.php"
        }
    </script>

    <!--jquery Script Link-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <!--Popper Script Link-->
    <script src="js/popper.js"></script>
    
    <!--Bootstrap JS Script Link-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 
