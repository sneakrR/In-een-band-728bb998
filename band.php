<?php

$geld = 0;

$array = array( "Citizen of Glass"=>"4.5",
                "Night"=>"9",
                "New Eyes"=>"5",
                "Strange Trails"=>"10");

foreach($array as $key => $value) {
    echo $key . " kost $" . $value . PHP_EOL;
}
echo PHP_EOL;

foreach($array as $key => $value) {
    $geld += $value;
}

echo "Het totaalbedrag van alle albums is " . $geld . PHP_EOL;

echo "DE gemiddelde prijs van alle albus is " . $geld / (count($array));