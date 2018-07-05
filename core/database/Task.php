<?php


class Task
{
    protected $imie;
    protected $nazwisko;
    protected $wiek;
    protected $prog_pelnoletnosci = 18;
    protected $czy_pelnoletni = true;

    public function __construct($_imie, $_nazwisko, $_wiek) //Konstruktor
    {
        // Automatically triggered on instantiation
        $this->imie = $_imie;
        $this->nazwisko = $_nazwisko;
        $this->wiek = $_wiek;
        $this->setMajority();
    }

    public function getImie()
    {
        return $this->imie;
    }

    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    public function getWiek()
    {
        return $this->wiek;
    }

    public function isOfAge()
    {
        return $this->czy_pelnoletni;
    }

    protected function setMajority()
    {
        $this->czy_pelnoletni = $this->wiek >= $this->prog_pelnoletnosci ? true : false;
    }
}
