<?php 


class User {

    public $username ; 
    public $address ;

    public function __construct($username , $address)
    {
        $this->username = $username ;
        $this->address = $address ;
    }

    public function getData()
    {
        echo "user name is $this->username and $this->address ";
    }

}

###################################

class Admin extends User {
    public $priv ; // admin - owner - super-admin

    // override
    public function __construct($username , $address, $priv)
    {
        parent::__construct($username , $address);
        $this->priv = $priv;
    }

    public function getData()
    {
        // echo "user name is $this->username and $this->address  and priv = $this->priv";

        parent::getData();
        echo "and priv = $this->priv";
    }
}




###################################

$users = new Admin('kareem' , 'Mansoura' , 'owner');
$users -> getData();


