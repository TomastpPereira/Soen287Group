<!DOCTYPE html>

<html lang="en">
<head>
    <title> Meat and Poultry </title>
     <link rel="stylesheet" type="text/css" href="P2.css">
</head>
<body>
<?php include('navbar.php'); ?>
<!-- navbar end-->
<div class="container" id="banner">
    <h1> Meat & Poultry </h1>
    <h4> Aisle 7 </h4>
</div>
<!-- navbar end -->
<div class="aisle-box">

    <?php
        $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

        foreach ($xml->product as $product){

            if ($product->aisle == "Meat"){
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
       <a href = "P3_Beef_Round_Chuck.php" /> <img src="images/beef-round-chuck.jpg" alt="beef round chuck"> 
           <h3>Beef Round Chuck</h3>
           <p>Price: $23.99/kg</p>
       </a> 
    </div>
     <div class="aisle-content">
       <a href = "P3_Beef_Top_Round.php" /> <img src="images/beef-top-round1.jpg" alt="beef top round"> 
           <h3>Beef Top Round</h3>
           <p>Price: $32.99/kg</p>
       </a> 
    </div> -->
</div>
<!-- <div class="aisle-box">
    <div class="aisle-content">
       <a href = "P3_Minced_Beef.php" /> <img src="images/minced-beef.jpg" alt="minced beef">
           <h3>Minced Beef</h3>
           <p>Price: $14.99/kg</p>
       </a>
    </div>
     <div class="aisle-content">
       <a href = "P3_Minced_Veal.php" /> <img src="images/minced-veal.jpg" alt="minced veal">
           <h3>Minced Beef</h3>
           <p>Price: $12.99/kg</p>
       </a>
    </div>
</div>
<div class="aisle-box">
    <div class="aisle-content">
       <a href = "P3_Beef_Cubes.php" /> <img src="images/beef-cubes.jpg" alt="beef cubes">
           <h3>Beef Cubes</h3>
           <p>Price: $19.99/kg</p>
       </a>   
    </div>
     <div class="aisle-content">
       <a href = "P3_Chicken_Legs.php" /> <img src="images/chicken-legs.jpg" alt="chicken legs">
           <h3>Chicken Legs</h3>
           <p>Price: $13.99/kg</p>
       </a>   
    </div>
</div> -->

<!-- footer start-->
<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>

</html>