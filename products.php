<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - E-commerce WEB</title>
    <!--Bootstrap Style Link-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Custom Style Link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productStyle.css">

    <!--Font Awesome Style Link-->
    <link rel="stylesheet" href="CSS/all.css">

    <!--Google Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    
    <!--Top bar-->
    <?php
        include_once 'header.php';
    ?>
    <div class="container">
        <div class="row c_13">
            <div class="">
                <h4 class="font-weight-bold">All Products</h4>
            </div>
            <div class="ml-auto">
                <select class="dropdown btn btn-light" aria-haspopup="true" aria-labelledby="false">
                    <option value="" class="dropdown-item">Defaut Shorting</option>
                    <option value="" class="dropdown-item">Short by price</option>
                    <option value="" class="dropdown-item">Short by popularity</option>
                    <option value="" class="dropdown-item">Short by rating</option>
                    <option value="" class="dropdown-item">Short by sale</option>
                </select>
            </div>
        </div>
        <div class="row c_3 c_14">
            <div class="col-12 col-sm-3 mb-5">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0">
                        <div class="card-img">
                            <img src="images/product-1.jpg" class="img-fluid d-block w-100">
                        </div>
                        <p class="card-title text-muted mt-1">Red Printed T-Shirt</p>
                        <span class="star"><i class="fas fa-star mr-1 mb-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$50.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-5">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0">
                        <div class="card-img">
                            <img src="images/product-2.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">HRX Sports Shoess</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$75.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-5">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-3.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">HRX Gray Trackpants</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star-half-alt"></i></span>   
                        <p class="card-text text-muted mt-1">$45.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-5">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0">
                        <div class="card-img">
                            <img src="images/product-4.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Blue Printed T-Shirt</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$5.00</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

   
    <div class="container">
        <div class="row c_3">
            <div class="col-sm-3 mb-4">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-5.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Puma Gray Sports Shoes</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$95.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-4">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-6.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Black Printed T-Shirt</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star-half-alt"></i></span>   
                        <p class="card-text text-muted mt-1">$55.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-4">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-7.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">HRX Set of 3 Socks</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star-half-alt"></i></span>   
                        <p class="card-text text-muted mt-1">$30.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-4">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-8.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Black Fossil Watch</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$120.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-9.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Black Sportx Watch</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$135.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-10.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Black HRX Shoes</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star-half-alt"></i></span>   
                        <p class="card-text text-muted mt-1">$50.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-11.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">Gray Nike Shoes</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star-half-alt"></i></span>   
                        <p class="card-text text-muted mt-1">$55.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3 mb-5">
                <a href="product1.html" class="text-decoration-none">
                    <div class="card border-0">
                        <div class="card-img">
                            <img src="images/product-12.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">HRX Black Trackpants</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$75.00</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="pg_btn">
            <span>1</span>
            <span class="ml-2">2</span>
            <span class="ml-2">3</span>
            <span class="ml-2">4</span>
            <span class="ml-2">&#8594;</span>
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


    <!--jquery Script Link-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <!--Popper Script Link-->
    <script src="js/popper.js"></script>
    
    <!--Bootstrap JS Script Link-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 
