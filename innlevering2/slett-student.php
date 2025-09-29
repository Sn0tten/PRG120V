<?php /* slett student med dynamisk listeboks */
/*  Programmet sletter en student fra databasen
*/
?>
<script src="funksjoner.js"></script>
<h3>Slett student </h3>
<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onsubmit="return bekreft()">
  brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <
  <?php print("<option value=''> velg student </option>");
        include("dynamiske-funksjoner.php"); listeboksBrukernavn();
        print("</select>"); ?> <br/>
  <input type="submit" value="Slett student" id="slettStudentKnapp" name="slettStudentKnapp" /> 
</form>
<?php
  if (isset($_POST ["slettStudentKnapp"]))
    {
      include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
      $brukernavn=$_POST ["brukernavn"];
      if (!$brukernavn)
        {
          print ("brukernavn m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
            $sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn';";
            mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
            /* SQL-setning sendt til database-serveren */

          print ("F&oslash;lgende student er n&aring; slettet: $brukernavn"); 
        }
    }
?>