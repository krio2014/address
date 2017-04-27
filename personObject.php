<?php
    date_default_timezone_set('UTC');

class person{
    
    
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $address;
    protected $contactNumber;
    protected $dateCreated;
	protected $personPK;
    
    
    
    public function __construct($aFirstName, $aLastName,$aDOB,$aAddress,$acontactNumber)
    {
        $this->firstName = $aFirstName;
        $this->lastName = $aLastName;
        $this->dateOfBirth = $aDOB;
        $this->address = $aAddress;
        $this->contactNumber = $acontactNumber;
        $this->dateCreated = date('mjY');
		$this->personPK = null; 
    }
    
    /*
    *   returns the name of this person
    *   Options: 0 for full name, 1 for firstname, 2 for lastname
    */
    public function getName($option)
    {
        switch ($option) {
    		// add a person object
			case 0:
                $fullname = $this->firstName.' '.$this->lastName;
                return $fullname;
                break;
            case 1:
                return $this->firstName;
                break;
            case 2:
                return $this->lastName;
                break;
             default:
                return $this->firstName.' '.$this->lastName;
                break;
        }
        
    }
    
    /*
    *   returns this persons Date of birth
    */
    public function getDOB()
    {
        return $this->dateOfBirth;
    }
    
    /*
    *   returns the age of the person
    */
    public function getAge()
    {
        
            
        $dob = date_create($this->getDob());
        $today = new DateTime();
        $diff = $today->diff($dob);
        $age = $diff->y;
        $dob = $this->getDOB();      
        return $age;
    }
    
    /*
    * Returns this persons address
    */
    public function getAddress()
    {
        return $this->address;
    }
    
    public function getDateCreated()
    {
        $year = substr($this->dateCreated,-4);
        $day = substr($this->dateCreated,-6,-4);
        $month = substr($this->dateCreated,-8,-6);
//        echo '<p/>year: '.$year.'<p/>'.$day.'<p/>'.$month.'<p/>';
        $date = $day.'/'.$month.'/'.$year;
        return $date;
    }
	public function getContactNumber()
	{
		return $this->contactNumber;
	}
	
	
	
}

?>


<!--
$date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
echo $date->format('Y-m-d');-->
