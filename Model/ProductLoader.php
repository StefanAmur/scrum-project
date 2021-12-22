<?php

declare(strict_types=1);

require_once 'Model/DataLoader.php';

class ProductLoader extends DataLoader {

    public function getProducts(): array {
        $products = [];
        $sql = "SELECT * FROM Product";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($products, $row);
        }
        return $products;
    }

    public function addProduct(
        string $name,
        int $catId,
        float $price,
        int $quantity,
        string $description,
        string $imgPath,
        int $sellerId,
        string $listDate,
        string $condition,
        float $shippingPrice
    ): void {
        $sql = "INSERT INTO Product(
            `name`, category, price, quantity, `description`, 
            image, seller_id, `date`, `condition`, shipping_price) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            $name, $catId, $price, $quantity, $description,
            $imgPath, $sellerId, $listDate, $condition, $shippingPrice
        ]);
    }

    public function editProduct(
        string $name,
        int $catId,
        float $price,
        int $quantity,
        string $description,
        string $imgPath,
        string $condition,
        float $shippingPrice,
        int $id
    ): void {
        $sql = "UPDATE Product SET 
                `name`=?, category=?, price=?, quantity=?, 
                `description`=?, `image`=?, `condition`=?, shipping_price=?  
                WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            $name, $catId, $price, $quantity,
            $description, $imgPath, $condition, $shippingPrice, $id
        ]);
    }

    public function deleteProduct(int $id): void {
        $sql = "DELETE FROM Product WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
