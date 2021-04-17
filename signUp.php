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
    <?php
        include_once 'header.php';
    ?>
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
                                            <input type="text" placeholder="Name" autocomplete="off" name="Name" class="w-100">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-envelope-square"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="email" autocomplete="off" placeholder="Email-Id" name="email" class="w-100">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="password" placeholder="Password" name="pass" class="w-100">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1 bg-warning" style="border-radius: 10%;">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <div class="col-8 pl-0">
                                            <input type="password" placeholder="Repeat Password" name="pass1"class="w-100">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <p>By creating an account you agree to our <a href="">Terms & Privacy</a>.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 pl-0 pr-0">
                                            <button type="button" class="btn btn-danger w-100">Cancel</button>
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
                    header("Location:account.php");
                    echo "
                            <script>
                                alert('Your Account is Created.');
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
