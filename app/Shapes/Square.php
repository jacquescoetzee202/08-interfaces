<?php

declare(strict_types=1);

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function area()
    {
        return ($this->side*$this->side);
    }
    
}