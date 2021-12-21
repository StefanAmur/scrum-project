<?php

declare(strict_types=1);

// honestly not sure if having so many props and get methods
// or passing so many args in the constructor is bad practice or not
// please let me know if you do. thanks.
class Product {
    private int $id;
    private string $name;
    private int $cat_id;
    private float $price;
    private int $quantity;
    private string $description;
    private string $img_path;
    private int $seller_id;
    private string $list_date;
    private string $condition;
    private float $shipping_price;

    public function __construct(
        int $id,
        string $name,
        int $cat_id,
        float $price,
        int $quantity,
        string $description,
        string $img_path,
        int $seller_id,
        string $list_date,
        string $condition,
        float $shipping_price
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->cat_id = $cat_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->img_path = $img_path;
        $this->user_id = $seller_id;
        $this->list_date = $list_date;
        $this->condition = $condition;
        $this->Shipping_price = $shipping_price;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCatId(): int {
        return $this->cat_id;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getImgPath(): string {
        return $this->img_path;
    }

    public function getSellerId(): int {
        return $this->seller_id;
    }

    public function getListDate(): string {
        return $this->list_date;
    }

    public function getCondition(): string {
        return $this->condition;
    }

    public function getShippingPrice(): float {
        return $this->shipping_price;
    }
}
