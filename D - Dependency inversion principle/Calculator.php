<?php

class Calculator
{
    const ADDITION_OPERATION = 'addition';
    const SUBTRACTION_OPERATION = 'subtraction';
    const MULTIPLICATION_OPERATION = 'multiplication';
    const DIVISION_OPERATION = 'division';

    protected $calculationOperations = [];

    public function __construct()
    {
        $this->appOperation(static::ADDITION_OPERATION, 'CalculatorOperations\Addition');
        $this->appOperation(static::SUBTRACTION_OPERATION, 'CalculatorOperations\Subtraction');
        $this->appOperation(static::MULTIPLICATION_OPERATION, 'CalculatorOperations\Multiplication');
        $this->appOperation(static::DIVISION_OPERATION, 'CalculatorOperations\Division');
    }

    public function doCalculation(string $operationAlias, array $variables)
    {
        if (array_key_exists($operationAlias, $this->calculationOperations)) {
            return $this->calculationOperations[$operationAlias]->calculate($variables);
        } else {
            throw new \Exception('Undefined operation alias: ' . $operationAlias . '.');
        }
    }

    protected function appOperation(string $alias, string $classFullPath)
    {
        $calculationOperations[$alias] = new $classFullPath;
    }
}