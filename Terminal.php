<?php


class Terminal
{

    public function getInput($question = '')
    {
        echo $question . "\n";
        $handle = fopen("php://stdin", "r");
        $line = trim(fgets($handle));
        return $line;
    }

}