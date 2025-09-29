<?php
/* dynamiske-funksjoner.php
   Denne filen inneholder dynamiske funksjoner:
   - listeboksklassekode()
   - listeboksbrukernavn()
   - sjekkbokserklassekode()
*/

function listeboksklassekode()
{
    include("db.php"); // tilkobling til database
    $sql = "SELECT * FROM klasse ORDER BY klassekode;";
    $resultat = $conn->query($sql) or die("Ikke mulig å hente data fra databasen");

    while ($rad = $resultat->fetch_assoc()) {
        $klassekode = $rad["klassekode"];
        $klassenavn = $rad["klassenavn"];
        $studiumkode = $rad["studiumkode"];
        print("<option value='$klassekode'>$klassekode - $klassenavn ($studiumkode)</option>");
    }
}

function listeboksbrukernavn()
{
    include("db.php"); // tilkobling til database
    $sql = "SELECT * FROM student ORDER BY brukernavn;";
    $resultat = $conn->query($sql) or die("Ikke mulig å hente data fra databasen");

    while ($rad = $resultat->fetch_assoc()) {
        $brukernavn = $rad["brukernavn"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        print("<option value='$brukernavn'>$brukernavn - $fornavn $etternavn</option>");
    }
}

function sjekkbokserklassekode()
{
    include("db.php"); // tilkobling til database
    $sql = "SELECT * FROM klasse ORDER BY klassekode;";
    $resultat = $conn->query($sql) or die("Ikke mulig å hente data fra databasen");

    while ($rad = $resultat->fetch_assoc()) {
        $klassekode = $rad["klassekode"];
        $klassenavn = $rad["klassenavn"];
        print("<input type='checkbox' name='klassekode[]' value='$klassekode'> $klassekode - $klassenavn<br>");
    }
}
?>
