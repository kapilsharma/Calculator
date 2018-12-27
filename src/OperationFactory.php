<?php
namespace EE;

use EE\Exceptions\OperationNotFoundException;
use EE\operations\Multiply;
use EE\operations\OperationInterface;
use EE\operations\Addition;

class OperationFactory
{
    /**
     * short description
     *
     * Long description
     *
     * @param string $operation
     * @return OperationInterface
     * @throws OperationNotFoundException
     */
    public static function getOperation(string $operation): OperationInterface {
        switch ($operation) {
            case 'add':
            case 'addition':
            case 'plus':
                return new Addition();
            case 'multiply':
            case 'product':
                return new Multiply();
            default:
                throw new OperationNotFoundException("Operation '$operation' not found");
        }
    }
}