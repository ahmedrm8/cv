<?php 
echo "<pre>";

// new mysqli()
// mysqli_connect()
// new PDO // 12 

// sql injection

$dsn = "mysql:host=localhost;dbname=inventory_system;charset=utf8";

$conn = new PDO($dsn , 'root' , '');

$id = 1 ;
$select = "SELECT * FROM sales WHERE id = ?";


try {
    // prepare statemnt
    $prepare = $conn -> prepare($select);
    // $prepare -> bindParam(1 , $id);
    $prepare -> execute([$id]);
    $data = $prepare -> fetch(PDO::FETCH_ASSOC);

    print_r($data);
}catch(PDOException $e) {
    echo $e->getMessage() ;
}
