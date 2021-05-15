<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce WEB</title>
    <!--Bootstrap Style Link-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Custom Style Link-->
    <link rel="stylesheet" href="style.css">

    <!--Font Awesome Style Link-->
    <link rel="stylesheet" href="CSS/all.css">

    <!--Google Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header part code -->
    <?php
        include_once 'header.php';
    ?>

    <!--Front Two Column-->
    <div class="container-fluid" style="background-color: rgb(255,227,225); background: radial-gradient(#fff,#ffd6d6);">
        <div class="container">
            <div class="row c_1">
                <div class="col-12 col-sm-6 my-auto">
                    <h1 class="">Give Your Workout A New Style!</h1>
                    <p class="text-muted mt-2">Success isn't always about greatness.it's about consistency.Consistent hard work gains success. Greatness will come.</p>
                    <button type="button" class="btn btn-warning mt-2" data-target="#explore" data-toggle="modal"><span class="mx-2">Explore Now<i class="fas fa-long-arrow-alt-right ml-1"></i></span></button>
                </div>
                <div class="col-12 col-sm-6">
                    <img src="images/image1.png" class="img-fluid d-block img_6">
                </div>
            </div>
        </div>
    </div>
    
    <!--Three Column Images-->
    <div class="container c_2" style="max-width: 900px;">
        <div class="row">
            <div class="col-6 col-sm-4">
                <img src="images/category-3.jpg" class="img-fluid d-block img_4 mb-4">
            </div>
            <div class="col-6 col-sm-4">
                <img src="images/category-2.jpg" class="img-fluid d-block img_2 mb-4">
            </div>
            <div class="col-6 col-sm-4">
                <img src="images/category-1.jpg" class="img-fluid d-block img_3">
            </div>
        </div>
    </div>
    
    <!--Featured Products-->
    <h4 class="text-center font-weight-bold c_8">Featured Products</h4>
    <hr class="hr_1">

    <div class="container" style="max-width: 900px;">
        <div class="row c_3">
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-1.jpg" class="img-fluid d-block w-100">
                        </div>
                        <p class="card-title text-muted mt-1">Red Printed T-Shirt</p>
                        <span class="star"><i class="fas fa-star mr-1 mb-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$50.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
                    <div class="card border-0 mb-4">
                        <div class="card-img">
                            <img src="images/product-2.jpg" class="img-fluid d-block">
                        </div>
                        <p class="card-title text-muted mt-1">HRX Sports Shoes</p>
                        <span class="star"><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star"></i></span>   
                        <p class="card-text text-muted mt-1">$75.00</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
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
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
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

    <!--Latest Products-->
    <h4 class="text-center font-weight-bold c_8">Latest Products</h4>
    <hr class="hr_1">

    <div class="container" style="max-width: 900px;">
        <div class="row c_3">
            <div class="col-sm-3">
                <a href="product1.php" class="text-decoration-none">
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
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
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
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
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
            <div class="col-12 col-sm-3">
                <a href="product1.php" class="text-decoration-none">
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
                <a href="product1.php" class="text-decoration-none">
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
                <a href="product1.php" class="text-decoration-none">
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
                <a href="product1.php" class="text-decoration-none">
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
                <a href="product1.php" class="text-decoration-none">
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
    </div>


    <!--Smart Band Column-->
    <div class="container-fluid mb-5" style="background-color: rgb(255,227,225); background: radial-gradient(#fff,#ffd6d6);">
        <div class="container pb-5 c_4">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/exclusive.png" class="img-fluid d-block">
                </div>
                <div class="col-sm-6 my-auto">
                    <p class="text-muted mt-5">Exclusive Available on Bhargav's</p>
                    <h1 class="mb-4">Smart Band 4</h1>
                    <p class="text-muted mt-2 mb-3">Success isn't always about greatness.it's about consistency.Consistent hard work gains success. Greatness will come.</p>
                    <button type="button" class="btn btn-warning mt-2" data-target="#smart_band" data-toggle="modal"><span class="mx-2">Buy Now<i class="fas fa-long-arrow-alt-right ml-1"></i></span></button>
                </div>
            </div>
        </div>
    </div>

    <!--Three Column Testimonial-->
    <div class="container mb-5">
        <div class="row c_5">
            <div class="col-sm-4">
                <a href="" class="text-decoration-none">
                    <div class="card mb-5">
                        <div class="card-body text-center">
                            <i class="fas fa-quote-left fa-2x mb-3"></i>
                            <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam autem voluptatum quis odio totam quae neque aliquam maiores sit, atque vel deleniti quas in?</p>
                            <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star mb-4"></i>
                            <img src="images/user-1.png" class="img-fluid d-block mx-auto w-25 mb-1">
                            <p class="font-weight-bold text-dark">Sean Parker</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="text-decoration-none">
                    <div class="card mb-5">
                        <div class="card-body text-center">
                            <i class="fas fa-quote-left fa-2x mb-3"></i>
                            <p class="text-muted">I am currently pursuing my Bachelor of Technology in Computer Science and looking for carrer in the field of Computer Science and Technology. I mostly work as a front end web developer well known on HTML5, CSS3, Bootstrap and JavaScript languages.</p>
                            <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star mb-4"></i>
                            <img src="images/bhargav.jpg" class="img-fluid d-block mx-auto w-25 mb-1">
                            <p class="font-weight-bold text-dark">Bhargav Sonagara</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-quote-left fa-2x mb-3"></i>
                            <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam autem voluptatum quis odio totam quae neque aliquam maiores sit, atque vel deleniti quas in?</p>
                            <i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="fas fa-star mr-1"></i><i class="far fa-star mb-4"></i>
                            <img src="images/user-3.png" class="img-fluid d-block mx-auto w-25 mb-1">
                            <p class="font-weight-bold text-dark">Mabel Joe</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--Brand Column-->
    <div class="container">
        <div class="row justify-content-center c_7">
            <div class="col-sm-2">
                <a href="https://www.coca-colaindia.com/" class="text-decoration-none"><img src="images/logo-coca-cola.png" class="img-fluid d-block"></a>
            </div>
            <div class="col-sm-2">
                <a href="https://www.godrej.com/" class="text-decoration-none"><img src="images/logo-godrej.png" class="img-fluid d-block"></a>
            </div>
            <div class="col-sm-2">
                <a href="https://www.oppo.com/in/" class="text-decoration-none"><img src="images/logo-oppo.png" class="img-fluid d-block"></a>
            </div>
            <div class="col-sm-2">
                <a href="https://www.paypal.com/in/home" class="text-decoration-none"><img src="images/logo-paypal.png" class="img-fluid d-block"></a>
            </div>
            <div class="col-sm-2">
                <a href="https://www.philips.co.in/" class="text-decoration-none"><img src="images/logo-philips.png" class="img-fluid d-block"></a>
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
    <div class="modal fade" id="smart_band" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Oppssss...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Out Of Stock.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="explore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Sorry...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            You Explored Too Much. Leave it Now.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
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
