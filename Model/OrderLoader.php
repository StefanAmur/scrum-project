<?php 
declare(strict_types=1);
require_once 'Model/DataLoader.php';

class OrderLoader extends DataLoader{

    public function getOrders(): array {
        $orders = [];
        $sql = "SELECT * FROM order";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($students, $row);
        }
        return $students;
    }
}

?>