<?php 


class User {
    public const HOST = 'localhost';
    public static $username = 'ahmed' ;

    public static function get()
    {
        echo static::$username ;
    }
}

// User::get();


// task 


class Str {
    public static function random(){

    }
}

Str::random(100); // return string with random value




// echo User::HOST ;
// echo User::$username ;
// $users = new User ;
// $users = new User ;
// $users -> get();