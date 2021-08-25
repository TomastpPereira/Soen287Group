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


    <!-- <div class="aisle-content">
        <a href = "Banana.php">
            <img src="https://images.pexels.com/photos/5217996/pexels-photo-5217996.jpeg?cs=srgb&dl=pexels-anna-shvets-5217996.jpg&fm=jpg">
            <h3> Banana </h3>
            <p> Cost: $1.29/Unit </p>
        </a>
    </div>
    <div class="aisle-content">
        <a href = "Apple.php" />
            <img src="https://images.pexels.com/photos/6157055/pexels-photo-6157055.jpeg?cs=srgb&dl=pexels-laker-6157055.jpg&fm=jpg">
            <h3> Apple </h3>
            <p> Cost: $0.99/Unit </p>
        </a>
    </div> -->
</div>

<!-- <div class="aisle-box">
    <div class="aisle-content">
        <a href = "Grapes.php" />
            <img src="https://images.pexels.com/photos/545036/pexels-photo-545036.jpeg?cs=srgb&dl=pexels-burst-545036.jpg&fm=jpg">
            <h3> Grapes </h3>
            <p> Cost: $1.79/Unit </p>
        </a>
    </div>
</div> -->

<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>

</html>