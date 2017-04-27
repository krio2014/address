<?php

//    require('addressObject.php');
//    require('personObject.php');
//echo '<a href="testPerson.php">Person Test</a>';


$address= new address();
$address->addPerson("adam","evans","06/03/1987","328 worlemoor road", "07896983691");
$address->addPerson("Anne-Marie","burke","10/24/1988","328 worlemoor road", "07411410041");
$address->addPerson("Anne-Marie","burke","10/24/1988","328 worlemoor road", "07411410041");
$address->removePerson("adam","evans");
$people = $address->getPeople();
//echo '<h2>Results:</h2>';
//echo '<pre>';
//var_dump($people[1]->getName(10));
//var_dump($people[0]->getName(0));
echo'<br/>';
//foreach($people as $person)
//{
//    echo $person->getName(0).' '.$person->getAge().'<br/>';
//};

//var_dump($people[]);





echo '</pre>';
?>