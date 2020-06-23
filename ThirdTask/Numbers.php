<?php

$arguments = array();
$numbers = array();

if ($argc > 1) {
    for ($i = 1; $i < $argc; $i++) {
        $arguments = explode(" ", $argv[$i]);
    }
}

$numCount = 0;
foreach ($arguments as $num) {
    if (is_numeric($num)) {
        if(preg_match_all("/[+-]?(?<!\.)\b[0-9]+\b(?!\.[0-9])/",$num)) {
            $numbers[$numCount] = $num;
            $numCount++;
        }
    }
}

$uniqNumbers = array_unique($numbers);
sort($uniqNumbers);



class Numbers
{
}

print_r($arguments);
print_r($numbers);
print_r($uniqNumbers);
