<?php

    require('personObject.php');
    require('testPerson.php');
    require('addressObject.php');
    require('testAddress.php');
    
    echo'<html>';
	echo'<table border="1">';
	echo'<th>Name<th>Age</th><th>Address</th><th>Contact Number</th>';
		
	foreach($people as $person)
	{
    
    echo'<tr>';
    echo'<td>';
        echo $person->getName(0);
	echo'</td>';
	echo'<td>';
		echo $person->getAge();
	echo'</td>';
	echo '<td>';
		echo $person->getAddress();
	echo '</td>';
	echo '<td>';
		echo $person->getContactNumber();
	echo '</td>';
		
    echo'</tr>';
	}
    echo'</table>';
    
    echo'</html>';
    
?>