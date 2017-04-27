<?php

//    require('addressObject.php');
//    require('personObject.php');
//echo '<a href="testAddress.php">address test</a>';


    $person = new person("adam","evans","10/24/1988","328 worlemoor road", "07896983691"); 
    $age = $person->getAge();
    $dob = $person->getDob();
    $address= $person->getAddress();
    $Created = $person->getDateCreated();



//echo '<h2>Results</h2>';
//echo '<pre>';
//
//var_dump($person);
//var_dump($age);
//var_dump($dob);
//var_dump($address);
//var_dump($Created);





echo '</pre>';
?>