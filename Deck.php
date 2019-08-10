<?php

require 'Card.php';


class Deck
{
    // Масти
    // 1 - Пики
    // 2 - Червы
    // 3 - Трефы
    // 4 - Бубны

    // Массив колоды
    private $deck = [];

    public function createNewDeck()
    {
        for ($suit = 1; $suit <= 4; $suit ++) {
            for ($dignity = 1; $dignity <= 13; $dignity ++) {
                $this->deck[] = new Card($suit, $dignity);
            }
        }
        shuffle($this->deck);
    }

    public function getThreeCardsFromDeck()
    {
        $threeCards = [];
        $threeCards[] = array_shift($this->deck);
        $threeCards[] = array_shift($this->deck);
        $threeCards[] = array_shift($this->deck);
        return $threeCards;
    }

    public function getTwoCardsFromDeck()
    {
        $twoCards = [];
        $twoCards[] = array_shift($this->deck);
        $twoCards[] = array_shift($this->deck);
        return $twoCards;
    }

    public function getOneCardFromDeck()
    {
        return array_shift($this->deck);
    }

    public function __construct()
    {
        $this->createNewDeck();
    }

}