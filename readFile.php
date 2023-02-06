<?php

$puntero = fopen("file.csv", "r");

while ($line = fgetcsv($puntero)) {
    $line[1] = (int) $line[1];
    $line[2] = ($line[2] == "si") ? true : false;
    array_push($fileArray, $line);
}
echo "<pre>";
var_dump($line);
echo "</pre";
