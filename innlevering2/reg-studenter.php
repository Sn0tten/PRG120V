<?php /* registrer student med dynamiske funksjoner */
/*  Programmet registrerer en ny student i databasen
*/
?>
<?php include "db-tilkobling.php"; ?>
<?php include "dynamiske-funksjoner.php"; ?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Registrer student</title>
</head>
<body>
    <h1>Registrer ny student</h1>
    <form method="post">
        Brukernavn: <input type="text" name="brukernavn" required><br>
        Fornavn: <input type="text" name="fornavn" required><br>
        Etternavn: <input type="text" name="etternavn" required><br>
        Klassekode: 
        <?php lagDropdown("klasse", "klassekode", "klassekode"); ?>
        <input type="submit" value="Registrer">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $brukernavn = $_POST["brukernavn"];
        $fornavn = $_POST["fornavn"];
        $etternavn = $_POST["etternavn"];
        $klassekode = $_POST["klassekode"];
        $sql = "INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) 
                VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode')";
        if ($conn->query($sql)) {
            echo "<p>Student registrert!</p>";
        } else {
            echo "<p>Feil: " . $conn->error . "</p>";
        }
    }
    ?>
    <p><a href="index.html">Tilbake til meny</a></p>
</body>
</html>
