<?php include "db-tilkobling.php"; ?>
<?php include "dynamiske-funksjoner.php"; ?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Slett klasse</title>
    <script src="funksjoner.js"></script>
</head>
<body>
    <h1>Slett klasse</h1>
    <form method="post" onsubmit="return bekreft('klasse', document.querySelector('select[name=klassekode]').value);">
        Velg klassekode:
        <select name="klassekode" required>
            <?php listeboksklassekode(); ?>
        </select>
        <input type="submit" value="Slett">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kode = $_POST["klassekode"];
        $sql = "DELETE FROM klasse WHERE klassekode='$kode'";
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
