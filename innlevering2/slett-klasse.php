<?php /* slett klasse med dynamisk listeboks */
include "db-tilkobling.php";
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Slett klasse</title>
</head>
<body>
    <h1>Slett klasse</h1>
    <form method="post">
        Klassekode: 
        <select name="klassekode" required>
            <option value="">-- Velg klasse --</option>
            <?php include("dynamiske-funksjoner.php"); listeboksklassekode(); ?>
        </select> <br/>
        <input type="submit" value="Slett">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $klassekode = $_POST["klassekode"];
        $sql = "DELETE FROM klasse WHERE klassekode='$klassekode'";
        if ($conn->query($sql)) {
            echo "<p>Klasse slettet!</p>";
        } else {
            echo "<p>Feil: " . $conn->error . "</p>";
        }
    }
    ?>
    <p><a href="index.html">Tilbake til meny</a></p>
</body>
</html>
