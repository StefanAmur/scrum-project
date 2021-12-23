<?php 
declare(strict_types=1);
require_once 'Model/DataLoader.php';

class OrderLoader extends DataLoader{

    public function getOrders(): array {
        $orders = [];
        $sql = "SELECT * FROM `order` INNER JOIN product ON 'order.id' = product.id;";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($orders, $row);
        }
        return $orders;
    }

    public function getOrdersByProductId(int $id) {
        $orderByProductId = [];
        $sql = "SELECT name FROM `order` INNER JOIN product ON 'order.id'=product.id WHERE product.id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($orderByProductId, $row);
        }
        return $orderByProductId;
    }

    public function placeOrder(int $product, int $quantity, float $totalPrice): void {
        $sql = "INSERT INTO order(product, quantity, totalPrice) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product, $quantity, $totalPrice]);
    }

    
    public function editOrder(int $product, int $quantity, float $totalPrice, int $id): void {
        $sql = "UPDATE order SET product=?, quantity=?, totalPrice=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product, $quantity, $totalPrice, $id]);
    }

    public function deleteOrder(int $id): void {
        $sql = "DELETE FROM order WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}

?>
