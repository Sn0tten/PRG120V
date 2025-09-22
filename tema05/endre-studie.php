<?php /* endre studie */
/*  Programmet lager et html-skjema for å endre et studium
/*  Programmet endrer data (studium) i databasen
*/
?>
<script src="funskjoner.js"></script>
<h3>Endre studium </h3>
<form method="post" action="" id="endreStudiumSkjema" name="endreStudiumSkjema" onsubmit="bekreft()">
  studiumkode <input type="text" id="studiumkode" name="studiumkode"        required /> <br/>
  nytt studium <input type="text" id="studium" name="studium" required /> <br/>
  <input type="submit" value="Endre studium" id="endreStudiumKnapp" name="endreStudiumKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php 
    if (isset($_POST ["endreStudiumKnapp"]))
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
    
            if ($antallRader==0)  /* studiumet er ikke registrert */
                {
                print ("studiumkoden er ikke registrert");
                }
            else
                {
                $sqlSetning="UPDATE studium SET studium='$studium' WHERE studiumkode='$studiumkode';";
                mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; endre data i databasen");
                    /* SQL-setning sendt til database-serveren */
    
                print ("F&oslash;lgende studium er n&aring; endret: $studiumkode $studium"); 
                }
            }
        }
?>  

