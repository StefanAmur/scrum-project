<?php

declare(strict_types=1);

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
}