<?php

declare(strict_types=1);

class HomepageController {
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) {
        //this is just example code, you can remove the line below
        // $user = new User('John Smith');
        $categoryLoader = new CategoryLoader();
        $categories = $categoryLoader->getCategories();
        var_dump($categories);
        
        // var_dump($date);
        // $productLoader->addProduct('super cheap glider', 1, 5000, 1, 'very old but gold glider', '../uploads/old_glider.jpg', 1, $date, 'used', 300);
        // $productLoader->editProduct('tip top cheap glider', 1, 5000, 1, 'old school, best school', '../uploads/old_glider.jpg', 'used', 300, 9);
        // $productLoader->deleteProduct(15);
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }
}
