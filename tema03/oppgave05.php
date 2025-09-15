<?php
$sum= 0; // start på 0
$gjennomsnitt=0;
for ($tall = 1; $tall <= 10; $tall++) {
    $sum += $tall;  // legg til tallet i summen
    $gjennomsnitt= $sum/10;
}
// utskrift SKAL være utenfor løkka
print("Summen av tallene 1 til 10 er $sum <br/>");
print("Gjennomsnittet av tallene 1 til 10 er $gjennomsnitt");
?>  