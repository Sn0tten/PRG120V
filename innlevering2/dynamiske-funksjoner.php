<?php  /* dynamiske funksjoner */
/*
Denne filen inneholder dynamiske funksjoner:
  - listeboksklassekode()
  - listeboksbrukernavn()
  - sjekkbokserklassekode()
*/

function listeboksklassekode()
{
    include("db-tilkobling.php");  /* tilkobling til database-server utført */

    $sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++)
    {
        $rad = mysqli_fetch_array($sqlResultat);
        $klassekode = $rad["klassekode"];
        $klassenavn = $rad["klassenavn"];
        $studiumkode = $rad["studiumkode"];

        print("<option value='$klassekode'>$klassekode - $klassenavn ($studiumkode)</option>");
    }
}

function listeboksbrukernavn()
{
    include("db-tilkobling.php");  /* tilkobling til database-server utført */

    $sqlSetning = "SELECT * FROM student ORDER BY brukernavn;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++)
    {
        $rad = mysqli_fetch_array($sqlResultat);
        $brukernavn = $rad["brukernavn"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];

        print("<option value='$brukernavn'>$brukernavn - $fornavn $etternavn</option>");
    }
}

function sjekkbokserklassekode()
{
    include("db-tilkobling.php");  /* tilkobling til database-server utført */

    $sqlSetning = "SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die("ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r = 1; $r <= $antallRader; $r++)
    {
        $rad = mysqli_fetch_array($sqlResultat);
        $klassekode = $rad["klassekode"];
        $klassenavn = $rad["klassenavn"];

        print("<input type='checkbox' id='klassekode' name='klassekode[]' value='$klassekode' /> $klassekode - $klassenavn <br/>");
    }
}
?>
