<?php

function display()
{
    echo "hello ".$_POST["PName"];
}

if(isset($_POST['submit']))
{
   display();
} 
?>