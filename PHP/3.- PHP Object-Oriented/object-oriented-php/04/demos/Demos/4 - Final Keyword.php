<?php

// --------------------------------
// -- Final Keyword
// --------------------------------

/*

The final keyword allows the developer to prevent a class's method from being overwritten if it's inherited. It can also prevent an entire class from being inherited. 

*/

final class Person
{
    const AVG_LIFE_SPAN = 79;

    private $firstName;
    private $lastName;
    private $yearBorn; 

    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }

    final public function getFirstName()
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

    function __destruct()
    {
        //echo "Never put off till tomorrow what may be done day after tomorrow just as well. – ".$this->penName;
    }

    public function getFirstName()
    {
         return $this->penName;
    }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899, "Mark Twain");

echo $newAuthor->getFirstName();
