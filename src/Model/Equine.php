<?php

namespace App\Model;

abstract class Equine
{

    // Properties
    private string $id;
    private string $color;
    private int $water;
    private Rider $rider;

    // Constructor
    public function __construct(string $color, int $water)
    {
        $this->setColor($color)
            ->setWater($water);
    }

    // Methods ToString
    public function __toString()
    {
        $msg = "Identifiant : " . $this->getId() . "\n";
        $msg .= "Couleur : " . $this->getColor() . "\n";
        $msg .= "Eau : " . $this->getWater() . "\n";
        $msg .= "Rider : " . $this->getRider() . "\n";

        return $msg;
    }

    // Methods
    // public function drink(int $water)
    // {
    //     $this->setWater($this->getWater() + $water);
    // }

    // Affecte la catégory d'équidé seulement 3 choix possible ['Sheitland', 'Poney', 'Horse']
    public function setCategory(string $category)
    {
        $category = strtolower($category);
        if ($category == "sheitland" || $category == "poney" || $category == "horse") {
            $this->category = $category;
        } else {
            throw new \Exception("La catégorie doit être Sheitland, Poney ou Horse");
        }

        return $this;
    }

    // Affecte un Cavalier au cheval, nous limiterons la possibilités pour un Cavalier d'avoir uniquement 5 Equidés
    public function setRider(Rider $rider)
    {
        if (count($rider->getEquines()) < 5) {
            $this->rider = $rider;
        } else {
            throw new \Exception("Le cavalier ne peut avoir plus de 5 équidés");
        }

        return $this;
    }

    public function getEquines()
    {
        return $this->equines;
    }


    // Getters & Setters


    /**
     * Get the value of id
     */
    public function getId(): string
    {
        $id = "000-" . substr($this->name, 1) . "-" . substr($this->color, 1);

        return $id;
    }


    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of water
     */
    public function getWater(): string
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @return  self
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get the value of rider
     */
    public function getRider(): Rider
    {
        return $this->rider;
    }
}
