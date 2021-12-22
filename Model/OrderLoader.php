<?php 
declare(strict_types=1);
require_once 'Model/DataLoader.php';

class OrderLoader extends DataLoader{

    public function getOrders(): array {
        $orders = [];
        $sql = "SELECT * FROM `order` INNER JOIN product ON 'order.id' = product.id;";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($students, $row);
        }
        return $students;
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
}

?>