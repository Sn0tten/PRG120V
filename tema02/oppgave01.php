<?php
$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
if (isset($POST ["fortsett"]))

    $svar =$_POST["svar"];
if ($svar ==9)
{
    print("Riktig. 3 ganger 3 er 9");
}
else
{
    print("Feil. 3 ganger 3 er ikke $svar");
}
?>