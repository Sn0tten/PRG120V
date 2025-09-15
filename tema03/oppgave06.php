<?php
if (isset($_POST["tall"])) {
    $tall = (int) $_POST["tall"]; // hent og konverter til heltall

    echo "<h3>Tallene fra 1 til $tall:</h3>";

    for ($i = 1; $i <= $tall; $i++) {
        echo $i . " ";
    }
} else {
    echo "Ingen tall mottatt.";
}
?>
