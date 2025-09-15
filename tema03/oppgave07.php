<?php
 
$navn = array("Ferdows", "Rafeullah");
$oppdeltnavn=explode(" ", $navn);
$fornavn=$oppdeltnavn[0];
$etternavn=$oppdeltnavn[1];
print("Fornavn: $fornavn <br/>");
print("Etternavn: $etternavn <br/>");
?>