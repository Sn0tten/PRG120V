<?php
/* registrer-student-dynamisk
   HTML-skjema for å registrere en student med dynamisk klassekode-liste
*/

include("db-tilkobling.php"); 
include("dynamiske-funksjoner.php"); 
?> 

<h3>Registrer student</h3>

<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
  Brukernavn: <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
  Fornavn: <input type="text" id="fornavn" name="fornavn" required /> <br/>
  Etternavn: <input type="text" id="etternavn" name="etternavn" required /> <br/>
  Klassekode: 
  <select name="klassekode" required>
      <option value="">-- Velg klasse --</option>
      <?php listeboksklassekode(); ?>
  </select> <br/>
  
  <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
if (isset($_POST["registrerStudentKnapp"])) {
    $brukernavn = $_POST["brukernavn"];
    $fornavn    = $_POST["fornavn"];
    $etternavn  = $_POST["etternavn"];
    $klassekode = $_POST["klassekode"];

    if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) {
        print ("Alle felt må fylles ut");
    } else {
        // Sjekk om studenten allerede finnes
        $sqlSetning = "SELECT * FROM student WHERE brukernavn='$brukernavn';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader != 0) {  
            print ("Studenten er registrert fra før");
        } else {
            $sqlSetning = "INSERT INTO student VALUES('$brukernavn','$fornavn','$etternavn','$klassekode');";
            mysqli_query($db, $sqlSetning) or die ("ikke mulig å registrere data i databasen");

            print ("Følgende student er nå registrert: $brukernavn $fornavn $etternavn ($klassekode)"); 
        }
    }
}
?> 
