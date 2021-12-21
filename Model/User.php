<?php

declare(strict_types=1);

class User
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $email;
    private string $password;
    private string $addressLine;
    private string $city;
    private string $postCode;
    private string $country;

    public function __construct(int $id, string $firstname, string $lastname, $username, string $email, string $password, string $addressLine, string $city, string $postCode, string $country)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
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

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getUsername()
    {
        return $this->username;
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
