<?php
?>

<!DOCTYPE html>
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

    <!--Font Awesome Style Link-->
    <link rel="stylesheet" href="CSS/all.css">

    <!--Google Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<body>
    <!--Top bar-->
    <?php
        include_once 'header.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total $:</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $sr = $key + 1;
                                    echo"
                                        <tr>
                                            <td>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input class='iprice' type='hidden' value='$value[Price]'></td>
                                            <td><input type='number' class='text-center iquantity' onchange='subTotal()' value='$value[Quantity]' min='1' max='10'></td>
                                            <td class='itotal'></td>
                                            <td>
                                                <form method='POST' action='manage_cart.php'>
                                                    <button class='btn btn-sm btn-outline-danger' name='Remove_Item'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 mb-5">
                <div class="bg-light rounded border p-4">
                    <h4>Grand Total $:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <form>
                        <!-- Default checked radio -->
                        <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioDefault2"
                            checked
                        />
                        <label class="form-check-label" for="flexRadioDefault2"> Cash On Delivery </label>
                        </div>
                        <button class="btn btn-primary btn-block mt-2">Make Purchase</button>
                    </form>
                </div>
            </div>
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

    <script>

        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal(){
            gt=0;
            for(i=0; i<iprice.length; i++){
                itotal[i].innerText = (iprice[i].value.replace('$',' '))*(iquantity[i].value);
                gt=gt+(iprice[i].value.replace('$',' '))*(iquantity[i].value);
            }
            gtotal.innerText = Number(gt).toLocaleString('en');
        }

        subTotal();


    </script>
    
    <!--jquery Script Link-->
    <script src="js/jquery-3.5.1.js"></script>
    
    <!--Popper Script Link-->
    <script src="js/popper.js"></script>
    
    <!--Bootstrap JS Script Link-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>