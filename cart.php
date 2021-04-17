<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - E-commerce WEB</title>
    <!--Bootstrap Style Link-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Custom Style Link-->
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
    <div class="container total">
        <div class="row" style="background-color: rgb(255,97,55);">
            <div class="col-6 col-sm-6">
                <p class="text-white title">Product</p>
            </div>
            <div class="col-6 col-sm-6 text-right">
                <div class="row">
                    <div class="col-6 col-sm-6 text-left">
                        <p class="text-white title">Quantity</p>
                    </div>
                    <div class="col-6 col-sm-6">
                        <p class="text-white title">Subtotal</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-sm-6">
                <div class="row" id="remove">
                    <div class="col-12 col-sm-4">
                        <img src="images/gallery-1.jpg" class="img-fluid d-block w-75 img_2">
                    </div>
                    <div class="col-12 col-sm-8 mt-2">
                        <p class="text-muted ca_1">Red Printed T-Shirt</p>
                        <p class="text-muted">Price: $50.00</p>
                        <small><a href="" style="color: #ff523b;" class="text-decoration-none textDeco">Remove</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 text-right">
                <div class="row inp_1">
                    <div class="col-6 col-sm-6 text-left">
                        <input type="number" value="1" class="inp mb-4 mt-3">
                    </div>
                    <div class="col-6 col-sm-6 my-auto">
                        <p class="text-muted ca_2">$50.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-sm-6">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <img src="images/product-2.jpg" class="img-fluid d-block w-75 img_2">
                    </div>
                    <div class="col-12 col-sm-8 mt-3">
                        <p class="text-muted ca_1">HRX Sports Shoes</p>
                        <p class="text-muted">Price: $75.00</p>
                        <small><a href="" class="text-decoration-none" style="color: #ff523b;">Remove</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 text-right">
                <div class="row inp_2">
                    <div class="col-6 col-sm-6 text-left">
                        <input type="number" value="1" class="inp mb-4 mt-3">
                    </div>
                    <div class="col-6 col-sm-6 my-auto">
                        <p class="text-muted ca_2">$75.00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-sm-6">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <img src="images/product-3.jpg" class="img-fluid d-block w-75 img_2">
                    </div>
                    <div class="col-12 col-sm-8 mt-2">
                        <p class="text-muted ca_1">HRX Gray Trackpants</p>
                        <p class="text-muted">Price: $45.00</p>
                        <small><a href="" style="color: #ff523b;" class="text-decoration-none">Remove</a></small>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 text-right">
                <div class="row inp_3">
                    <div class="col-6 col-sm-6 text-left">
                        <input type="number" value="1" class="inp mb-4 mt-3">
                    </div>
                    <div class="col-6 col-sm-6 my-auto">
                        <p class="text-muted ca_2">$45.00</p>
                    </div>
                </div>
                <hr class="mt-5 w-100">
                <div class="row">
                    <div class="col-6 col-sm-6 text-left">
                        <p class="text-dark ca_2">Subtotal</p>
                    </div>
                    <div class="col-6 col-sm-6">
                        <p class="text-muted ca_2">$200.00</p>
                    </div>
                    <div class="col-6 col-sm-6 text-left">
                        <p class="text-dark ca_2">Tax</p>
                    </div>
                    <div class="col-6 col-sm-6">
                        <p class="text-muted ca_2">$35.00</p>
                    </div>
                    <div class="col-6 col-sm-6 text-left">
                        <p class="text-dark ca_2">Total</p>
                    </div>
                    <div class="col-6 col-sm-6">
                        <p class="text-muted ca_2">$230.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Modal-->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="card">
                <div class="card-body text-center modals">
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
    <script>
        var textDeco = document.getElementsByClassName("textDeco");
        textDeco.onclick() = function(){
            textDeco.style.display = "none";
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
