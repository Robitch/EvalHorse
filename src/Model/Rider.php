<?php

namespace App\Model;

class Rider extends Human
{

    // Constructor
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, string $category)
    {
        parent::__construct($name, $adress, $street, $postCode, $city, $category);
    }

    // Methods
    // get all the equines of the rider
    public function getEquines()
    {
        $equines = [];
        foreach (Equine::getEquines() as $equine) {
            if ($equine->getRider() == $this) {
                $equines[] = $equine;
            }
        }
        return $equines;
    }
}
