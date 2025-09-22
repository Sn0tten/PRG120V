<?php /* vis alle klasser */
/*  Programmet henter alle klasser fra databasen og viser dem i en tabell
*/

    include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */
    
    $sqlSetning="SELECT * FROM klasse ORDER BY klassekode;";
    $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    $antallRader=mysqli_num_rows($sqlResultat); 
    
    print ("<h3>Alle klasser</h3>");
    print ("<table border='1'>");
    print ("<tr><th>klassekode</th><th>klassenavn</th><th>studiumkode</th></tr>");
    
    for ($r=1;$r<=$antallRader;$r++)
        {
        $rad=mysqli_fetch_array($sqlResultat); 
        $klassekode=$rad["klassekode"];
        $klassenavn=$rad["klassenavn"];
        $studiumkode=$rad["studiumkode"];
        
        print ("<tr><td>$klassekode</td><td>$klassenavn</td><td>$studiumkode</td></tr>");
        }
    print ("</table>");
?>
