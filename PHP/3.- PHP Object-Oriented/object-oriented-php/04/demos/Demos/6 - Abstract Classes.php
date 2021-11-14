<?php

// --------------------------------
// -- Abstract Classes
// --------------------------------

/*

Similar to an interface it also provides a template of the needed methods for a class, but also has it's own methods that can be used.

*/

abstract class Electricity
{
    abstract public function voltage();
    abstract public function electricCordType();
    abstract public function outletStyle();

    public function powerOn()
    {

    }

    public function powerOff()
    {

    }
}

class Television extends Electricity
{
    public function changeChannel()
    {

    }

    public function adjustVolumne()
    {

    }

    public function voltage()
    {

    }

    public function electricCordType()
    {

    }

    public function outletStyle()
    {

    }
}
