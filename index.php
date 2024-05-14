<?php

function roulette_numbers($active_numbers){
    foreach ($active_numbers as $number) {
        echo $number, "<br>";
    }
}


$bets = [true];

function betting($bets){
    $numbers = array();
    for ($i = 0; $i <= 36; $i++) {
        ${"number_" . $i} = $bets[0];

        array_push($numbers, ${"number_" . $i});
    }
    return $numbers;
}

$numbers = betting($bets);



roulette_numbers($numbers);