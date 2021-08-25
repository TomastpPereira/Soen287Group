<?php

if($_POST["Save"]) {
    //If Save button is used
    $products = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

    $productName = $_POST['PName'];
    $productCost = $_POST['PCost'];
    $productWeight = $_POST['PWeight'];
    $productCalo = $_POST['PCalo'];
    $productAisle = $_POST['PAisle'];
    $productDesc = $_POST['PDesc'];
    $productImg = $_POST['PImg'];
    $productId = $_POST['PId'];
    $productIdInt = intval($productId);



    $products->product->name[$productIdInt] = $productName;
    $products->product->price[$productIdInt] = $productCost;
    $products->product->weight[$productIdInt] = $productWeight;
    $products->product->calories[$productIdInt] = $productCalo;
    $products->product->aisle[$productIdInt] = $productAisle;
    $products->product->description[$productIdInt] = $productDesc;
    $products->product->image[$productIdInt] = $productImg;

    $products->asXML("product_data.xml");
    echo "<script>window.location = 'P7_list_of_products.php'</script>";
} else if($_POST["Add"]) {
    //If Add Button is used
    $products = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

    $productName = $_POST['PName'];
    $productCost = $_POST['PCost'];
    $productWeight = $_POST['PWeight'];
    $productCalo = $_POST['PCalo'];
    $productAisle = $_POST['PAisle'];
    $productDesc = $_POST['PDesc'];
    $productImg = $_POST['PImg'];

    // Determining What the Product ID Must Be
    $x = 0;
    foreach ($products->product as $product){
        $x = $x + 1;
    }

    $currentProduct = $products->addChild('product');
    $currentProduct->addChild('name', $productName);
    $currentProduct->addChild('price', $productCost);
    $currentProduct->addChild('weight', $productWeight);
    $currentProduct->addChild('calories', $productCalo);
    $currentProduct->addChild('aisle', $productAisle);
    $currentProduct->addChild('description', $productDesc);
    $currentProduct->addChild('productID', $x);
    $currentProduct->addChild('image', $productImg);
    
    $products->asXML("product_data.xml");
    echo "<script>window.location = 'P7_list_of_products.php'</script>";
}


?>