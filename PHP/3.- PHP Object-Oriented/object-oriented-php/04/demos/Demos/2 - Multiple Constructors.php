<?php

// --------------------------------
// -- Multiple Constructors
// --------------------------------

/*

In order to gain access to both constructors when inheriting you must reference the parent constructor in the child class's constructor

*/

class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn; 

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        //echo "Person Constructor".PHP_EOL;

        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }

    public function getFirstName()
    {
         return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }

    protected function getFullName()
    {
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person
{
    public static $centuryPopular = "19th";
    private $penName;

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "", $tempPenName = "")
    {
        //echo "Author Constructor".PHP_EOL;

        parent::__construct($tempFirst, $tempLast, $tempYear);

        $this->penName = $tempPenName;
    }

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }    
    
    public function getCompleteName()    
	{
        return $this->getFullName()." a.k.a. ".$this->penName.PHP_EOL;
    }
    
    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;          
    }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899, "Mark Twain");

echo $newAuthor->getCompleteName();
