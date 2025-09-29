<?php /* slett klasse */
/*  Programmet sletter en klasse fra databasen
*/
?>
<script src="funksjoner.js"></script>
<h3>Slett klasse </h3>
<form method="post" action=" " onsubmit="return bekreft()">
  klassekode:
  <select name="klassekode" required>
      <option value="">Velg klasse</option>
      <?php include("dynamiske-funksjoner.php"); listeboksklassekode(); ?>
  <input type="submit" value="Slett klasse" id="slettKlasseKnapp" name="slettKlasseKnapp" /> 
</form>
<?php 
  if (isset($_POST ["slettKlasseKnapp"]))
    {
      $klassekode=$_POST ["klassekode"]; 
      if (!$klassekode)
        {
          print ("klassekode m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
          $sqlSetning="SELECT * FROM klasse WHERE klassekode='$klassekode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat);
          if ($antallRader==0)  /* klassen er ikke registrert */
            {
              print ("klassekoden er ikke registrert");
            }
          else
            {
              $sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
                /* SQL-setning sendt til database-serveren */
              print ("F&oslash;lgende klasse er n&aring; slettet: $klassekode"); 
            }
        }
    }
?>
