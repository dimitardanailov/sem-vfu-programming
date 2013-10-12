<?php

class User
{
    //private $propertyName; 
    private $user_id = null;
    private $team_id;
    private $name;
    private $address;
    private $username;
    private $password;
    
    public function __construct($name, $address = null) {
        $this->name = $name;
        $this->address = $address;
    }
    
    public function get_name() {
        return $this->name;
    }
    
    public function set_name($name) {
        $this->name = $name;
    }
    
    public function print_user() {
        
    }
}
?>
