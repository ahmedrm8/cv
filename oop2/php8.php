<?php 


declare(strict_types=1);


class User {
    public static function get(string $username):void {
        print_r ($username) ;
    }
}

User::get('kareem');

