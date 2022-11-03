<?php

namespace App\Model;

abstract class Event
{

    // Properties
    private int $MaxCommitments;
    private int $MaxWater;

    // Methods
    public function subscribeHorse(): self
    {
        $this->setMaxCommitments($this->getMaxCommitments() - 1);
        return $this;
    }

    public function drinkHorse(): self
    {
        $this->setMaxWater($this->getMaxWater() - 1);
        return $this;
    }

    // Getters & Setters

    /**
     * Get the value of MaxCommitments
     */
    public function getMaxCommitments(): int
    {
        return $this->MaxCommitments;
    }

    /**
     * Set the value of MaxCommitments
     *
     * @return  self
     */
    public function setMaxCommitments($MaxCommitments): self
    {
        $this->MaxCommitments = $MaxCommitments;

        return $this;
    }

    /**
     * Get the value of MaxWater
     */
    public function getMaxWater(): int
    {
        return $this->MaxWater;
    }

    /**
     * Set the value of MaxWater
     *
     * @return  self
     */
    public function setMaxWater($MaxWater): self
    {
        $this->MaxWater = $MaxWater;

        return $this;
    }
}
