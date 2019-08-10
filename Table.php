<?php

require 'Player.php';
require 'Deck.php';

class Table
{
    public $tableName;
    public $deck;
    public $communityCards = [];
    public $players = [];

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->deck = new Deck();
    }

    public function addPlayer($name)
    {
        $this->players[] = new Player($name);
    }

    public function getPlayers()
    {
        return $this->players;
    }

    public function refreshDeck()
    {
        $this->deck = new Deck();
    }

    public function takeStartHandToPlayers()
    {
        foreach ($this->players as $player) {
            $player->addCardsToHand($this->deck->getTwoCardsFromDeck());
        }
    }

    public function showAllPlayersHands()
    {
        foreach ($this->players as $player) {
            echo $player . ': ';
            foreach ($player->getHand() as $card) {
                echo $card;
            }
            echo "\n";
        }
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function takeFlop()
    {
        $this->communityCards = $this->deck->getThreeCardsFromDeck();
    }

    public function showCommunityCards()
    {
        if (count($this->communityCards)) {
            echo "Community cards:\n";
            echo "---------------------------\n" . " ";
            foreach ($this->communityCards as $card) {
                echo $card;
            }
            echo "\n---------------------------\n";
        }
    }

}