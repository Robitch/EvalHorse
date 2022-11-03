<?php

namespace App\Model;

class Manager extends Human
{

    // Constructor
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, string $category)
    {
        parent::__construct($name, $adress, $street, $postCode, $city, $category);
    }
}
