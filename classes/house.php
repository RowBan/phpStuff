<?php

class House {
    // Properties
    public string $address;
    public string $houseColor;
    public int $yearBuilt;

    public function __construct($address, $houseColor, $yearBuilt) {
        $this->address = $address;
        $this->houseColor = $houseColor;
        $this->yearBuilt = $yearBuilt;
    }

    // Methods
    public function setAddress(string $address) {
        $this->address = $address;
        return $address;

    }

    public function getAddress() {
        return $this->address;
    }
    public function getColor() {
        return $this->houseColor;
    }
    public function getyearBuilt() {
        return $this->yearBuilt;
    }
}