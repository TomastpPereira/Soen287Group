<!DOCTYPE html>

<html lang="en">
<head>
  <title> Doritos Wasabi </title>
  <link rel = "stylesheet type" type = "text/css" href= "Style_HomePageTemplate.css" >
  <link rel="stylesheet" type="text/css" href="JS_Styling.css">
</head>

<body>
<?php include('navbar.php'); ?>

<div class="container" id="banner">
  <h1> Doritos Wasabi </h1>
  <h4> Chips </h4>
</div>

<div style="padding-left: 24px; padding-right: 24px;">

  <div id="productInfo">

    <img src="https://images.unsplash.com/photo-1600952841320-db92ec4047ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto"
         id="picture">

    <div id="productDescription" style="margin: 0px 0px 25px 25px">
        <p id="item" style="text-align: center; font-weight: bold"> Doritos Wasabi </p>
        <p>
Bag of Doritos Wasabi . 
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
            <p id="moreDescription"> Enjoy the sweet and spicy flavour of Doritos Wasabi! </p>

            <?php

                $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");
                $theproduct = $xml->product[5];


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

<script>var priceFromXML = document.getElementById("unit_Cost").innerHTML;
    var thenum = priceFromXML.replace( /^\D+/g, '');
    var price = parseFloat(thenum);</script>
<script type="text/javascript" src="Button_Scripting.js"> </script>
</html>
