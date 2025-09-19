<?php
// programmet mottar postnummer fra et html skjema//
// programmet sjekker om postnummeret er korrekt fylt ut//
$postnummer = $_POST["postnummer"];
$lovligpostnummer = true;
if (!$postnummer) //postnummer er ikke fylt ut//
{
    $lovligpostnummer = false;
    echo "Postnummer er ikke fylt ut <br>";
}
else if (strlen($postnummer) != 4) //postnummer har ikke 4 siffer//
{
    $lovligpostnummer = false;
    echo "Postnummer må ha 4 siffer <br>";
}
else if (!is_numeric($postnummer)) //postnummer er ikke et tall//
{
    $lovligpostnummer = false;
    echo "Postnummer må være et tall <br>";
}
if ($lovligpostnummer) {
    echo "Postnummer er $postnummer <br>";
}
?>
