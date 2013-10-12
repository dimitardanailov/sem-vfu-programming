<?php

class Account {
    private $userID = null;
    private $userName;
    private $password;
    private $email;
    private $name = null;
    private $surname = null;
    
    public function __construct($userID, $userName, $password, $email, 
           $name = null, $surname = null) {
        $this->userID = $userID;  
    }
    
    public function getUserID() {
        return $this->userID;
    }
    
    public function setUserID($userID) {
        $this->userID = $userID;
    }    
}
