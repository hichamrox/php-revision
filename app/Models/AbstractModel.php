<?php

namespace App\Models;

use PDO;

abstract class AbstractModel {
    public abstract function all(): array;
    public abstract function save(): AbstractModel;
    public abstract function delete(): void;

    
    public function getPdo() {
         $dsn = "mysql:host=127.0.0.1;port=8889;dbname=animaux";
         $user = "root";
         $passwd = "root";
         return new PDO($dsn, $user, $passwd);
    }

    protected function executeQuery($query) {
        $stm = $this->getPdo()->query($query);
        return ['count' => $stm->rowCount(), 'data' => $stm->fetchAll()];
    }

    protected function execPreStmt($query, $var = []) {
        $data = $this->pdo->prepare($query);
        foreach ($var as $key => $value) {
           $data->bindParam($key, $value);
        }
        $data->execute();
        return $data->fetchAll();
    }
}