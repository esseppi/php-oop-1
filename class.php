<?php

class Movie
{
    public function __construct($_titolo, int $_year, int $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->year = $_year;
        $this->originalPrice = $_prezzo;
    }

    public function getFinalPrice()
    {
        if ($this->year < 1995) {
            $this->finalPrice = $this->originalPrice * (1 - 0.2);
        } else $this->finalPrice = $this->originalPrice;
        return $this->finalPrice;
    }
}


$movieOne = new Movie('Carosello', 1990, 100);
$movieOne->getFinalPrice();
var_dump($movieOne);

$movieTwo = new Movie('Mr.Robots', 2000, 100);
$movieTwo->getFinalPrice();
var_dump($movieTwo);
