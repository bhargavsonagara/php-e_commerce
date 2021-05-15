<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product1 - E-commerce WEB</title>
    <!--Bootstrap Style Link-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!--Custom Style Link-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productStyle.css">
    <link rel="stylesheet" href="product1.css">

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


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-12">
                <a href=""><img src="images/gallery-1.jpg" class="img-fluid d-block hov img_2 w-100" id="ProductImage"></a>
                <div class="row img_3">
                    <div class="col-3">
                        <a href=""><img src="images/gallery-1.jpg" class="img-fluid d-block mt-3 mb-2 hov SmallImage w-100"></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img src="images/gallery-2.jpg" class="img-fluid d-block mt-3 mb-2 hov SmallImage w-100"></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img src="images/gallery-3.jpg" class="img-fluid d-block mt-3 mb-2 hov SmallImage w-100"></a>
                    </div>
                    <div class="col-3">
                        <a href=""><img src="images/gallery-4.jpg" class="img-fluid d-block mt-3 mb-2 hov SmallImage w-100"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 c_17">
                <p class="text-muted mt-3">Home/T-Shirt</p>
                <h1 class="font-weight-bold mb-3">Red Printed T-Shirt by HRX</h1>
                <h4 class="text-muted font-weight-bold mb-3">$50.00</h4>
                <select class="dropdown btn btn-light mb-3" aria-haspopup="true" aria-labelledby="false">
                    <option value="" class="dropdown-item">Select Size</option>
                    <option value="" class="dropdown-item">XXL</option>
                    <option value="" class="dropdown-item">XL</option>
                    <option value="" class="dropdown-item">Large</option>
                    <option value="" class="dropdown-item">Medium</option>
                    <option value="" class="dropdown-item">Small</option>
                </select> <br>  
                <input type="number" value="1" class="inp mb-4">
                <a href="cart.php" class="text-decoration-none"><button type="button" class="btn mb-2 cart text-white pl-4 pr-4 ml-2">Add To Cart</button></a>
                <h4 class="font-weight-bold mb-3">Product Details</h4>
                <p class="text-muted textp">Give your Summer wardrobe a style upgrade with the HRX Men's active T-Shirt. Team it with a pair of shorts of your 
                    morning workout or a denims for a evening out with the guys. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim consectetur exercitationem cumque aperiam veniam voluptas, natus sequi beatae minus aspernatur. 
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 c_16">
            <h4 class="font-weight-bold">Related Products</h4>
            <p class="ml-auto"><a href="products.html" class="text-muted text-decoration-none">View More</a></p>
        </div>
        <div class="row c_3">
            <div class="col-12 col-sm-3">
                <a href="" class="text-decoration-none">
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
                <a href="" class="text-decoration-none">
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
                <a href="" class="text-decoration-none">
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
                <a href="" class="text-decoration-none">
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
        var ProductImage = document.getElementById("ProductImage");
        var SmallImage = document.getElementsByClassName("SmallImage");
        SmallImage[0].onclick = function(){
            ProductImage.src = SmallImage[0].src;
        }
        SmallImage[1].onclick = function(){
            ProductImage.src = SmallImage[1].src;
        }
        SmallImage[2].onclick = function(){
            ProductImage.src = SmallImage[2].src;
        }
        SmallImage[3].onclick = function(){
            ProductImage.src = SmallImage[3].src;
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
