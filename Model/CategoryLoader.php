<?php

declare(strict_types=1);

require_once 'Model/DataLoader.php';

class CategoryLoader extends DataLoader {

    public function getCategories(): array {
        $categories = [];
        $sql = "SELECT * FROM Category";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($categories, $row);
        }
        return $categories;
    }

    public function addCategory(
        int $id,
        string $name,
        string|null $description,
        string|null $image
    
    ): void {
        $sql = "INSERT INTO Category(
            id, `name`, `description`,`image`) 
            VALUES(?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            $id, $name, $description, $image
        ]);
    }

    public function editCategory(
        int $id,
        string $name,
        string|null $description,
        string|null $image 
    ): void {
        $sql = "UPDATE Category SET 
                id=?, `name`=?, `description`=?, `image`=? 
                WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            $id, $name, $description, $image
        ]);
    }

    public function deleteCategory(int $id): void {
        $sql = "DELETE FROM Product WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
