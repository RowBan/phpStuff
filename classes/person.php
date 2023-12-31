<?php

class Person {
    // Properties
    public $name;
    public $eyeColor;
    public $age;

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}