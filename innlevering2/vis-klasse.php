<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Vis klasser</title>
</head>
<body>
    <h1>Alle klasser</h1>
    <table border="1">
        <tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>
        <?php
        $res = $conn->query("SELECT * FROM klasse");
        while ($row = $res->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["klassekode"]."</td>
                    <td>".$row["klassenavn"]."</td>
                    <td>".$row["studiumkode"]."</td>
                  </tr>";
        }
        ?>
    </table>
    <p><a href="index.html">Tilbake til meny</a></p>
</body>
</html>
