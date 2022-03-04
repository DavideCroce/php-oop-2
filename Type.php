<?php
require_once __DIR__  . '/Toy.php';
require_once __DIR__  . '/Food.php';
class Type extends Product
{
    use Toy;
    use Food;
}
