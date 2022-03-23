# Dependency inversion principle

High-level modules should not depend on low-level modules. 
Both should depend on abstractions.

- Class Calculator depend on CalculatorOperationInterface.
- To extend operations we just need update 1 method in Calculator.