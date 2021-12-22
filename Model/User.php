<?php

declare(strict_types=1);

class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $userName;
    private string $email;
    private string $password;
    private string $addressLine;
    private string $city;
    private string $postCode;
    private string $country;

    public function __construct(int $id, string $firstName, string $lastName, $userName, string $email, string $password, string $addressLine, string $city, string $postCode, string $country)
    {
        $this->id = $id;
        $this->firstname = $firstName;
        $this->lastname = $lastName;
        $this->username = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->addressLine = $addressLine;
        $this->city = $city;
        $this->postCode = $postCode;
        $this->country = $country;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAddressLine()
    {
        return $this->addressLine;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function getCountry()
    {
        return $this->country;
    }
}
