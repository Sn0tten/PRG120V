<?php  /* registrer-poststed */
/*
/*  Programmet lager et html-skjema for å registrere et poststed
/*  Programmet registrerer data (postnr og poststed) i databasen
*/
?> 

<h3>Registrer poststed </h3>

<form method="post" action="" id="registrerPoststedSkjema" name="registrerPoststedSkjema">
  emnekode <input type="text" id="emnekode" name="emnekode" required /> <br/>
  emnenavn <input type="text" id="emnenavn" name="emnenavn" required /> <br/>
  studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  <input type="submit" value="Registrer poststed" id="registrerPoststedKnapp" name="registrerPoststedKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["registrerPoststedKnapp"]))
    {
      $emnekode=$_POST ["emnekode"];
      $emnenavn=$_POST ["emnenavn"];
      $studiumkode=$_POST ["studiumkode"];

      if (!$emnekode || !$emnenavn || !$studiumkode)
        {
          print ("B&aring;de emnekode, emnenavn og studiumkode m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM emne WHERE emnekode='$emnekode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* poststedet er registrert fra før */
            {
              print ("emnekoden er registrert fra f&oslashr");
            }
          else
            {
              $sqlSetning="INSERT INTO emne VALUES('$emnekode','$emnenavn','$studiumkode');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende poststed er n&aring; registrert: $emnekode $emnenavn $studiumkode"); 
            }
        }
    }
?> 