<?php
session_start();
if (isset($_GET["ID"])) {
    $ID = $_GET["ID"];

    if($ID == 0){
        header("Location: P9_Edit_User_List.php");
        } else {
        $file = simplexml_load_file("users/test.xml");
        list($user) = $file->xpath("//user[./ID='$ID']");
        unset($user[0]);
        list($currentAmount) = $file->xpath("//amount");
        $currentAmount[0] = $currentAmount[0] - 1;

        echo $file->asXML("users/test.xml");
        }
}

header("Location: P9_Edit_User_List.php");
