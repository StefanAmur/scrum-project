<?php
class Order{
    private int $id;
    private int $product;	
    private int $quantity;	
    private int $totalPrice;

    public function __construct(int $id, int $product, int $quantity, int $totalPrice)
    {
        $this->id = $id;
        $this->product = $product;
       $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    public function getId() {
        return $this->id;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }

}
?>