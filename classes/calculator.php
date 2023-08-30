<?php

class calculator
{
    public string $operator;
    public int $num1;
    public int $num2;

    public function __construct(string $operatorInput, int $inputNum1, int $inputNum2) {
        $this->operator = $operatorInput;
        $this->num1 = $inputNum1;
        $this->num2 = $inputNum2;
    }

    public function calculator() {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
            case 'subtract':
                $result = $this->num1 - $this->num2;
                return $result;
            case 'multiply':
                $result = $this->num1 * $this->num2;
                return $result;
            case 'division':
                $result = $this->num1 / $this->num2;
                return $result;
            default: "Error!";
            break;
        }
    }
}