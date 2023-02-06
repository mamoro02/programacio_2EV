<?php 

$puntero = fopen("datos.csv", "r");
echo "<table border=1>";

while ($linea = fgetcsv($puntero)) {
    echo "</tr>";
    foreach ($linea as $dato) echo "<td> $dato</td>";
    echo "</tr>";
}
echo "</table>";
fclose($puntero);