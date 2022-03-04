<?php

class Toy extends Type
{
    protected $color;
    protected $material;
    protected $height;
    protected $width;
    protected $weight;

    public function __construct($color, $material, $height, $width, $weight)
    {
        $this->color = $color;
        $this->material = $material;
        $this->height = $height;
        $this->width = $width;
        $this->weight = $weight;
    }
}
