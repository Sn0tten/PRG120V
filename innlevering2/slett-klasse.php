<?php  /* dynamisk-listeboks */
/*
/*  Programmet lager et skjema med en dynamisk listeboks med klassekode og poststed der klassekode er verdien
*/
?> 

<h3>Velg poststed</h3>

<form method="post" action="" id="velgklassekode" name="velgklassekode">
  klassekode
  <select name="klassekode" id="klassekode">
    <option value="">velg klassekode</option>
    <?php include("dynamiske-funksjoner.php"); listeboksklassekode(); ?> 
  </select>  <br/>
  <input type="submit" value="Velg klassekode" id="velgklassekodeKnapp" name="velgklassekodeKnapp" /> 
</form>

<?php
  if (isset($_POST ["velgklassekodeKnapp"]))
    {
      $klassekode=$_POST ["klassekode"];
      if (!$klassekode)
        {
           print ("Poststed ikke valgt <br />");
        }
      else
        {
           print ("F&oslash;lgende klassekode er valgt: $klassekode <br />");
        }	
    }
?> 