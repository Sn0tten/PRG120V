<?php include "db-tilkobling.php"; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Vis studenter</title>
</head>
<body>
    <h1>Alle studenter</h1>
    <table="1">
        <tr><th>Brukernavn</th><th>Fornavn</th><th>Etternavn</th><th>Klasse</th></tr>
        <?php
        $res = $conn->query("SELECT s.brukernavn, s.fornavn, s.etternavn, k.klassenavn 
                             FROM student s 
                             JOIN klasse k ON s.klassekode = k.klassekode");
        while ($row = $res->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["brukernavn"]."</td>
                    <td>".$row["fornavn"]."</td>
                    <td>".$row["etternavn"]."</td>
                    <td>".$row["klassenavn"]."</td>
                  </tr>";
        }
        ?>
    </table>
    <p><a href="index.html">Tilbake til meny</a></p>
</body>
</html>
