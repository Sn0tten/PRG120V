<?php
if (isset($_POST["tall"])) {
    $tall = $_POST["tall"]; // lagre tallene i et array

    echo "<h3>Resultat:</h3>";
    // utskrift i samme rekkefølge
    echo implode(" ", $tall) . "<br>";
    // utskrift i motsatt rekkefølge
    echo implode(" ", array_reverse($tall));
} else {
    echo "Ingen tall mottatt.";
}
?>
