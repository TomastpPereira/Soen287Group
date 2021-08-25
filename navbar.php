<div class="navbar">
    <a class="active" href="index.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">
            Aisles
        </button>
        <div class="dropdown-content">
            <a href="P2_Fruits.php"> Fruits & Vegetables</a>
            <a href="P2_Cereals.php"> Cereals </a>
            <a href="P2_ChipsandCandy.php"> Chips and Candy </a>
            <a href="P2_Meat.php"> Meat </a>
        </div>
    </div>
    <a href="P4_ShoppingCart.php"> Shopping Cart </a>
    <?php
    if (!isset($_COOKIE['firstname'])) {
        echo '<a href="P5_Login.php"> Login </a>
                     <a href="P6_SignUp.php"> Sign Up </a>';
    }
    ?>
    <?php
    if (isset($_COOKIE['firstname'])) {
        echo ' <a href="logout.php"> Log Out </a>';
        if ($_COOKIE['ID'] == 0) {

            echo ' <a href="P1.5_HomePage_Admin.php"> Backstore Pages </a>';
        }
    }
    ?>
    <h3 style="color: white; margin-bottom: 0; float: right; margin-right: 20px;  <?php if (isset($_COOKIE['firstname'])) {
        echo "display:block;";
    } else {
        echo "display:none;";
    } ?>"> Welcome, <?= $_COOKIE["firstname"]; ?> </h3>
</div>

