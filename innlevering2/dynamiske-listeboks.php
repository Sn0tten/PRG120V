<?php /* dynamiske-listeboks */
/*  Programmet lager en listeboks med alle klassenavn hentet fra databasen
*/
?>
<form method="post" action="" id="dynamiskeListeboksSkjema" name="dynamiskeListeboksSkjema">
  Velg klassenavn <select id="klassenavn" name="klassenavn">
    <option value="" selected>Velg</option>
    <?php 
      include("dynamiske.funksjoner.php");
      listeboksklassekode();  /* funksjonskallet */
    ?>
  </select> <br />
  <input type="submit" value="Vis valgt klasse" id="visValgtKlasseKnapp" name="visValgtKlasseKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php 
  if (isset($_POST ["visValgtKlasseKnapp"]))
    {
      $klassenavn=$_POST ["klassenavn"];
        if (!$klassenavn)
            {
            print ("klassenavn m&aring; velges");
            }
        else
            {
            print ("Du valgte klassenavn: $klassenavn");
            }
    }
?>
