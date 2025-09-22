<?php /* vis student */
/*  Programmet henter alle studenter fra databasen og viser dem i en tabell
*/
    include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
    
    $sqlSetning="SELECT * FROM student ORDER BY brukernavn;";
    $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    $antallRader=mysqli_num_rows($sqlResultat); 
    
    print ("<h3>Alle studenter</h3>");
    print ("<table border='1'>");
    print ("<tr><th>brukernavn</th><th>fornavn</th><th>etternavn</th><th>klassekode</th></tr>");
    
    for ($r=1;$r<=$antallRader;$r++)
        {
        $rad=mysqli_fetch_array($sqlResultat); 
        $brukernavn=$rad["brukernavn"];
        $fornavn=$rad["fornavn"];
        $etternavn=$rad["etternavn"];
        $klassekode=$rad["klassekode"];
        
        print ("<tr><td>$brukernavn</td><td>$fornavn</td><td>$etternavn</td><td>$klassekode</td></tr>");
        }
    print ("</table>");
?>
