<?php

declare(strict_types=1);

namespace App\Library;

class Shelf {

    private $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function addItem(TitledInterface $item)
    {
        $this->items->push($item);
    }

    public function titles() : array
    {
        return $this->items->map(fn($item)=>$item->title())->all();
    }
}