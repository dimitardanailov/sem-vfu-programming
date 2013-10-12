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
    abstract public function setName($name);
    
    abstract public function getGender();
    abstract public function setGender($gender);
    
    abstract public function getAge();
    abstract public function setAge($age);
    
    public function printName() {
        echo $this->name;
    }
}
    
class ParentClass extends AbstractHuman  {
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

class Child extends AbstractHuman {
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
