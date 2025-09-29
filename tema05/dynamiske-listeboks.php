<?php /* dynamiske-listeboks */
/* programet lager en listeboks med alle studiumkoder hentet fra databasen
*/
?>
<form method="post" action="" id="dynamiskeListeboksSkjema" name="dynamiskeListeboksSkjema">
  Velg studiumkode <select id="studiumkode" name="studiumkode">
    <option value="" selected>Velg</option>
    <?php 
      include("dynamiske.funksjoner.php");
      listeboksstudiumkode();  /* funksjonskallet */
    ?>
  </select> <br />
  <input type="submit" value="Vis valgt studiumkode" id="visValgtStudiumkodeKnapp" name="visValgtStudiumkodeKnapp" />
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php 
  if (isset($_POST ["visValgtStudiumkodeKnapp"]))
    {
      $studiumkode=$_POST ["studiumkode"];
        if (!$studiumkode)
            {
            print ("studiumkode m&aring; velges");
            }
        else
            {
            print ("Du valgte studiumkode: $studiumkode");
            }
    }
?>
