<?php // admin check
if(isset($_COOKIE['ID'])){
    if($_COOKIE['ID'] != 0){
        header('Location: P5_Login.php'); // redirect to index
    } 
} else {
    header('Location: P5_Login.php'); // redirect to index
}
?>