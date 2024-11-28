<?php 


$users = new Database('ahmed');
$users -> readAll(); // return array 
$users -> read('id' , 5); // return array
$users -> insert([
    'username' => 'kareem' ,
    'email' => 'kareem@mail.com',
    'password' => 123123 ,
    'gender' => 0 ,
    'priv' => 0
]);
