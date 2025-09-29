<?php
function ListeboksKlassekode() {
    include "db-tilkobling.php";
    $sql = "SELECT klassekode FROM klasse ORDER BY klassekode;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($resultat)) {
            $kode = $rad["klassekode"];
            $navn = $rad["klassenavn"];
            echo "<option value='$klassekode'>$klassekode</option>";
        }
    }
}
?>