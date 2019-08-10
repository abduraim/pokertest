<?php

require 'Terminal.php';
require 'Table.php';

$terminal = new Terminal();

$table = null;


while (true) {

    $command = $terminal->getInput();

    switch ($command) {
        case 'new table':
            $tableName = $terminal->getInput('Input table name:');
            $table = new Table($tableName);
            echo "new table ($table->tableName) was created!\n";
            break;
        case 'new player':
            if ($table) {
                $playerName = $terminal->getInput('Input player name:');
                $table->addPlayer($playerName);
                echo "new player ($playerName) was added!\n";
            } else {
                echo "First you need create a table!\n";
            }
            break;
        case 'player list':
            if ($table) {

                foreach ($table->getPlayers() as $player) {
                    echo $player;
                }
            } else {
                echo "First you need create a table!\n";
            }
            break;
        case 'take hands':
            if ($table && count($table->players)) {
                $table->takeStartHandToPlayers();
                echo "Hands successfully taked!\n";
            } else {
                echo "Table or players do not created!\n";
            }
            break;
        case 'take flop':
            if ($table && count($table->players) && count($table->communityCards) == 0) {
                $table->takeFlop();
                echo "Flop successfully taked!\n";
            } else {
                echo "Table or players do not created or Flop is taked!\n";
            }
            break;
        case 'show com cards':
            $table->showCommunityCards();
            break;
        case 'exit':
            exit("Bye bye!\n");
            break;
    }

}







exit();






$table = new Table('Holdem Poker');

$table->addPlayer('Timur');
$table->addPlayer('Artur');

$table->takeStartHandToPlayers();

$table->showAllPlayersHands();


echo "What do you want?\n";
$handle = fopen("php://stdin", "r");
$line = fgets($handle);
if (trim($line) == 'yes') {
    echo 'Thank you!';
    exit();
} else {
    echo 'Not thanks...';
    exit();
}


