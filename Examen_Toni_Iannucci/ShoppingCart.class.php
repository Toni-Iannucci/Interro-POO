<?php

class ShoppingCart{
    // Nous allons stocker nos items dans une array pour pouvoir la parcourir 
      private $items = array();
      // Pour pouvoir attribuer un id
      private $id;

      public function __construct(){
        // L'id va être généré par la fonction uniqid, le premier paramétre correspond au premier chiffre de l'ID, le second a sa longueur
          $this->id = uniqid(1,false);
      }
      
    // Fonction pour enlever l'item
      public function removeItem($item){
        //l'item est stocké dans une array puis on regarde si le nom de l'item existe dans l'array
        $tableau = array_search($item, $this->items);
        // S'il existe alors on l'enleve
        if($index !== false){
            unset($this->items[$tableau]);
            return true;
        // S'il n'existe pas alors on retourne false
        } else {
          return false;
        }
    }
    // On fait une fonction addItem pour déterminer si l'item est trop lourd ou non
      public function addItem($item){
        // On prend le poids de l'item ici
        $weight = $item->getWeight();
         
        if ($weight < 10 ){
            // S'il est moins lourd que 10kg alors il sera affiché 
          $this->items[] = $item;
        } else {
         // Si le poid est supérieur à 10kg alors il n'est pas conforme et est rejeté 
          echo '<br>';
          echo "Le produit est trop lourd ";
        }
      }
     // Guetter pour avoir l'item 
      public function getItems(){
          return $this->items;
      }
      
      // Guetter pour avoir l'Id
      public function getId(){
          return $this->id;
      }

      // Fonction pour compter le nombre d'items dans l'array
      public function itemCount(){
          return count($this->items);
      }

      

     
  
      // Fonction pour retourner l'ensemble des informations  sous format string
      public function toString(){
        
          $string = "Id du panier " . $this->id . " contains " . $this->itemCount();
          $string .= "<br>";
          $string .= "Items: <br>";
          
          // Parcourir le tableau pour récupérer les items et les afficher pour chaque item
          foreach($this->items as $item){
              $string .= $item->getName() . " : "  . $item->getWeight() . " kg <br>";
          }
          echo $string;
      }

      //Fonction pour récupérer les id, les items, leurs noms, leurs prix et leur poids et les retourner
      public function showCart(){
        echo '<br> Cart ID: ' . $this->id . '<br>';
        echo 'Panier : ' . $this->itemCount() . '<br>';
          foreach($this->items as $item){
            echo $this->name;
            echo  $this->price. " €". "<br>";
            echo " Son poids est de  :  " . $this->weight . " kg"."<br>";
          }
      }
  
}
