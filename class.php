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
        if ($this->year < 2000) {
            $this->finalPrice = $this->prezzo * 0.2;
        } else $this->finalPrice = $this->prezzo;
        return $this->finalPrice;
    }
}


$movieOne = new Movie('Carosello', 1000);
$movieOne->setYear(1995);
$movieOne->setDiscount();
var_dump($movieOne);

$movieTwo = new Movie('Mr.Robots', 337);
$movieTwo->setYear(1995);
$movieTwo->setDiscount();
var_dump($movieTwo);
