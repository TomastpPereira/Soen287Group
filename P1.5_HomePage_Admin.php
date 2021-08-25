<!DOCTYPE html>

<html lang="en">
    <head>
        <title> Home Page </title>
        <link rel = "stylesheet type" type = "text/css" href= "Style_P1_P2.css" >
    </head>

    <body style="background-image:linear-gradient(rgba(0, 0, 0, 0.33),rgba(0, 0, 0, 0.33)), url('images/GroceryStore.jpg');">
    <?php include('admin_Navbar.php'); ?>

        <div id="banner">
            <h1> This is the Backstore</h1>
            <h4> Employees Only </h4>
        </div>

        <div style="padding-left: 24px; padding-right: 24px;">
            <p> This is the backstore homepage. Only Admins can access this page.</p>
            <p> This page gives access to the backstore functions. </p>
        </div>

        <div class="push"> </div>

        <div class="footer" style="position: fixed;">
            <p style="text-align: center;"> Our Info </p>
            <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
            <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
        </div>
    </body>

</html>