<?php
 
$navn = array("Ferdows" "Rafeullah");
$oppdeltnavn=explode(" ", $navn[0]);
$fornavn=$oppdeltnavn[0];
$etternavn=$oppdeltnavn[1];
print("Fornavn: $fornavn <br/>");
print("Etternavn: $etternavn <br/>");
?>