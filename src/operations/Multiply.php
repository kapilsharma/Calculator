<?php
namespace EE\operations;

class Multiply implements OperationInterface
{
    public function isValid(array $numberArray): bool
    {
        // TODO: Implement isValid() method.
    }

    public function execute(array $numberArray): float
    {
        return array_product($numberArray);
    }
}