<?php

namespace App\Model;

class Capabilitie
{

    // Properties
    private string $capabilitie;

    // Constructor
    public function __construct(string $capabilitie)
    {
        $this->setCapabilitie($capabilitie);
    }

    // Methods ToString
    public function __toString()
    {
        $msg = "Capacité : " . $this->getCapabilitie() . "\n";

        return $msg;
    }

    // Getters & Setters


    /**
     * Get the value of capabilitie
     */
    public function getCapabilitie(): string
    {
        return $this->capabilitie;
    }

    /**
     * Set the value of capabilitie
     *
     * @return  self
     */
    public function setCapabilitie($capabilitie)
    {
        // 4 capacités possibles : Saut, Dressage, Cross, PoneyGames
        $capabilitie = strtolower($capabilitie);
        if ($capabilitie == "saut" || $capabilitie == "dressage" || $capabilitie == "cross" || $capabilitie == "ponygames") {
            $this->capabilitie = $capabilitie;
        } else {
            throw new \Exception("La capacité doit être Saut, Dressage, Cross ou PoneyGames");
        }

        return $this;
    }
}
