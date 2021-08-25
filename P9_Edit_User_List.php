<?php include('admin_Check.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="./Styles_P9 - COPY of Styles_P4_P11.css">
</head>
<body>
<div class="navbar">
    <a class="active" href="index.html">Home</a>
    <a href="P7_list_of_products.html"> Product List </a>
    <a href="P8_Edit_A_Product.html"> Edit Product </a>
    <a href="P9_Edit_User_List.html"> User List </a>
    <a href="P10_Edit_User.html"> Edit User </a>
    <a href="P11_Edit_Order_List.html"> Order List </a>
    <a href="P12_Edit_an_Order_Profile.html"> Edit Order </a>
</div>

<div class="div-head">
    <div class="title">
        <?php
        $xml = simplexml_load_file("users/test.xml");
        $amount = $xml->amount;
        ?>
        <h1 class="title-h1">User List (<?= $amount ?>)</h1>
        
    </div>
    <div class="Add">
        <button class="add-order" id="add-order" type="submit" onclick="location.href='P10_Edit_User_New.php'"><strong>Add</strong></button>
    </div>
</div>


<div class="outer-rec2">


    <?php
    $xml = simplexml_load_file("users/test.xml");
    foreach ($xml->userlist->user as $user) {
        $ID = (int)$user->ID;
        $firstname = $user->firstname;
        $lastname = $user->lastname;
        $email = $user->email;
    ?>

    <div class="inner-rows">
       <div class="inner-rows-text" style="width: 285px; height: auto;">
            <h3><?= $firstname ?> <?= $lastname ?></h3>
            <h3>Email: <span style="font-weight: normal"><?= $email ?></span></h3>

            <h3>ID number: <span style="font-weight: normal">#<?= $ID ?></span> </h3>

        </div>
        <div class="inner-div">
            <div class="inner-buttons">
            <form action="P10_Edit_User_New.php" method="GET">
                <input type="hidden" name="ID" value="<?= $ID ?>" >
                <button class="edit-order" type="submit" ><strong>Edit User</strong></button>
            </form>
                <div class ="cart-buttons" class="add-delete">
                    <form action="delete_User.php" method="GET">
                        <input type="hidden" name="ID" value="<?= $ID ?>" >
                        <button class="delete-order" id="delete-orderBtn" type="submit" ><strong>Delete</strong></button>
                    </form>
                </div>
            </div>
        </div>

    </div><br>
            <?php } ?>


</div>

<div class="footer">
    <p style="text-align: center;"> Our Info </p>
    <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
    <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
</div>
</body>

<!-- <script>

    // var deleteBtn = document.getElementById("delete-orderBtn");
    // var addBtn = document.getElementById("add-order");

    // addBtn.addEventListener('click', function() {
    //     alert("Adding new order...");
    // });

    // deleteBtn.addEventListener('click', function() {
    //     alert("Order deleted!")
    // });

</script> -->
</html>