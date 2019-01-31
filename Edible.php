<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 08:26
 */

interface Edible
{
public function howToEat();
}
abstract class Fruit implements Edible{

}