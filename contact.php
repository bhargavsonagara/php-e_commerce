<?php
    require_once "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - E-commerce WEB</title>
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
    <div class="container-fluid pt-3 pb-3" style="background-color: rgb(255,227,225);">
        <div class="container">
            <!--Section: Contact v.2-->
        <section class="mb-4">
    
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>
    
        <div class="row">
    
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" href="#contact_modal" method="post" name="contact-form">
    
                    <!--Grid row-->
                    <div class="row">
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
    
                        <!--Grid column-->
                        <div class="col-md-12">
    
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>
    
                        </div>
                    </div>
                    <div class="text-center text-md-left">
                        <button type="submit" id="send" class="btn btn-primary"  name="submit" data-toggle="modal">Send</button>
                </div>
                </form>
               
                <!--Grid row-->
                
                <div class="status"></div>
            </div>

            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><a href="https://www.google.com/maps/place/J+K+Puram,+Basantgarh,+Rajasthan+307019/@24.6941849,72.9957175,15z/data=!3m1!4b1!4m5!3m4!1s0x3942cb5b48eb9ccd:0x153b49d323e55fb8!8m2!3d24.6938179!4d73.0036295" class="text-decoration-none">
                        <i class="fas fa-map-marker-alt fa-2x" style="color: rgb(218, 83, 49);"></i>
                        <p class="text-dark">JK Puram, Sirohi 307019, INDIA</p>
                    </a>
                    </li>
    
                    <li><a href="tel:+91 7296909049" class="text-decoration-none">
                        <i class="fas fa-phone mt-4 fa-2x" style="color: rgb(218, 83, 49);"></i>
                        <p class="text-dark">+91 7296909049</p>
                    </a>
                    </li>
    
                    <li><a href="mailto: bhargavsonagara1776@gmail.com" class="text-decoration-none">
                        <i class="fas fa-envelope mt-4 fa-2x" style="color: rgb(218, 83, 49);"></i>
                        <p class="text-dark">bhargavsonagara1776@gmail.com</p>
                    </a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
    
        </div>
    
    </section>
    <!--Section: Contact v.2-->
        </div> 
    </div>
    
    <!--Modal-->
    <?php
        include_once 'modal.php';
    ?>

    <!--Footer-->
    <?php
        include_once 'footer.php';
    ?>

    

    <!--jquery Script Link-->
    <script src="js/jquery-3.5.1.js"></script>
    <!-- Ajax Code Part by Gaurav-->
    <script>
        $("document").ready(function () {
            $("#send").on("click",function (e) {
                
                e.preventDefault();
                $.ajax({
                   
                    url:"message.php",
                    data:$('#contact-form').serialize(),
                    method:"POST",
                    success: function (data) {
                        if(data == 1)
                        {
                            $("#contact-form").trigger("reset");
                            alert("message-sent");
                            return true;
                        }
                        else 
                        {
                            alert(data);
                            return false;
                        }
                    }


               })
               
            });
        });
            
    </script>

    <!--Popper Script Link-->
    <script src="js/popper.js"></script>
    
    <!--Bootstrap JS Script Link-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html> 
