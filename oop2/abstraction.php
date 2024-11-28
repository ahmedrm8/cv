<?php 


// abstract class

abstract class Auth {

    public $username = 'kareem' ;

    public function __construct()
    {
        echo $this->username ; 
    }

    // abstract method
    public abstract function login();

}

class User extends Auth {
    public function login(){

    }
}

class Admin extends Auth {
    public function login(){

    }
}