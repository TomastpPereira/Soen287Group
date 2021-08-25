<!DOCTYPE html>

<html lang="en">
<head>
    <title> List of Products </title>
    <link rel="stylesheet type" type="text/css" href="Style_HomePageTemplate.css">
    <script type="text/javascript" src="Button_Scripting.js"> </script>
    <style>
      a {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        text-decoration: none;
        color: initial;
      }
    </style>
</head>

<body style="padding-bottom: 0; ">

  <?php
    $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

    if (isset($_GET['deleteProduct'])) {

      $value = $_GET['deleteProduct'];

      for ($i = 0; $i < $xml->count(); $i++) {

          if ($xml->product[$i]->productID == $value) {
              unset($xml->product[$i]);
              break;
          }
      }

      file_put_contents("product_data.xml", $xml->saveXML());
    }

  ?>

  <?php include('admin_Navbar.php'); ?>

  <!-- <div class="navbar">
    <a class="active" href="index.html">Home</a>
    <a href="P7_list_of_products.html"> Product List </a>
    <a href="P8_Edit_A_Product.html"> Edit Product </a>
    <a href="P9_Edit_User_List.html"> User List </a>
    <a href="P10_Edit_User.html"> Edit User </a>
    <a href="P11_Edit_Order_List.html"> Order List </a>
    <a href="P12_Edit_an_Order_Profile.html"> Edit Order </a>
  </div> -->


<div class="container" id="banner">
    <h1> Product List </h1>
    <h2> Here's our great selection of product! </h2>
</div>


<a href="P8_Edit_A_Product.html" class="button" style="width: 10%; margin-left: 50px; margin-top: 30px;"> Add!</a>

<?php
  $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");

  function deleteProduct($id){
    $xml = simplexml_load_file("product_data.xml") or die("Error: Cannot create object");
    for($i = 0, $length= count($xml->product); $i < $length; $i++){
      if ($xml->product[$i]->productID == $id){
        unset($xml->product[$i]);
        break;
      }
    }
    $xml->asXML("product_data.xml");
  }


  foreach ($xml->product as $product){

    echo("
      <div style=\"padding: 24px 24px 24px 24px\">
        <div style=\"padding: 24px 24px 24px 24px; background-color: lightgoldenrodyellow; border-radius: 50px\">

          <h1> $product->name </h1>
          <h2> $product->aisle</h2>

          <img src=$product->image
          width=\"30%\" style=\"display: block; margin-left: auto; margin-right: auto\">

          <p>
            $product->description
          </p>

          <table id=\"table\">
            <tr>
              <td> Weight:</td>
              <td> $product->weight </td>
            </tr>
            <tr>
              <td> Price:</td>
              <td id=\"unit_Cost\"> $product->price</td>
            </tr>
            <tr>
              <td> Calories:</td>
              <td> $product->calories</td>
            </tr>
          </table>
          <br>
          <button class=\"delete-order\" type=\"submit\" onclick=window.location.href=\"P7_list_of_products.php?deleteProduct=". $product->productID."\" style=\"margin-left: auto; min-width: 85px\"> Delete </button>
          <a href=\"P8_Edit_A_Product.php?id=$product->productID\" class=\"button\" style=\"margin-left: auto; min-width: 85px\"> Edit!</a>
        </div>
      </div>
    ");


  }
?>


<div class="footer" style="position: relative; padding: 0; margin: 0;">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>
</html>