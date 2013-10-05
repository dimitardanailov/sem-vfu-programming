<?php
// Echo function
echo 'index.php' . '<br/>';

/*
 * Echo Function
 */

// Anti Patern
//$a, $b, $c, ....

// Good Patern
//$i for iterators

// Variable
$cyril = 'Кирилица'; //String
// Java Style
//String myCyrilicVar = "Java";

//echo $cyril;

// Integer
$myFirstInteger = 10;
//Java Integer
//int myFirstInteger = 5;

// 0  + 10
//echo $cyril + $myFirstInteger;

// #C
//var iterator = 5;

// Double
$myFirstDouble = 1.4;
// Java Dobule
//double myFirstDouble = 1.4;

define('CONSTANT', 'myconstant');

// Arrays
$array = array(2, 3, 4, 5, 6);
print_r($array);

echo '<hr/>';
// Arrays with Keys
$arayWithKeys = array(
    'university' => 'VFU',
    'course' => 'SEM',
    'link' => 'sem.vfu.bg');
var_dump($arayWithKeys);

echo 'Course : ' . $arayWithKeys['course'];

// Object
$myFirstObject = new stdClass();
$myFirstObject->university = 'VFU';
$myFirstObject->course = 'SEM';
$myFirstObject->link = 'sem.vfu.bg';

var_dump($myFirstObject);

//Function Hello World
function HelloWorld() {
    echo 'Hello World';
}

HelloWorld();
HelloWorld();


Class Car {
    private $model = null;
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function getModel() {
        return $this->model;
    } 
    
    public function setModel($model) {
        $this->model = $model;
    }
}

$carClass = new Car('BWM');
var_dump($carClass->model);
$carModelName = 'Model .' . $carClass->getModel();
var_dump($carModelName);
$carClass->setModel('Lada');
$carModelName = 'Model .' . $carClass->getModel();
var_dump($carModelName);
$carClass->Year = 2000;

var_dump($carClass);
?>

