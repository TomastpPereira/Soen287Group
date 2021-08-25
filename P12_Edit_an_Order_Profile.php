<?php include('admin_Check.php'); ?>

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

<?php include('navbar.php'); ?>

<div class="container" id="banner">
    <h1> <?php if(isset($_GET['editOrder'])) echo "Order ID:". $_GET['editOrder']; else echo "NEW ORDER";?></h1>
</div>


<div style="background-color: white; margin-top: 20px;">

    <button onclick="window.location.href='P11_Edit_Order_List.php'" style="margin: 0px 50px;">Back</button>

    <?php

    $xmlProduct = simplexml_load_file("product_data.xml");

    $xmlOrder = simplexml_load_file("order_data.xml");

    if(isset($_GET['editOrder'])) {

        echo "<form action=\"editOrder.php?editOrder=".$_GET['editOrder']. "\" method = \"post\">";
    } else {


        // Create new ID

        $arr = array();

        for ($i = 0; $i < $xmlOrder->count(); $i++) {
            $id = (int) $xmlOrder->order[$i]->id;
            array_push($arr, $id);
        }

        sort($arr);

        $newId = 0;

        $matchCount = 0;

        for ($i = 0; $i < count($arr); $i++){
            if ($arr[$i] != $i) { $newId = $i; break;}
            $matchCount++;
        }
        if($matchCount == $i) $newId = $i;
        echo "<form action=\"editOrder.php?editOrder=". $newId . "\" method = \"post\">";
    }



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
        <input type='text' name=\"qty".str_replace(' ', '', $product->name)."\" id=\"quantity\" value='0' style='margin-left: 5px; width: 10px'>
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
        <input type='text' name=\"qty".$product->name."\" id=\"quantity\" value=\"". getQty($product->name) ."\" placeholder=\"\" style='margin-left: 5px; width: 10px'>
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

</div>

<button type="submit" value="Submit" style="background-color: green; margin: 10px 50px;"> Save Changes </button>
</form>

<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>

</body>

<script type="text/javascript" src="Button_Scripting.js"></script>
</html>