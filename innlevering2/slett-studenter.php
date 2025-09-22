<?php /* slett studenter */
/*  Programmet sletter studenter fra databasen
*/
?>
<script src="funskjoner.js"></script>
<h3>Slett studenter </h3>
<form method="post" action="" id="slettStudenterSkjema" name="slettStudenterSkjema" onsubmit="return bekreft()">
  brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
  <input type="submit" value="Slett studenter" id="slettStudenterKnapp" name="slettStudenterKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php 
  if (isset($_POST ["slettStudenterKnapp"]))
    {
      $brukernavn=$_POST ["brukernavn"];
        if (!$brukernavn)
            {
            print ("brukernavn m&aring; fylles ut");
            }
        else
            {
            include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
            $sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn';";
            $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
            $antallRader=mysqli_num_rows($sqlResultat);
            if ($antallRader==0)  /* studenten er ikke registrert */
                {
                print ("brukernavnet er ikke registrert");
                }
            else
                {
                $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
                mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
                    /* SQL-setning sendt til database-serveren */
    
                print ("F&oslash;lgende student er n&aring; slettet: $brukernavn"); 
                }
            }
    }
?>