<?php
include "Animal.php";
include "Chicken.php";
include "Tiger.php";
include "Apple.php";
include "Orange.php";
$chicken = new Chicken();
echo $chicken->makeSound()."<br/>";
echo $chicken->howToEat();