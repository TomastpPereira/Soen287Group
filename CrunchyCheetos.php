<!DOCTYPE html>

<html lang="en">
<head>
  <title> Crunchy Cheetos </title>
  <link rel = "stylesheet type" type = "text/css" href= "Style_HomePageTemplate.css" >
  <link rel="stylesheet" type="text/css" href="JS_Styling.css">
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

<div class="container" id="banner">
  <h1> Crunchy Cheetos </h1>
  <h4> Chips </h4>
</div>

<div style="padding-left: 24px; padding-right: 24px;">

  <div id="productInfo">

    <img src="https://images.unsplash.com/photo-1581533940608-d2973792f542?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
         id="picture">

    <div id="productDescription" style="margin: 0px 0px 25px 25px">
        <p id="item" style="text-align: center; font-weight: bold"> Crunchy Cheetos </p>
        <p>
Bag of Crunchy Cheetos. 
        </p>
        <div style="background-color: lightgray; padding: 10px 15px 10px 10px; border-radius: 8px;">
            <div style="display: flex">
                <labeL style="margin-right: 6px">Quantity:</labeL>
                <button id="remove" style="margin-right: 6px"> -</button>
                <div id="qty" style="margin-right: 6px">0</div>
                <button id="add" style="margin-right: 6px"> +</button>
            </div>
            <div style="display: flex; margin-top: 6px">
                <div style="margin-right: 6px"> Subtotal:</div>
                <div id="subtotal" style="margin-right: 6px"> $0.00</div>
                <button id="addToCart" style="margin-left: auto; min-width: 85px">Add to Cart</button>
            </div>

        </div>
        <hr style="margin-top:20px">

        <button id="moreDescriptionBtn" style="width: 100%; text-align: left " onclick="unHideDescription()">
            Show Detailed Description
        </button>

        <hr/>


        <div id="description" style="visibility: hidden">
            <p id="moreDescription"> Enjoy the cheesy crunch of Crunchy Cheetos! </p>

            <?php

                $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");
                $theproduct = $xml->product[4];


                echo("<table id=\"table\">
                    <tr>
                        <td> Weight:</td>
                        <td> $theproduct->weight </td>
                    </tr>
                    <tr>
                        <td> Price:</td>
                        <td id=\"unit_Cost\"> $theproduct->price</td>
                    </tr>
                    <tr>
                        <td> Calories:</td>
                        <td> $theproduct->calories</td>
                    </tr>
                </table>")
            ?>
        </div>
    </div>

</div>


<div class="footer">
  <p style="text-align: center;"> Our Info </p>
  <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
  <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>

<script>price = 5.99;</script>
<script type="text/javascript" src="Button_Scripting.js"> </script>
</html>
