<?php /* vis alle emner */
/*  Programmet henter alle emner fra databasen og viser dem i en tabell
*/

    include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
    
    $sqlSetning="SELECT * FROM emne ORDER BY emnekode;";
    $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    $antallRader=mysqli_num_rows($sqlResultat); 
    
    print ("<h3>Alle emner</h3>");
    print ("<table border='1'>");
    print ("<tr><th>emnekode</th><th>emnenavn</th><th>studiumkode</th></tr>");
    
    for ($r=1;$r<=$antallRader;$r++)
        {
        $rad=mysqli_fetch_array($sqlResultat); 
        $emnekode=$rad["emnekode"];
        $emnenavn=$rad["emnenavn"];
        $studiumkode=$rad["studiumkode"];
        
        print ("<tr><td>$emnekode</td><td>$emnenavn</td><td>$studiumkode</td></tr>");
        }
    print ("</table>");
?>
