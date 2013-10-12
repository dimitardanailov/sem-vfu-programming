<?php
/* Classes */
class Human {
    private $name = null;
    private $gender = null;
    private $age = null;
    private $childrens = array();
    
    public function __construct($name, $gender, $age, $childrens = array()) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->childrens = $childrens;
    }
}

$child1 = new Human('Dimo Todorov', 'm', 12);
$child2 = new Human('Todorka Todorova', 'f', 16);

$childrens = array($child1, $child2);
$human = new Human('Todor Dimov', 'm', 35, $childrens);

var_dump($human);
?>
