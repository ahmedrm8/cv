<?php 

// polymorphism

interface User {

    // public $username = 'ahmed';XXX
    public const HOST = 'localhost';

    public function get();


}

class Admin implements User {
    public function get()
    {
        
    }
}