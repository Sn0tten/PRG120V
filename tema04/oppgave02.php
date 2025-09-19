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
else if (strlen($klassekode) != 8) //klassekode har ikke 3 tegn//
{
    $lovligKlassekode=false;
    echo "klassekode består ikke av 3 tegn <br>";
}
else
{
    $tegn1=$klassekode[0];
    $tegn2=$klassekode[1];
    $tegn3=$klassekode[2];
   if(!ctype_alpha($tegn1)) //tegn 1 er ikke en bokstav//
   {
    $lovligklassekode=false;
    echo "Tegn 1 må være en bokstav <br>";
   }
   if(!ctype_alpha($tegn2)) //tegn 2 er ikke en bokstav//
   {
    $lovligklassekode=false;
    echo "Tegn 2 må være en bokstav <br>";
   }
   if(!ctype_alpha($tegn3)) //tegn 3 er ikke et siffer//
   {
    $lovligKlassekode=false;
    echo "siste tegn er ikke et siffer <br>";   
   }
}
if ($lovligKlassekode) //klasekode er korrekt fylt ut//
{
    echo "Klassekode er $klassekode <br>";
}
?>