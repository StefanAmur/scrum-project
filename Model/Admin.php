<?php 

class Admin
{

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $adminName;
    private string $email;
    private string $password;

    /**
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param string $adminName
     * @param string $email
     * @param string $password
     */
    public function __construct(int $id, string $firstName, string $lastName, string $adminName, string $email, string $password)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->adminName = $adminName;
        $this->email = $email;
        $this->password = $password;
    }

     /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
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
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

       /**
     * @return string
     */
    public function getAdminName(): string
    {
        return $this->adminName;
    }

    /**
     * @param string $adminName
     */
    public function setAdminName(string $adminName): void
    {
        $this->adminName = $adminName;
    }

        /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

        /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    

}

