<!DOCTYPE html>

<html lang="en">
<head>
    <title> Cereals </title>
     <link rel="stylesheet" type="text/css" href="Style_P1_P2.css">
</head>

<body>
<?php include('navbar.php'); ?>


<div class="container" id="banner">
    <h1> Cereals </h1>
    <h4> Aisle 2 </h4>
</div>

<div class="aisle-box">

    <?php
        $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

        foreach ($xml->product as $product){

            if ($product->aisle == "Cereal"){
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
        <a href="FrootLoops.php"> 
            <img src="images/frootloops.jpg">
            <h2> Froot Loops </h2> 
            <p> Cost: $6.99 each </p> 
        </a>    
    </div>
    <div class="aisle-content"> 
        <a href="Cheerios.php">
            <img src="https://images.unsplash.com/photo-1470909752008-c78c7f6423a3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80">
            <h2> Cheerios </h2>
            <p> Cost: $4.99 each  </p>
        </a> 
    </div> -->
</div>
<!-- <div class="aisle-box">
    <div class="aisle-content"> 
        <a href="Cornflakes.php">
            <img src="https://images.unsplash.com/photo-1574156814151-ed649f815f4c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
            <h2> Corn Flakes</h2>
            <p> Cost: $4.99 each  </p>
        </a>
    </div>
    <div class="aisle-content"> 
        <a href="Oatmeal.php">
            <img src="https://images.unsplash.com/photo-1614961233913-a5113a4a34ed?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
            <h2> Oatmeal </h2>
            <p> Cost: $4.29 each  </p>
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