<?php 


trait User {

    public $username ;

    public function __construct($name)
    {
        $this->username = $name ;
    }

}

trait Admin {
    public function get()
    {
        echo $this->username ;
    }
}



################################

class Owner {
    use User , Admin ;
}

$owner = new Owner('kareem') ;
$owner -> get();