<?php

class Food
{
    protected $ingredients;
    protected $food_type;
    protected $weight;

    public function __construct($ingredients, $food_type, $weight)
    {
        $this->ingredients = $ingredients;
        $this->food_type = $food_type;
        $this->weight = $weight;
    }
}
