<?php  /*  dynamiske funksjoner */
/*
/*  denne filen inneholder følgende dynamiske funksjoner:
/*    listeboksklassenavn()
/*    sjekkbokserklassenavn()
*/


function listeboksklassekode()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM klassekode ORDER BY klassenavn;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
    /* SQL-setning sendt til database-serveren */
	
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $klassenavn=$rad["klassenavn"]; 
      $klassekode=$rad["klassekode"];

      print("<option value='$klassenavn'>$klassenavn $klassekode</option>");  /* ny verdi i listeboksen laget */
    }
}

function sjekkbokserklassenavn()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM klassekode ORDER BY klassenavn;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");  
    /* SQL-setning sendt til database-serveren */
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $klassenavn=$rad["klassenavn"];       
      $klassekode=$rad["klassekode"];    

      print("<input type='checkbox' id='klassenavn' name='klassenavn[]' value='$klassenavn' /> $klassenavn $klassekode <br/>");  
        /* ny sjekkboks laget */
    }
}



?>