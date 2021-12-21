<?php 

class Category
{



    protected string $name;

    protected string|null $description;



    /**
     * @param string $name
     * @param string|null $description
     */
    public function __construct(?string $name, ?string $description)
    {
      
        $this->name = $name;
        $this->email = $description;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

        /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    

}

