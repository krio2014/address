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
    
    public function removePerson($aFirstName,$aLastName)
    {
        
    }
    
}
?>
