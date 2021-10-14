<?php

namespace App\Controllers;

use App\Models\Animal;
use App\Controllers\AbsController;

class AnimalController extends AbsController{

    function index () {
        $animal = new Animal();
        $animaux = $animal->all();
        echo $this->view("index", [ 'animaux' => $animaux ]);
    }
    function adopte () {
        $animal = new Animal();
        $animaux = $animal->findAllAdopte();
        echo $this->view("index", [ 'animaux' => $animaux ]);
    }
}