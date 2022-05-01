<?php

class Movie
{
    public function __construct($_titolo, int $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
    }
    public function setYear($_year)
    {
        return $this->year = $_year;
    }


    public function setDiscount()
    {
        if ($this->year < 1995) {
            $this->finalPrice = $this->prezzo * (1 - 0.2);
        } else $this->finalPrice = $this->prezzo;
        return $this->finalPrice;
    }
}


$movieOne = new Movie('Carosello', 100);
$movieOne->setYear(1990);
$movieOne->setDiscount();
var_dump($movieOne);

$movieTwo = new Movie('Mr.Robots', 100);
$movieTwo->setYear(2000);
$movieTwo->setDiscount();
var_dump($movieTwo);
