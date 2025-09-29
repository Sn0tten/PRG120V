<?php  /*  dynamiske funksjoner */
/*
/*  denne filen inneholder følgende dynamiske funksjoner:
/*    listeboksstudiumkoder()
/*    sjekkbokserstudiumkoder()
*/


function listeboksstudiumkode()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM studiumnavn ORDER BY studiumkoder;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
    /* SQL-setning sendt til database-serveren */
	
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $studiumkoder=$rad["studiumkoder"]; 
      $studiumnavn=$rad["studiumnavn"];

      print("<option value='$studiumkoder'>$studiumkoder $studiumnavn</option>");  /* ny verdi i listeboksen laget */
    }
}

function sjekkbokserstudiumkoder()
{
  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */
      
  $sqlSetning="SELECT * FROM studiumnavn ORDER BY studiumkoder;";
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");  
    /* SQL-setning sendt til database-serveren */
      
  $antallRader=mysqli_num_rows($sqlResultat);  /* antall rader i resultatet beregnet */

  for ($r=1;$r<=$antallRader;$r++)
    {
      $rad=mysqli_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $studiumkoder=$rad["studiumkoder"];       
      $studiumnavn=$rad["studiumnavn"];    

      print("<input type='checkbox' id='studiumkoder' name='studiumkoder[]' value='$studiumkoder' /> $studiumkoder $studiumnavn <br/>");  
        /* ny sjekkboks laget */
    }
}



?>