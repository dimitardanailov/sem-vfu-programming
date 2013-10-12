<?php
// Inheritance
class Human  {
    private $name = null;
    private $gender = null;
    private $age = null;
    
    public function __construct($name, $gender, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }
    
    static function prinHello($name) {
        echo 'Hello, ' . $name;
    }
    
    private function greetings() {
        echo 'Greetings';
    }
}

class ParentClass extends Human {
    private $name = null;
    private $gender = null;
    private $age = null;
    private $childrens = array();
    
    public function __construct($name, $gender, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }
    
    public function getName() {
        //$this->greetings();
        return parent::prinHello($this->name);
    } 
    
    public function getChildrens() {
        return $this->childrens;
    }            
    
    public function setChildren(Child $child) {
        $this->childrens[] = $child;
    }
} 

Class Child extends Human {
    private $parents = array();
    
    public function __construct($name, $gender, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        
    }
    
    public function getParents() {
        return $this->parents;
    }
    
    public function setParent(ParentClass $parent) {
        $this->parents[] = $parent;
    }
}

echo '<h2>Human : </h2>';
$jesus = new Human('Jesus', 'm', 33);
var_dump($jesus);
echo '<hr/>';

echo '<h2>Parents : </h2>';
$parentTodor = new ParentClass('Todor Dimov', 'm', 35);
var_dump($parentTodor);
echo '<hr/>';

$parentVioleta = new ParentClass('Violeta Dimova', 'f', 32);
var_dump($parentVioleta);
echo '<hr/>';

echo '<h2>Chilrens: </h2>';
$childDimo = new Child('Dimo Todorov', 'm', 12);
var_dump($childDimo);
echo '<hr/>';

$childTodorka = new Child('Todorka Todorova', 'f', 16);
var_dump($childTodorka);
echo '<hr/>';

$parentTodor->setChildren($childDimo);
$parentTodor->setChildren($childTodorka);
var_dump($parentTodor);
echo $parentTodor->getName();
echo '<hr/>';

$parentVioleta->setChildren($childDimo);
$parentVioleta->setChildren($childTodorka);
var_dump($parentVioleta);
echo '<hr/>';

$childDimo->setParent($parentVioleta);
$childDimo->setParent($parentTodor);
var_dump($childTodorka);
echo '<hr/>';

$childTodorka->setParent($parentVioleta);
$childTodorka->setParent($parentVioleta);
var_dump($childTodorka);
echo '<hr/>';
?>
