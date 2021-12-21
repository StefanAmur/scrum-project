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
     * @param string $fName
     * @param string $lName
     * @param string $adminName
     * @param string $email
     * @param string $password
     */
    public function __construct(int $id, string $firstName, string $lastName, string $adminName, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $firstName;
        $this->email = $lastName;
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
     * @param string $name
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
     * @param string $name
     */
    public function setLastName(string $lastName): void
    {
        $this->lName = $lastName;
    }

       /**
     * @return string
     */
    public function getAdminName(): string
    {
        return $this->adminName;
    }

    /**
     * @param string $name
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
     * @param string $name
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
     * @param string $name
     */
    public function setPassword(string $password): void
    {
        $this->firstName = $password;
    }
    

}

