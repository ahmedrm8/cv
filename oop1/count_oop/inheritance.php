<?php 

// inheritance 

class User {
    public $username ;
    public $address ; 

    public function __construct($name , $adrs) {
        $this->username = $name;
        $this->address = $adrs;
    }

    public function __destruct()
    {
        echo "user`s name is {$this->username} and address : {$this->address}" ;
    }
}

############################

class Admin extends User {

    public $priv = 'admin';

    // override
    public function __construct($name , $adrs , $priv) {
        // $this->username = $name;
        // $this->address = $adrs;
        parent::__construct($name,$adrs);
        $this->priv = $priv;
    }

    // override
    public function __destruct()
    {
        parent::__destruct();

        echo $this->priv ;
    }
    
}



$user = new Admin('ahmed' , 'mansoura' , 'Owner') ;
