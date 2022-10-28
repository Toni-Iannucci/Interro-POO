<?php
 class FreshItem extends Item {

    private $dateExpiration;

    public function __construct(string $name, int $price, int $weight, string $dateExpiration){
        parent::__construct( $name, $price, $weight);
        $this->dateExpiration = $newDateExpiration;
    }

     // setter
     public function setDateExpiration($dateExpiration){
        $this->dateExpiration = $newDateExpiration;
    }
    //Guetter
    public function getDateExpiration(){
        return $this->dateExpiration;
    }
    

}

?>
