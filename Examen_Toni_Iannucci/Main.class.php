<?php

require('Item.class.php');
require('ShoppingCart.class.php');
require('FreshItem.class.php');


$itemCornFlakes = new Item("corn flakes", 5, 5);
echo '<br>';
echo $itemCornFlakes->getName();
echo " : " .number_format($itemCornFlakes->getPrice(), 2, '.', '') . " €". "<br>";
echo " Son poids est de  :  " . $itemCornFlakes->getWeight() . " kg"."<br>";

$itemChewingGum = new Item("chewing gum",4,1);
echo '<br>';
echo $itemChewingGum->getName();
echo " : " .number_format($itemChewingGum->getPrice(), 2, '.', '') . " €". "<br>";
echo " Son poids est de  :  " . $itemChewingGum->getWeight() . " kg"."<br>";

$itemViande = new FreshItem("Viande", 25, 3, "2022-11-05");
echo $itemViande->getName();
echo " : " .number_format($itemViande->getPrice(), 2, '.', '') . " €". "<br>";
echo " Son poids est de  :  " . $itemViande->getWeight() . " kg"."<br>";
echo " A consommer avant : " . $itemViande->dateExpiration;


