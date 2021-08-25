<!DOCTYPE html>

<html lang="en">
<head>
    <title> Chips and Candy </title>
     <link rel="stylesheet" type="text/css" href="Style_P1_P2.css">
</head>

<body>
<?php include('navbar.php'); ?>

<div class="container" id="banner">
    <h1> Chips and Candy </h1>
    <h4> You can find all your comfort food here in Aisle 3 </h4>
    <!-- <hr class="solid"> -->
    <h1> Chips </h1>
</div>

<div class="aisle-box">

    <?php
        $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

        foreach ($xml->product as $product){

            if ($product->aisle == "Chips and Candy"){
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
        <a href="DoritosWasabi.php" /> 
            <img src="https://images.unsplash.com/photo-1600952841320-db92ec4047ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" width = "40%" alt = "Bag of Doritos Wasabi"/>
            <h2> Doritos Wasabi </h2>
            <p> Cost: $3.99 each </p>
        </a> 
    </div>
    <div class="aisle-content"> 
        <a href="CrunchyCheetos.php" />
            <img src="https://images.unsplash.com/photo-1581533940608-d2973792f542?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt = "Bag of Crunchy Cheetos"/>
            <h2> Crunchy Cheetos </h2>
            <p> Cost: $5.99 each  </p>
        </a>
    </div> -->
</div>
    
<!-- <div class="container" id="banner">
    <h1> Candy </h1>
</div>
    
<div class="aisle-box">
    <div class="aisle-content"> 
        <a href="Runts.php" />
            <img src="https://images.unsplash.com/photo-1600359746315-119f1360d663?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fGNhbmR5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"alt = "Runts"/>
            <h2> Runts </h2>
            <p> Cost: $2.99 each  </p>
        </a>
    </div>
    <div class="aisle-content"> 
        <a href="Skittles.php" />
            <img src="https://images.unsplash.com/photo-1600359738432-965e50c4d89e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt = "Skittles"/>
            <h2> Skittles </h2>
            <p> Cost: $2.99 each  </p>
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