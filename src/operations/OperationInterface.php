<?php
namespace EE\operations;

interface OperationInterface {
    public function isValid(array $numberArray): bool;
    public function execute(array $numberArray): float;
}