<?php /* registrer klasse */
/*
/*  Programmet lager et html-skjema for å registrere en klasse
/*  Programmet registrerer data (klassekode og klassenavn) i databasen
*/
?>
<h3>Registrer klasse </h3>
<form method="post" action="" id="registrerKlasseSkjema" name="registrerKlasseSkjema">
  klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
  klassenavn <input type="text" id="klasssenavn" name="klasssenavn" required /> <br/>
  Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
  <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" /> 
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php
    if (isset($_POST ["registrerKlasseKnapp"]))
        {
        $klassekode=$_POST ["klassekode"];
        $klasssenavn=$_POST ["klasssenavn"];
        $studiumkode=$_POST ["studiumkode"];
    
        if (!$klassekode || !$klasssenavn || !$studiumkode)
            {
            print ("B&aring;de klassekode, klassenavn og studiumkode m&aring; fylles ut");
            }
        else
            {
            include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
    
            $sqlSetning="SELECT * FROM klasse WHERE klassekode='$klassekode';";
            $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
            $antallRader=mysqli_num_rows($sqlResultat); 
    
            if ($antallRader!=0)  /* klassen er registrert fra før */
                {
                print ("klassekoden er registrert fra f&oslashr");
                }
            else
                {
                $sqlSetning="INSERT INTO klasse VALUES('$klassekode','$klasssenavn','$studiumkode');";
                mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
                    /* SQL-setning sendt til database-serveren */
    
                print ("F&oslash;lgende klasse er n&aring; registrert: $klassekode $klasssenavn $studiumkode"); 
                }
            }
        }
?>