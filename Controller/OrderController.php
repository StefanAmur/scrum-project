<?php

declare(strict_types=1);

class OrderController{
    public function render(array $GET,array $POST){

        require 'View/orderView.php';
        $orderLoaderController = new OrderController();
        $orderLoaderController->addOrders();

    }

    public function addOrders(){

        $orderLoader = new OrderLoader();
        $students = $orderLoader->getOrders();

        if (isset($POST['add'])) {
            $orderLoader->addOrder($POST['product'], (int)$POST['quantity'], (int)$POST['totalPrice']);
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer");
        }
    }
}
?>