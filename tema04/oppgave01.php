<?php
$_POST = $postnummber = $poststed = "";
$feil = false;
if ($_SERVER["REQUEST_METHOD"] == "POST")
    
    if (empty($_POST["postnummber"])) {
        $feil = true;
    } else {
        $postnummber = test_input($_POST["postnummber"]);
        if (!preg_match("/^[0-9]{4}$/", $postnummber)) {
            $feil = true;
        }
    }  