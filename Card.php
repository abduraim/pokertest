<?php


class Card
{
    public $suit;
    public $dignity;

    public function __construct($suit, $dignity)
    {
        $this->suit = $suit;
        $this->dignity = $dignity;
    }

    public function __toString()
    {
        $suit = '';
        $dignity = '';

        switch ($this->suit) {
            case 1:
                $suit = "\e[39m♠";
                break;
            case 2:
                $suit = "\e[31m♥\e[39m";
                break;
            case 3:
                $suit = "\e[39m♣";
                break;
            case 4:
                $suit = "\e[31m♦\e[39m";
                break;
        }

        switch ($this->dignity) {
            case 1:
                $dignity = 'T';
                break;
            case 11:
                $dignity = 'B';
                break;
            case 12:
                $dignity = 'D';
                break;
            case 13:
                $dignity = 'K';
                break;
            default:
                $dignity = $this->dignity;
                break;
        }

        return "\e[32m[\e[39m$suit $dignity\e[32m]\e[39m";

    }

}