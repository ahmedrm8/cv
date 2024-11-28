<?php 


// encapsulation
// access modifiers
// public - protected - private

class User {

    private $username = 'kareem';

    public function get() {
        echo $this->username ;
    }

    public function set($newName)
    {
        if (true) {
            $this->username = $newName ;
        }
    }
}

####################################

$user = new User ;
$user -> username = 'islam';
$user -> get();




/*

class Admin extends User {
    public function data()
    {
        echo $this->username ;
    }

    private static function name()
    {
        echo 'name static method';
    }
}


####################################

// $admin = new Admin();
// $admin -> username = 'ahmed';
// $admin -> data();

// Admin::name(); // private static method
*/