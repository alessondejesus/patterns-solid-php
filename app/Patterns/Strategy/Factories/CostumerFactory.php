<?php

namespace App\Patterns\Strategy\Factories;

class CostumerFactory
{
    /**
     * @var string
     */
    private string $firstName;
    /**
     * @var string
     */
    private string $lastName;
    /**
     * @var string
     */
    private string $address;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return CostumerFactory
     */
    public function setFirstName(string $firstName): CostumerFactory
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return CostumerFactory
     */
    public function setLastName(string $lastName): CostumerFactory
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return CostumerFactory
     */
    public function setAddress(string $address): CostumerFactory
    {
        $this->address = $address;
        return $this;
    }

}
