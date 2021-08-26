<?php // admin check
if(isset($_COOKIE['ID'])){
    if($_COOKIE['ID'] != 0){
        header('Location: index.php'); // redirect to index
    } 
} else {
    header('Location: index.php'); // redirect to index
}
?>