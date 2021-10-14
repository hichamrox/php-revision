<?php

namespace App\Models;

use App\Models\AbstractModel;

class Animal extends AbstractModel {

function __construct(
        public string $couleur = "",
        public string $race = "", 
        public string $nom = "",
        public string $adopte = "0",  
        public int $age = 0
){}
    public function toString()
    {
        return  "Animal de Couleur : " . $this->couleur . ", race : " . $this->race . " , son petit nom :" . $this->nom . ", age:" . $this->age . ", adopte:" . $this->adopte;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getRace()
    {
        return $this->race;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }

    public function setRace($race){
        $this->race = $race;
    }

    public function setNom($nom){
        $this->nom = $nom;

    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setAdopte($adopte)
    {
        $this->adopte = $adopte;
    }

    public function parseAll($sql) : array {
        $animaux = array();
        $fetch = $this->executeQuery($sql);
        $data = $fetch['data'];
        if($fetch['count'] == 1) {
            $self = new Animal();
            $self->setCouleur($data['couleur']);
            $self->setAge($data['age']);
            $self->setRace($data['race']);
            $self->setNom($data['nom']);
            $self->setAdopte($data['adopte']);
            array_push($animaux, $self);
        }
        if($fetch['count'] > 1) {
            foreach ($data as $row) {
                $self = new Animal();
                $self->setCouleur($row['couleur']);
                $self->setAge($row['age']);
                $self->setRace($row['race']);
                $self->setNom($row['nom']);
                $self->setAdopte($row['adopte']);
                array_push($animaux, $self);
            }
        }
        return $animaux;

    }

    public function all(): array {
        return $this->parseAll("SELECT * FROM animaux ORDER BY created_at desc LIMIT 10");
    }

    public function findAllAdopte(): array {
        return $this->parseAll("SELECT * FROM animaux where adopte is false");
    }

    
    public function save(): AbstractModel {
        return $this;
    }
    public function delete(): void {

    }
}