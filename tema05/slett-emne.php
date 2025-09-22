<?php /* slett-emne */
/*  Programmet lager et html-skjema for å slette et emne
/*  Programmet sletter data (emne) i databasen
*/
?>
<script src="funskjoner.js"></script>
<h3>Slett emne </h3>
<form method="post" action="" id="slettEmneSkjema" name="slettEmneSkjema" onsubmit="bekreft()">
  emnekode <input type="text" id="emnekode" name="emnekode" required /> <br/>
  <input type="submit" value="Slett emne" id="slettEmneKnapp" name="slettEmneKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php 
  if (isset($_POST ["slettEmneKnapp"]))
    {
      $emnekode=$_POST ["emnekode"];

      if (!$emnekode)
        {
          print ("emnekode m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM emne WHERE emnekode='$emnekode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader==0)  /* emnet er ikke registrert */
            {
              print ("emnekoden er ikke registrert");
            }
          else
            {
              $sqlSetning="DELETE FROM emne WHERE emnekode='$emnekode';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende emne er n&aring; slettet: $emnekode"); 
            }
        }
    }
?>
