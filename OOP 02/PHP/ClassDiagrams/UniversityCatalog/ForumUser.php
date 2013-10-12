<?php

class ForumUser {
    
    private $userID = null;
    private $password;
    private $email;
    
    public function __construct($email) {
        $this->email = $email;   
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
}
?>
