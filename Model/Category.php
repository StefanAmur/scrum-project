<?php 

class Category
{

    private int $id;
    private string $name;
    private string|null $description;
    private string|null $image;





    /**
     * @param int $id
     * @param string $name
     * @param string|null $description
     * @param string|null $image
     */
    public function __construct(int $id, string $name, ?string $description, ?string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $description;
        $this->image = $image;
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

          /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
    

}

