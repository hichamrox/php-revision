<?php

require_once __DIR__ .'/vendor/autoload.php';
use App\Controllers\AnimalController;

$animalController = new AnimalController();

try {
    $route =  $_SERVER['REQUEST_URI'];
    switch ($route) {
        case '/':
            $animalController->index();
            break;
        case '/adopte':
            $animalController->adopte();
            break;
            
        default:
            echo "Not found";
            break;
    }
    
} catch (\Throwable $th) {
    echo $th;
}