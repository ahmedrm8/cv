<?php 


class User {
    public $username ;
    public $address ;

    public function __construct($name , $adrs)
    {
        $this->username = $name; 
        $this->address = $adrs ;
    }

    public function __destruct()
    {
        echo $this->username ;
    }

}

################################
$user = new User('ahmed' , 'mansoura') ;



