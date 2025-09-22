<?php /* endre-emne */
/*  Programmet lager et html-skjema for å endre et emne
/*  Programmet endrer data (emnenavn og studiumkode) i databasen
*/
?>
<script src="funskjoner.js"></script>
<h3>Endre emne </h3>
<form method="post" action="" id="endreEmneSkjema" name="endreEmneSkjema" onsubmit="bekreft()">
  emnekode <input type="text" id="emnekode" name="emnekode"  required /> <br/>
  nytt emnenavn <input type="text" id="emnenavn" name="emnenavn" required /> <br/>
  ny studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  <input type="submit" value="Endre emne" id="endreEmneKnapp" name="endreEmneKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php 
    if (isset($_POST ["endreEmneKnapp"])) // if (dette = true) {}
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
    
            if ($antallRader==0)  /* emnet er ikke registrert */
                {
                print ("emnekoden er ikke registrert");
                }
            else
                {
                $sqlSetning="UPDATE emne SET emnenavn='$emnenavn', studiumkode='$studiumkode' WHERE emnekode='$emnekode';";
                mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; endre data i databasen");
                    /* SQL-setning sendt til database-serveren */
    
                print ("F&oslash;lgende emne er n&aring; endret: $emnekode $emnenavn $studiumkode"); 
                }
            }
        }
?>  

