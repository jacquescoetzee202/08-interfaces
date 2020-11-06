<?php

declare(strict_types=1);

namespace App\Library;

class Library {

    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf)
    {   
        $this->shelves->push($shelf);
    }

    public function titles() : array
    {
        $titles = $this->shelves->flatMap(function ($shelf) {
            return $shelf->titles();
        })->all();

        return $titles;
    }
}