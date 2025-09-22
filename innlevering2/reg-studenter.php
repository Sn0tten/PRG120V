<?php /* registrer studenter */
/*
/*  Programmet lager et html-skjema for å registrere en student
/*  Programmet registrerer data (studentnr, navn, klassekode) i databasen
*/
?>
<h3>Registrer student </h3>
<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
  brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
  fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
  etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
  klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
  <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php
    if (isset($_POST ["registrerStudentKnapp"]))
        {
        $brukernavn=$_POST ["brukernavn"];
        $fornavn=$_POST ["fornavn"];
        $etternavn=$_POST ["etternavn"];
        $klassekode=$_POST ["klassekode"];
    
        if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode)
            {
            print ("B&aring;de brukernavn, fornavn, etternavn og klassekode m&aring; fylles ut");
            }
        else
            {
            include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
    
            $sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn';";
            $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
            $antallRader=mysqli_num_rows($sqlResultat); 
    
            if ($antallRader!=0)  /* studenten er registrert fra før */
                {
                print ("brukernavnet er registrert fra f&oslashr");
                }
            else
                {
                $sqlSetning="INSERT INTO student VALUES('$brukernavn','$fornavn','$etternavn','$klassekode');";
                mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                    /* SQL-setning sendt til database-serveren */
    
                print ("F&oslash;lgende student er n&aring; registrert: $brukernavn $fornavn $etternavn $klassekode"); 
                }
            }
        }
?>