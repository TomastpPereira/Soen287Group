<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./Styles_P4_P11.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="navbar">
        <a class="active" href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">
                Aisles
            </button>
            <div class="dropdown-content">
                <a href="P2_Fruits.html"> Fruits & Vegetables</a>
                <a href="P2_Cereals.html"> Cereals </a>
                <a href="P2_ChipsandCandy.html"> Chips and Candy </a>
                <a href="P2_Meat.html"> Meat </a>
                <!-- <a href="Emmanuel_copies/P2.html"> Fruit 2 </a> -->
            </div>
        </div>
        <a href="P4_ShoppingCart.html"> Shopping Cart </a>
        <a href="P5_Login.html"> Login </a>
        <a href="P6_SignUp.html"> Sign Up</a>
    </div>

    <div>
        <h1 style="margin-left: 2%; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Cart Items</h1>

        <div class="top-form">

            <button type="submit" class="shop" onclick="location.href='/P2_Fruits.html'">Continue Shopping</button> 
            <!-- need to change links on project -->

        </div>

        <div class="purchase">
            
            <button type="submit" name="purchase" class="purchaseBtn" value="Buy Items" onclick = getLocalStorage()>Buy Items</button>
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

    <?php
        if(isset($_COOKIE['cookieCount'])){
            $Idcount = 0;
            $xmlIdCount =simplexml_load_file("order_data.xml") or die("User Error: Cannot Create object");
            foreach($xmlIdCount->children() as $books){
                $Idcount++;
            }
            if ($Idcount != 0){
                $Idcount++;
            }
            $xml = new DOMDocument("1.0","UFT-8");
            $xml->load("order_data.xml");
            $rootTag = $xml->getElementsByTagName("orders")[0];
            $orderTag = $xml->createElement("order");
            $id = $xml->createElement("id",$Idcount);
            $rootTag->appendChild($orderTag);
            $orderTag->appendChild($id);
            $count = $_COOKIE['cookieCount'];
            for ($x = 0; $x < $count; $x++){
                $str = $_COOKIE[($x)];
                $infoArray = explode(",",$str);
                $key = array_values($infoArray)[0];
                $value = array_values($infoArray)[1];
                $productTag = $xml->createElement("product");
                $valueTag = $xml->createElement("key", $key);
                $keyTag = $xml->createElement("value", $value);
                $productTag->appendChild($valueTag);
                $productTag->appendChild($keyTag);
                $orderTag->appendChild($productTag);
                }
                $xml->save("order_data.xml");
            for ($y = 0; $y < $count; $y++){
                unset($_COOKIE[($y)]);
                setcookie(($y),'',time() - 3600, '/');
            }
            unset($_COOKIE['cookieCount']);
            setcookie('cookieCount','',time() - 3600, '/');

        }
        
    ?>
    
    <script type="text/javascript" src="./p4_ShopppingCart.js"></script>
</body>


</html>