<?php
namespace EE\operations;

use EE\operations\OperationInterface;

class Addition implements OperationInterface
{
    function isValid(array $numberArray): bool
    {
        foreach($numberArray as $number) {
            if (!is_numeric($number)) {
                return false;
            }

            return true;
        }
    }

    function execute(array $numberArray): float
    {
        return array_sum($numberArray);
    }
}