<?php

namespace App\Model;

class Stable
{

    // Properties
    private string $name;
    private string $adress;
    private string $postCode;
    private string $city;
    private Manager $manager;


    // Constructor
    public function __construct(string $name, string $adress, string $postCode, string $city, Manager $manager)
    {
        $this->setName($name)
            ->setAdress($adress)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setManager($manager);
    }

    // Methods ToString
    public function __toString()
    {
        $msg = "Nom de l'écurie : " . $this->getName() . "\n";
        $msg .= "Adresse : " . $this->getAdress() . "\n";
        $msg .= "Code postal : " . $this->getPostCode() . "\n";
        $msg .= "Ville : " . $this->getCity() . "\n";
        $msg .= "Gérant : " . $this->getManager() . "\n";

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
     * Get the value of manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */
    public function setManager($manager): self
    {
        $this->manager = $manager;

        return $this;
    }
}
