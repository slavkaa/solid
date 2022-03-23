<?php
namespace CalculatorOperations;

use CalculatorOperationInterface;

class Addition implements CalculatorOperationInterface
{
    public function calculate(array $variables): float|int
    {
        if (false === array_key_exists(0, $variables) || false === array_key_exists(1, $variables)) {
            throw new \Exception('Input variables array should have 0 and 1 element.');
        }

        return $variables[0] + $variables[0];
    }
}