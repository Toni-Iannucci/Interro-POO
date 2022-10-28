<?php

class Item{

    private $name;
    private $price;
    private $weight;


    // Mise en place des setters et guetters
    public function __construct(string $newName, int $newPrice, int $newWeight){
 
        $this->setName($newName);
        $this->setPrice($newPrice);
        $this->setWeight($newWeight);
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

    public function setPrice($newPrice){
        $this->price = $newPrice;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setWeight($newWeight){
        $this->weight = $newWeight;
    }
    
    public function getWeight(){
        return $this->weight;
    }
    

}
// Fais une nouvelle instance et retourne les
$itemBouteille = new Item('Bouteille', 3, 1);

echo $itemBouteille->getName();
echo " : " .number_format($itemBouteille->getPrice(), 2, '.', '') . " €". "<br>";
echo " Son poids est de  :  " . $itemBouteille->getWeight() . " kg"."<br>";