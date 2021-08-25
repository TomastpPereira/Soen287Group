<?php include('admin_Check.php'); ?>

<div class="navbar">
    <a class="active" href="index.php">Home</a>
    <a href="P7_list_of_products.php"> Product List </a>
    <!-- <a href="P8_Edit_A_Product.html"> Edit Product </a> -->
    <a href="P9_Edit_User_List.php"> User List </a>
    <!-- <a href="P10_Edit_User.html"> Edit User </a> -->
    <a href="P11_Edit_Order_List.php"> Order List </a>
    <!-- <a href="P12_Edit_an_Order_Profile.php"> Edit Order </a> -->

    <h3 style="color: white; margin-bottom: 0; float: right; margin-right: 20px;  <?php if(isset($_COOKIE['firstname'])){echo "display:block;";} else{echo "display:none;";}?>"> Welcome, <?= $_COOKIE["firstname"]; ?> </h3>

</div>
