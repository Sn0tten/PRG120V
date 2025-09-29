<?php /*slett student */
/*  Programmet lager et html-skjema for å slette en student
/*  Programmet sletter data (student) i databasen
*/
?>
<script src="funskjoner.js"></script>
<h3>Slett student </h3>
<form method="post" action="" onsubmit="return bekreft()">
  brukernavn:
  <option value="">velg student</option>
      <?php include("dynamiske-funksjoner.php"); listeboksbrukernavn(); ?>
  <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php
 if (isset($_POST ["slettStudentKnapp"]))
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
<p><a href="innlevering2/index.html">Tilbake til meny</a></p>
