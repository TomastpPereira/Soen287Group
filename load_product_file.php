<?php

if (file_exists('product_data.xml')) {
    $xml = simplexml_load_file('product_data.xml');
 
    print_r($xml);
    $theproduct = $xml->product[0];                // Assigns the var to the first entry labeled product
    print_r($theproduct);
    $theproduct = $xml->product[0]; 

    $child = $xml->product[0]->addChild("test"); // Creates a new child branch to the first entry labeled product
    $child->addAttribute("text", "geography");  

    echo $xml->asXML();                         // Prints the while XML object
    $xml->asXML('product_data.xml');            // How to save the file 
} else {
    exit('Failed to open product_data.xml.');
}
?>