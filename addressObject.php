<?php


class address{
    
    public $people;
        
    //Constructs a new address object
    public function __construct()
    {
        $this->people = array();        
		return true;
        
    }

    public function addPerson($aFirstName,$aLastName,$aDOB, $anAddress, $aPhoneNumber)
    {
            $person = new person($aFirstName,$aLastName,$aDOB,$anAddress,$aPhoneNumber);
            $this->people[] = $person;
            
    }
    
    public function getPeople()
    {
        return $this->people;
    }
    
	
	/*
	*	Removes a person by searching the people array using the first and last names
	*/
    public function removePerson($aFirstName,$aLastName)
    {
        $tmpPeople = $this->getPeople();
		$output = array(); 
		
		foreach($tmpPeople as $person)
		{
			//get first and last name from current person object
			$personFirstName = strtolower($person->getName(1));
			$personLastName = strtolower($person->getName(2));
			
			//Get comparison first and last name provided as parameters to this function
			$aFirstName = strtolower($aFirstName);
			$aLastName = strtolower($aLastName);
			
			/*Debug code*/
//			echo ('first name = '.$personFirstName.' compares with '.$aFirstName);
//			echo ('<br/>Last name = '.$personLastName.' compares with '.$aLastName);
			
			/* compare the provided parameter first and last names with the first and last name of the current person object
			if match is found then add the current person object to the output array. else do nothing*/
			if($personFirstName == $aFirstName && $personLastName == $aLastName)
			{
				
				$output[] = $person;
				
				/*Debug code*/
//				var_dump(count($output));
//				var_dump($person);
//				echo count($output);
			}
			else
			{
//				echo '<br/>no deletey<br/>';
			}	
		}
		/*check the length of the $output array, if this equals 1 then uset the */
		if(count($output)==1)
				{
					/*debug code*/
//					$person = $output[0];
//					$key = array_search($person, $output);
//					var_dump($output);
//					var_dump($key);
					
					unset($this->people[0]);
					//some database code to remove this person from the array
					return true;
				}
				else
				{
					return false;
				}
    }
    
}
?>
