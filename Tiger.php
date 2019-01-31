<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 08:23
 */
include_once "Animal.php";
class Tiger extends Animal
{
   public function makeSound()
   {
       return "Tiger: Roarrrr!";
   }

}