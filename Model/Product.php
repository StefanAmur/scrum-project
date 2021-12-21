<?php

declare(strict_types=1);

// honestly not sure if having so many props and get methods
// or passing so many args in the constructor is bad practice or not
// please let me know if you do. thanks.
class Product {
    private int $id;
    private string $name;
    private int $catId;
    private float $price;
    private int $quantity;
    private string $description;
    private string $imgPath;
    private int $sellerId;
    private string $listDate;
    private string $condition;
    private float $shippingPrice;

    public function __construct(
        int $id,
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
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->catId = $catId;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->imgPath = $imgPath;
        $this->userId = $sellerId;
        $this->listDate = $listDate;
        $this->condition = $condition;
        $this->ShippingPrice = $shippingPrice;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCatId(): int {
        return $this->catId;
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
        return $this->imgPath;
    }

    public function getSellerId(): int {
        return $this->sellerId;
    }

    public function getListDate(): string {
        return $this->listDate;
    }

    public function getCondition(): string {
        return $this->condition;
    }

    public function getShippingPrice(): float {
        return $this->shippingPrice;
    }
}
