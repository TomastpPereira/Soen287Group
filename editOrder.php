<?php

$xmlProduct = simplexml_load_file("product_data.xml");

$xmlOrder = simplexml_load_file("order_data.xml");

if (isset($_GET['editOrder'])) {

    // Delete order (we'll create a new one)

    $value = $_GET['editOrder'];

    for ($i = 0; $i < $xmlOrder->count(); $i++) {

        if ($xmlOrder->order[$i]->id == $value) {
            unset($xmlOrder->order[$i]);
            break;
        }
    }

    file_put_contents("order_data.xml", $xmlOrder->saveXML());

    // Test if non-empty

    $isEmpty = true;

    foreach ($xmlProduct as $products) {

        $name = 'qty' . str_replace(' ', '', $products->name);

        if (isset($_POST[$name]) &&
            $_POST[$name] > 0) {
            $isEmpty = false;
        }

    }

    if(!$isEmpty) {
        $newOrder = $xmlOrder->addChild('order');
        $id = $newOrder->addChild('id', $_GET['editOrder']);
    }

    // For each product that has a match in order, add to the new order


    foreach ($xmlProduct as $products) {

        $name = 'qty' . str_replace(' ', '', $products->name);


        if (isset($_POST[$name]) &&
            $_POST[$name] > 0) {

            $newProduct = $newOrder->addChild('product');
            $qty = $newProduct->addChild('key', $products->name);
            $key = $newProduct->addChild('value', $_POST[$name]);

        }

    }

    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xmlOrder->asXML());
    $dom->save('order_data.xml');

}

// Add a new order
else {
    foreach ($xmlProduct as $product) {

        $name = 'qty' . str_replace(' ', '', $product->name);

        if (isset($_POST[$name]) && $_POST[$name] > 0) {

            echo $product->name . $_POST[$name] . '<br>';

            $order = $xmlOrder->addChild('order');

        }


    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        *{
        margin: 50px;
            text-align: center;
            font-family: Arial;
        }
    </style>
</head>
<body>
<h1 >Operation complete!</h1>

<button onclick="window.location.href='P11_Edit_Order_List.php'">Back to order list</button>
</body>
</html>


