<?php

declare(strict_types=1);

namespace App\Tricksy;

use Iterator;

class Alphabet implements Iterator
{
    private $position = 0;
    private $array;

    public function __construct()
    {
        $this->position = 0;
        
        $array = [];
        for($i=65;$i<=90;$i+=1){
            $array[] = $i;
        };

        $this->array = $array;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        $char = chr($this->array[$this->position]);
        return $char;
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->array[$this->position]);
    }
}