<?php 

// error_reporting(0);

$conn = new mysqli('localhost','root' , '' , 'limit');

try {

    $select = "SELECT * FROM productsss";
    $query = $conn -> query($select);

    // throw new Exception('errrorrrrrr')

} catch(Exception $e) {

    echo "<pre>";
    print_r($e->getMessage());

} catch(TypeError $e) {

    echo "<pre>";
    print_r($e);
    
}

