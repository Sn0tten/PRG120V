<?php
// programmet mottar en klassekode som f.eks "PRG120V1" fra et html skjema//
// programmet sjekker om klassekoden er korrekt fylt ut//
$klassekode = $_POST["klassekode"];
$lovligklassekode = true;
if (!$klassekode) //klassekode er ikke fylt ut//
{
    $lovligklassekode = false;
    echo "Klassekode er ikke fylt ut <br>";
}
else if (strlen($klassekode) != 3) //klassekode har ikke 8  tegn//
{
    $lovligklassekode = false;
    echo "Klassekode må ha 3 tegn <br>";
}
else if (!ctype_alnum($klassekode)) //klassekode er ikke alfanumerisk//
{
    $lovligklassekode = false;
    echo "Klassekode må være alfanumerisk <br>";
}
if ($lovligklassekode) {
    echo "Klassekode er $klassekode <br>";
}
?>