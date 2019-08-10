<?php


class Player
{
    public $name;
    public $hand = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        $hand = '';

        if (count($this->hand)) {
            foreach ($this->hand as $card) {
                $hand .= $card;
            }
        } else {
            $hand = 'empty';
        }



        return 'name: ' . $this->name . "\n" .
            'hand: ' . $hand . "\n" . '----------' . "\n";
    }

    public function addCardsToHand($cards)
    {
        foreach ($cards as $card) {
            $this->hand[] = $card;
        }
    }

    public function getHand()
    {
        return $this->hand;
    }

    public function probability()
    {

    }
}