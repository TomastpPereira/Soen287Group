<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="./Styles_P4_P11.css">
</head>
<body>

<!--This part is used to find the number of order to put in the title. -->

<?php

$xml = simplexml_load_file("order_data.xml") or die("Error: Cannot create object");
$orderNum = 0;

if (isset($_GET['deleteOrder'])) {

    $value = $_GET['deleteOrder'];

    for ($i = 0; $i < $xml->count(); $i++) {

        if ($xml->order[$i]->id == $value) {
            unset($xml->order[$i]);
            break;
        }
    }

    file_put_contents("order_data.xml", $xml->saveXML());
}

foreach ($xml as $value) {

    $orderNum++;
}

?>

<!--Navbar-->

<div class="navbar">
    <a class="active" href="index.html">Home</a>
    <a href="P7_list_of_products.html"> Product List </a>
    <a href="P8_Edit_A_Product.html"> Edit Product </a>
    <a href="P9_Edit_User_List.html"> User List </a>
    <a href="P10_Edit_User.html"> Edit User </a>
    <a href="P11_Edit_Order_List.html"> Order List </a>
    <a href="P12_Edit_an_Order_Profile.html"> Edit Order </a>
</div>

<div class="div-head">
    <div class="title">
        <h1 class="title-h1">Our orders (<?php echo($orderNum) ?>)</h1>
    </div>
    <div class="Add">
        <button class="add-order" type="submit" onclick="location.href='P7_list_of_products.html'"><strong>Add</strong>
        </button>
    </div>
</div>


<div class="outer-rec2" id="outerRec">

<!--    This part is to print html code repeatedly for each order.-->

    <?php

    $xml = simplexml_load_file("order_data.xml") or die("Error: Cannot create object");
    $orderNum = 1;

    foreach ($xml as $order) {

        echo("<div class=\"inner-rows\" id=\"order" . "$orderNum" . "\">
        <div class=\"inner-rows-text\">
            <h3>Order #" . "$orderNum" . "</h3>
            <h3>Description: </h3> 
            <p> " . showProducts($order) . "</p>
        </div>
        <div class=\"inner-div\">
            <div class=\"inner-buttons\">
                <button class=\"edit-order\" type=\"submit\" onclick=window.location.href=\"P12_Edit_an_Order_Profile.php?editOrder=". $order->id."\">
                    <strong>Edit Order</strong></button>
                <div class=\"cart-buttons\" class=\"add - delete\">
                    <button class=\"delete-order\" type=\"submit\" onclick=window.location.href=\"P11_Edit_Order_List.php?deleteOrder=". $order->id."\"><strong>Delete</strong></button>
                </div>
            </div>
        </div>

    </div>
    <br>");

        $orderNum++;
    }


    function showProducts($order)
    {

        $str = "";

        foreach ($order->product as $product) {
            $str .= ($product->value . " " . $product->key . ", ");
        }

        $str = substr($str, 0, -2);

        $str .= ". ";

        return $str;

    }

    ?>

<!--    This is the old way we did the order list. This code was copy pasted a few times.-->

    <!--    <div class="inner-rows" id="firstRow">-->
    <!--        <div class="inner-rows-text">-->
    <!--            <h3>Order #1</h3>-->
    <!--            <h3>Description: </h3>-->
    <!--            <h3>Client: </h3>-->
    <!--        </div>-->
    <!--        <div class="inner-div">-->
    <!--            <div class="inner-buttons">-->
    <!--                <button class="edit-order" type="submit" onclick="location.href='P12_Edit_an_Order_Profile.html'">-->
    <!--                    <strong>Edit Order</strong></button>-->
    <!--                <div class="cart-buttons" class="add-delete">-->
    <!--                    <button class="delete-order" type="submit" onclick="show()"><strong>Delete</strong></button>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--    </div>-->
    <!--    <br>-->


</div>


<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>

</body>

</html>