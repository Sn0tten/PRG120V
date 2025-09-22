<?php
/* registrer-studium */
/*
/*  Programmet lager et html-skjema for å registrere et studiekode
/*  Programmet registrerer data (studium og studiumkode) i databasen
*/
?> 

<h3>Registrer studium </h3>

<form method="post" action="" id="registrerStudiumSkjema" name="registrerStudiumSkjema">
  studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  studium <input type="text" id="studium" name="studium" required /> <br/>
  <input type="submit" value="Registrer studium" id="registrerStudiumKnapp" name="registrerStudiumKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>

<?php 
  if (isset($_POST ["registrerStudiumKnapp"]))
    {
      $studiumkode=$_POST ["studiumkode"];
      $studium=$_POST ["studium"];

      if (!$studiumkode || !$studium)
        {
          print ("B&aring;de studiumkode og studium m&aring; fylles ut");
        }
      else
        {
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

          $sqlSetning="SELECT * FROM studium WHERE studiumkode='$studiumkode';";
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
          $antallRader=mysqli_num_rows($sqlResultat); 

          if ($antallRader!=0)  /* studiumet er registrert fra før */
            {
              print ("studiumkoden er registrert fra f&oslashr");
            }
          else
            {
              $sqlSetning="INSERT INTO studium VALUES('$studiumkode','$studium');";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                /* SQL-setning sendt til database-serveren */

              print ("F&oslash;lgende studium er n&aring; registrert: $studiumkode $studium"); 
            }
        }
    }