<?php

interface CalculatorOperationInterface {
    public function calculate(array $variables): float|int;
}