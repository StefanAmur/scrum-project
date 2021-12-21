<?php 

class Admin
{

    private int $id;

    private string $fName;

    private string $lName;

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
    public function __construct(int $id, string $fName, string $lName, string $adminName, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $fName;
        $this->email = $lName;
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
    public function getFName(): string
    {
        return $this->fName;
    }

    /**
     * @param string $name
     */
    public function setFName(string $fName): void
    {
        $this->fName = $fName;
    }


       /**
     * @return string
     */
    public function getLName(): string
    {
        return $this->lName;
    }

    /**
     * @param string $name
     */
    public function setLName(string $lName): void
    {
        $this->lName = $lName;
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
        $this->fName = $password;
    }
    

}

