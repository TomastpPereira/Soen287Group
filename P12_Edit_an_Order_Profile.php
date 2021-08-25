<!DOCTYPE html>

<html lang="en">
<head>
    <title> Edit An Order Profile </title>
    <link rel="stylesheet type" type="text/css" href="P12_Style.css">

    <style>
        button {
            float: left;
            background-color: #434255;
            color: white;
            border: white;
            border-radius: 4px;
            height: 30px;
            width: 150px;
            font-family: Arial;
            font-size: 16px;
        }
    </style>
</head>

<body style="background-color: white">

<div class="navbar">
    <a class="active" href="index.html">Home</a>
    <a href="P7_list_of_products.html"> Product List </a>
    <a href="P8_Edit_A_Product.html"> Edit Product </a>
    <a href="P9_Edit_User_List.html"> User List </a>
    <a href="P10_Edit_User.html"> Edit User </a>
    <a href="P11_Edit_Order_List.html"> Order List </a>
    <a href="P12_Edit_an_Order_Profile.html"> Edit Order </a>
</div>

<div class="container" id="banner">
    <h1> Order ID: <?php if(isset($_GET['editOrder'])) echo $_GET['editOrder']; else echo "X";?></h1>
</div>


<div style="background-color: white; margin-top: 20px;">

    <button onclick="window.location.href='P11_Edit_Order_List.php'" style="margin: 0px 50px;">Back</button>


    <form>

    <?php

    $xmlProduct = simplexml_load_file("product_data.xml");

    $xmlOrder = simplexml_load_file("order_data.xml");

    foreach($xmlProduct as $product) {

        if(!isset($_GET['editOrder'])) {

            echo("

    <div style=\"padding: 24px 24px 24px 24px;
          background-color: lightgoldenrodyellow;
          border-radius: 50px; margin: 50px;\">
        <h1 style=\"text-align:center\">" . $product->name . "</h1>
        <img class=\"image2\"
             src=\"" . $product->image . "\" alt=\"Product picture\"/>
        <p style=\"text-align: center\"> " . $product->description . " </p>
        
        <div style=\"text-align:center\">
        <label for=\"quantity\"> Quantity: </label>
        <input type='text' name=\"quantity\" id=\"quantity\" value='0' style='margin-left: 5px; width: 10px'>
        </div>
    </div>
");
        }
        
        else {

            echo("

    <div style=\"padding: 24px 24px 24px 24px;
          background-color: lightgoldenrodyellow;
          border-radius: 50px; margin: 50px;\">
        <h1 style=\"text-align:center\">" . $product->name . "</h1>
        <img class=\"image2\"
             src=\"" . $product->image . "\" alt=\"Product picture\"/>
        <p style=\"text-align: center\"> " . $product->description . " </p>
        
        <div style=\"text-align:center\">
        <label for=\"quantity\"> Quantity:</label>
        <input type='text' name=\"quantity\" id=\"quantity\" value=\"". getQty($product->name) ."\" placeholder=\"\" style='margin-left: 5px; width: 10px'>
        </div>
    </div>
");

        }
        


    }

    function getQty($product) {

        $value = $_GET['editOrder'];

        $xmlOrder = simplexml_load_file("order_data.xml");

        foreach ($xmlOrder as $order) {

            if ($order->id == $value) {

                foreach($order as $products) {

                    $compareKey = str_replace(' ', '', $products->key); // This allows to ignore spaces
                    $compareProduct = str_replace(' ', '', $product); // This allows to ignore spaces

                    if (strcasecmp($compareKey, $compareProduct) == 0) // The function ignores cases
                        return $products->value;
                }

                return 0;
            }
        }
    }

    ?>
    </form>
</div>

<button type="submit" style="background-color: green; margin: 10px 50px;"> Save Changes </button>


<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>

</body>

<script type="text/javascript" src="Button_Scripting.js"></script>
</html>