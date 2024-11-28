<?php 


class Form {

    trait File ;

    public $data ;
    public $errors = [] ; 

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function validate()
    {
        $this->checkUsername($this->data['username']);
        $this->checkEmail($this->data['email']);

        return $this->errors;
    }

    public function checkUsername($val)
    {
        // cross site scripting xss
        $val =  htmlspecialchars($val) ;
        $val = trim($val);

        if (empty($val)) {
           $this->errors['username'] = 'username can`t be empty'; 
        }
        

    }

    public function checkEmail($val)
    {
        $val =  htmlspecialchars($val) ;
        $val = trim($val);

        if (empty($val)) {
           $this->errors['email'] = 'email can`t be empty'; 
        } else {
            if (!filter_var($val , FILTER_VALIDATE_EMAIL)){
                $this->errors['email'] = 'invalid email address'; 
            }
        }
    }

}