<?php

declare(strict_types=1);

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return ($this->radius*$this->radius)*pi();
    }
    
}