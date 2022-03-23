<?php

$calculator = new Calculator;

$a = $calculator->doCalculation(Calculator::ADDITION_OPERATION, [1, 2]);

var_dump($a);