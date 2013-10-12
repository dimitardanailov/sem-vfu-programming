<?php

abstract class AbstractHuman {
    private $name = null;
    private $gender = null;
    private $age = null;
    
    public function __construct($name, $gender, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }
    
    abstract public function getName();
    abstract public function setName();
    
    abstract public function getGender();
    abstract public function setGender();
    
    abstract public function getAge();
    abstract public function setAge();
}
    
class ParentClass extends AbstractHuman {
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
