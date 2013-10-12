<?php

//Objects

$human = new stdClass();
$human->gender = 'm';
$human->age = 35;
$human->name = 'Todor Dimov';

$child1 = new stdClass();
$child1->name = 'Dimo Todorov';

$child2 = new stdClass();
$child2->name = 'Todorka Todorova';

$human->childrens = array($child1, $child2);

var_dump($human);

?>
