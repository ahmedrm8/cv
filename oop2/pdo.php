<?php
class user{

public $id;
public $name;
public $email;
private $password;

public function __construct() {
    $DBH = new PDO("mysql:host=HOST;dbname=DB", "USER", "PASS");  
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

public function login($email,$password,$type){

    $DBH = new PDO("mysql:host=HOST;dbname=DB", "USER", "PASS");  
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $password_hash = sha1($password);
    try{
        if ($type != "actives") {
            throw new Exception("Type Handling Error");
        }
        $STH = $DBH->query("SELECT id, email, password FROM $type WHERE email='$email' AND password='$password_hash'");
        $STH->setFetchMode(PDO::FETCH_ASSOC);  
        $row_count = $STH->rowCount();  
        $row = $STH->fetch();

        if($row_count == 1){
            session_start();
            session_regenerate_id();
            $_SESSION['id'] == $row[id];
            return true;
        }
        else{
        return false;
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

}

public function loggout(){
    session_destroy();
    setcookie(session_name(), session_id(), 1, '/');
}

}