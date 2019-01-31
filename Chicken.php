<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 08:19
 */
include_once "Animal.php";
include_once "Edible.php";
class Chicken extends Animal implements Edible
{
public function makeSound()
{
   return "Chicken: Cluck!";
}
public function howToEat()
{
    return"Chicken can be fried";
}
}