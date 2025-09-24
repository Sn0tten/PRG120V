<?php /* registrer student */
/*  Programmet lager et html-skjema for å registrere en student
/*  Programmet registrerer data (brukernavn, fornavn, etternavn, klassekode4) i databasen
*/
?>
<h3>Registrer student</h3>
<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
  brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
  fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
  etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
  klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
  <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php
if (isset($_POST["registrerStudentKnapp"])) {
    include("db-tilkobling.php"); // koble til databasen

    // Trim og escape input
    $brukernavn = mysqli_real_escape_string($db, trim($_POST["brukernavn"]));
    $fornavn = mysqli_real_escape_string($db, trim($_POST["fornavn"]));
    $etternavn = mysqli_real_escape_string($db, trim($_POST["etternavn"]));
    $klassekode = mysqli_real_escape_string($db, trim($_POST["klassekode"]));

    // Sjekk at alle felter er fylt ut
    if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
        echo "Både brukernavn, fornavn, etternavn og klassekode må fylles ut";
        exit;
    }

    // Sjekk om brukernavn allerede finnes
    $sql = "SELECT * FROM student WHERE brukernavn='$brukernavn'";
    $result = mysqli_query($db, $sql) or die("Ikke mulig å hente data fra databasen");
    if (mysqli_num_rows($result) > 0) {
        echo "Brukernavnet er registrert fra før";
        exit;
    }

    // Sjekk at klassekode eksisterer
    $sql = "SELECT * FROM klasse WHERE klassekode='$klassekode'";
    $result = mysqli_query($db, $sql) or die("Ikke mulig å hente data fra klasse-tabellen");
    if (mysqli_num_rows($result) == 0) {
        echo "Feil: klassekode '$klassekode' finnes ikke i databasen.";
        exit;
    }

    // Sett inn studenten i databasen
    $sql = "INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) 
            VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode')";
    mysqli_query($db, $sql) or die("Ikke mulig å registrere data i databasen");

    echo "Følgende student er nå registrert: $brukernavn $fornavn $etternavn $klassekode";
}
?>
