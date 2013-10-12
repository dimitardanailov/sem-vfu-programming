<?php
// Interfaces
interface iHuman {
    public function getName();
    public function setName($name);
    
    public function getGender();
    public function setGender($gender);
    
    public function getAge();
    public function setAge($age);
}

class ParentClass implements iHuman {
    private $name = null;
    private $gender = null;
    private $age = null;
    
    public function __construct($name, $gender, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getGender() {
        return $this->gender;
    }
    
    public function setGender($gender) {
        $this->gender = $gender;
    }
     
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
}
?>
