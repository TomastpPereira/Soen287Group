<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./Styles_P4_P11.css">
</head>

<body>
<?php include('navbar.php'); ?>

    <div>
        <h1 style="margin-left: 2%; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Cart Items</h1>

        <div class="top-form">

            <button type="submit" class="shop" onclick="location.href='/P2_Fruits.html'">Continue Shopping</button>

        </div>
    </div>
    <br>

    <div class="payment">

        <h2 style="text-align: center;">Summary of order:</h2>


        <div class="prices">
            <h3 class="sub-prices" style="display: inline;" id="items">0</h3>
            <hr>
            <h3 class="sub-prices" id="subtotal">0.00$</h3>
            <hr>
            <h3 class="sub-prices" id="gst">0.00$</h3>
            <h3 class="sub-prices" id="qst">0.00$</h3>
            <hr>
            <h3 class="sub-prices" id="total">0.00$</h3>

        </div>


        <div class="Summary">
            <h3 class="summary" style="display: inline;">Total Items: </h3>
            <hr>
            <h3 class="summary">Subtotal:</h3>
            <hr>
            <h3 class="summary">GST: </h3>
            <h3 class="summary">QST: </h3>
            <hr>
            <h3 class="summary">Total:</h3>

        </div>



    </div>

    <div class="outer-rec">

    </div>

    <div class="footer">
        <p style="text-align: center;"> Our Info </p>
        <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers.
        </p>
        <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
    </div>
    <script type="text/javascript" src="./p4_ShopppingCart.js"></script>
</body>


</html>