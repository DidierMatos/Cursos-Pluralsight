<?php

// --------------------------------
// -- Interfaces
// --------------------------------

/*

Interfaces create a template which the developer needs to abide by in order to complete a class. 

*/

interface Electricity
{
    public function voltage();
    public function electricCordType();
    public function outletStyle();
}

class Television implements Electricity
{
    public function changeChannel()
    {

    }

    public function adjustVolumne()
    {

    }

    /*public function voltage()
    {

    }

    public function electricCordType()
    {

    }

    public function outletStyle()
    {

    }*/
}
