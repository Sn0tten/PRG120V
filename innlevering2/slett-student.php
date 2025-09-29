<?php include "db-tilkobling.php"; ?>
<?php include "dynamiske-funksjoner.php"; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Slett student</title>
    <script src="funksjoner.js"></script>
</head>
<body>
    <h1>Slett student</h1>
    <form method="post" onsubmit="return bekreft('student', document.querySelector('select[name=brukernavn]').value);">
        Velg student:
        <select name="brukernavn" required>
            <?php listeboksbrukernavn(); ?>
        </select>
        <input type="submit" value="Slett">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $brukernavn = $_POST["brukernavn"];
        $sql = "DELETE FROM student WHERE brukernavn='$brukernavn'";
        if ($conn->query($sql)) {
            echo "<p>Student slettet!</p>";
        } else {
            echo "<p>Feil: " . $conn->error . "</p>";
        }
    }
    ?>
    <p><a href="index.html">Tilbake til meny</a></p>
</body>
</html>
