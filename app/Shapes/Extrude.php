<?php

declare(strict_types=1);

namespace App\Shapes;

class Extrude {
    private $depth;
    private $shape;

    public function __construct(ShapeInterface $shape,float $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    public function volume()
    {
        $area = $this->shape->area();
        return $area*$this->depth;
    }

}
