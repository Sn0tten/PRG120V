<?php /* register studenter */
/*  Programmet registrerer studenter i databasen
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register studenter</title>
</head>
<body>
    <h3>Registrer studenter</h3>
    <form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
        brukernavn <input type="text" id="data1" name="data1" required /> <br/>
        fornavn <input type="text" id="data2" name="data2" required /> <br/>
        etternavn <input type="text" id="data3" name="data3" required /> <br/>
        klassekode <input type="text" id="data4" name="data4" required /> <br/>
        <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
        <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
    </form>
</body>
</html>
<?php
if (isset($_POST ["registrerStudentKnapp"]))
{
    include("register-klasse.php");
}
?>