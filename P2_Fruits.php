<!DOCTYPE html>

<html lang="en">
<head>
    <title> Fruits and Vegetables </title>
     <link rel="stylesheet" type="text/css" href="Style_P1_P2.css">
</head>

<body>
<?php include('navbar.php'); ?>


<div class="container" id="banner">
    <h1> Fruits & Vegetables </h1>
    <h4> Aisle 1 </h4>
</div>

<div class="aisle-box">

    <?php
        $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

        foreach ($xml->product as $product){

            if ($product->aisle == "Fruits"){
                echo("
                    <div class=\"aisle-content\" style=\"margin-top: 20px;\">
                        <a href=$product->link> 
                            <img src=$product->image>
                            <h2> $product->name </h2> 
                            <p> Cost: $product->price </p> 
                        </a>    
                    </div>
                ");
            } else {
                continue;
            }
        }
    ?>
</div>

<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>

</html>