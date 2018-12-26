<?php

class Addition
{
    private $numberArray;

    function __construct(array $numberArray)
    {
        if (!$this->isValid($numberArray)) {
            echo "error";
            exit;
        }

        $this->numberArray = $numberArray;
    }

    function isValid(array $numberArray)
    {
        foreach($numberArray as $number) {
            if (!is_numeric($number)) {
                return false;
            }

            return true;
        }
    }
}