<?php

// for use method chaining just return the paramitar from all method

class Chain
{

    public function showName($value)
    {
        return $value;
    }

    public function showAge($value)
    {
        return $value;
    }

    public function getInfo()
    {
        echo "hello my name is " . $this->showName('Risad') . " and my age is" . $this->showAge(22);
    }
}

$obj = new Chain;

$obj->getInfo();
