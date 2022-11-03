<?php

namespace App\Model;

abstract class Human
{
    // Properties
    private string $name;
    private string $adress;
    private string $street;
    private string $postCode;
    private string $city;
    private string $category;

    // Constructor
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, string $category)
    {
        $this->setName($name)
            ->setAdress($adress)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setCategory($category);
    }

    // Methods ToString
    public function __toString()
    {
        $msg = "Nom : " . $this->getName() . "\n";
        $msg .= "Adresse : " . $this->getAdress() . "\n";
        $msg .= "Rue : " . $this->getStreet() . "\n";
        $msg .= "Code postal : " . $this->getPostCode() . "\n";
        $msg .= "Ville : " . $this->getCity() . "\n";
        $msg .= "Catégorie : " . $this->getCategory() . "\n";

        return $msg;
    }

    // Getters & Setters

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */
    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postCode
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @return  self
     */
    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }
}
