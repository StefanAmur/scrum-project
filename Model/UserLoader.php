<?php

declare(strict_types=1);

require_once 'Model/DataLoader.php';

class UserLoader extends DataLoader
{
    public function getUser(): array {
        $users = [];
        $sql = "SELECT * FROM user";
        $result = $this->connect()->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            array_push($users, $row);
        }
        return $users;
    }

    public function addUser(string $firstName, string $lastName, string $userName, string $email, string $password, string $addressLine, string $city, string $postCode, string $country) : void {
        $sql = "INSERT INTO user (first_name, last_name, username, password, address_line, city, post_code, country) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $userName, $email, $password, $addressLine, $city, $postCode, $country]);    
    }

    public function editUser(string $firstName, string $lastName, string $userName, string $email, string $password, string $addressLine, string $city, string $postCode, string $country, int $id) : void {
        $sql = "UPDATE user SET first_name=?, last_name=?, username=?, password=?, address_line=?, city=?, post_code=?, country=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $userName, $email, $password, $addressLine, $city, $postCode, $country, $id]); 
    }

    public function deleteUser(int $id) : void {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}